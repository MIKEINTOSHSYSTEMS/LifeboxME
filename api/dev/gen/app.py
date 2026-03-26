from flask import Flask, jsonify, render_template, send_from_directory, request, make_response
from flask_cors import CORS
import psycopg2
import psycopg2.extras
import os
import yaml
import json
from dotenv import load_dotenv
from typing import Dict, List
import sys

# Fix: Explicitly load .env from the current directory
env_path = os.path.join(os.path.dirname(__file__), '.env')
if os.path.exists(env_path):
    load_dotenv(env_path)
    print(f"✅ Loaded .env from: {env_path}")
else:
    load_dotenv()  # fallback to default
    print(f"⚠️  Warning: .env not found at {env_path}, using default loading")

# Debug: Print environment variables (without password)
print("\n📋 Database Configuration:")
for key in ['DB_HOST', 'DB_PORT', 'DB_USER', 'DB_NAME']:
    print(f"   {key}={os.getenv(key)}")
print("   DB_PASSWORD=********")
print()

app = Flask(__name__, template_folder='templates', static_folder='static')

# Add CORS support
CORS(app, resources={
    r"/api/*": {
        "origins": ["https://editor.swagger.io", "https://mne.lifebox.org", "http://localhost:3000"],
        "methods": ["GET", "POST", "PUT", "DELETE", "OPTIONS"],
        "allow_headers": ["Content-Type", "Authorization", "X-Auth-Token", "apikey"]
    }
})    

# Tables Parameter for skipping
skip_tables_env = os.getenv('SKIP_TABLES', '')
if skip_tables_env:
    SKIP_TABLES = [table.strip() for table in skip_tables_env.split(',') if table.strip()]
else:
    # Default tables to skip if not specified in .env
    SKIP_TABLES = [
        'users',
        'lifeboxme__audit',
        'lifeboxme__locking',
        'kbusers'
    ]

print(f"🚫 Tables to skip: {SKIP_TABLES}\n")

def get_db_connection():
    try:
        db_host = os.getenv('DB_HOST')
        db_port_str = os.getenv('DB_PORT')
        db_user = os.getenv('DB_USER')
        db_password = os.getenv('DB_PASSWORD')
        db_name = os.getenv('DB_NAME')
        
        # Debug output
        print(f"🔌 Connecting to database:")
        print(f"   Host: {db_host}")
        print(f"   Port raw: '{db_port_str}'")
        print(f"   User: {db_user}")
        print(f"   Database: {db_name}")
        
        # Set default port if not specified
        if not db_port_str or db_port_str.strip() == '':
            db_port = 5432
            print("   Using default port: 5432")
        else:
            try:
                db_port = int(db_port_str)
                print(f"   Using port: {db_port}")
            except ValueError:
                print(f"   Invalid port value: '{db_port_str}', using default 5432")
                db_port = 5432
        
        # Validate required fields
        if not all([db_host, db_user, db_password, db_name]):
            missing = []
            if not db_host: missing.append('DB_HOST')
            if not db_user: missing.append('DB_USER')
            if not db_password: missing.append('DB_PASSWORD')
            if not db_name: missing.append('DB_NAME')
            raise Exception(f"Missing required environment variables: {', '.join(missing)}")
        
        print(f"✅ Connecting to PostgreSQL at {db_host}:{db_port}/{db_name}")
        
        return psycopg2.connect(
            host=db_host,
            port=db_port,
            user=db_user,
            password=db_password,
            database=db_name
        )
    except Exception as e:
        print(f"❌ Database connection error: {e}")
        raise

def get_primary_key(conn, table):
    cursor = conn.cursor()
    # PostgreSQL query to get primary key
    cursor.execute("""
        SELECT a.attname
        FROM pg_index i
        JOIN pg_attribute a ON a.attrelid = i.indrelid AND a.attnum = ANY(i.indkey)
        WHERE i.indrelid = %s::regclass AND i.indisprimary
    """, (table,))
    key = cursor.fetchone()
    return key[0] if key else None

# API Endpoints
@app.route("/api/tables")
def list_tables():
    try:
        conn = get_db_connection()
        cursor = conn.cursor()
        # PostgreSQL query to get tables
        cursor.execute("""
            SELECT table_name 
            FROM information_schema.tables 
            WHERE table_schema = 'public' 
            AND table_type = 'BASE TABLE'
        """)
        tables = [table[0] for table in cursor.fetchall() if table[0] not in SKIP_TABLES]
        return jsonify({"success": True, "tables": tables})
    except Exception as e:
        return jsonify({"success": False, "error": str(e)})
    finally:
        if 'conn' in locals(): 
            conn.close()

@app.route("/api/<table>", methods=['GET', 'POST', 'PUT', 'DELETE'])
def handle_table_data(table):
    try:
        action = request.args.get('action', 'list')
        editid1 = request.args.get('editid1')
        records = request.args.get('records', 100, type=int)
        skip = request.args.get('skip', 0, type=int)
        q_filter = request.args.get('q', '')
        qs_search = request.args.get('qs', '')
        
        if request.method == 'GET':
            return get_table_data(table, action, editid1, records, skip, q_filter, qs_search)
        elif request.method in ['POST', 'PUT']:
            # Get update data from query parameters only (not from form/json)
            form_data = request.args.to_dict()
            # Remove non-column parameters
            for param in ['action', 'editid1', 'apikey', 'table', 'records', 'skip', 'q', 'qs']:
                form_data.pop(param, None)
            
            return modify_table_data(table, action, editid1, form_data)
        elif request.method == 'DELETE':
            return delete_table_data(table, editid1)
    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

def get_table_data(table, action, editid1, records, skip, q_filter, qs_search):
    conn = get_db_connection()
    cursor = conn.cursor()
    
    # Use dictionary cursor for PostgreSQL
    cursor = conn.cursor(cursor_factory=psycopg2.extras.DictCursor)
    
    pk = get_primary_key(conn, table)
    
    base_query = f"SELECT * FROM {table}"
    conditions = []
    params = []
    
    if action in ['view', 'update'] and editid1 and pk:
        conditions.append(f"{pk} = %s")
        params.append(editid1)
    else:
        if q_filter:
            conditions.append(q_filter)
        if qs_search:
            # PostgreSQL full-text search (adjust based on your needs)
            conditions.append(f"to_tsvector('english', COALESCE(column1, '') || ' ' || COALESCE(column2, '')) @@ to_tsquery('english', %s)")
            params.append(qs_search)
        
        base_query += " LIMIT %s OFFSET %s"
        params.extend([records, skip])
    
    if conditions:
        base_query += " WHERE " + " AND ".join(conditions)
    
    cursor.execute(base_query, params)
    data = [dict(row) for row in cursor.fetchall()]
    conn.close()
    return jsonify({"success": True, "data": data})

def modify_table_data(table, action, editid1, form_data):
    conn = get_db_connection()
    cursor = conn.cursor()
    pk = get_primary_key(conn, table)
    
    try:
        if action == 'insert':
            # Remove empty values from form_data
            filtered_data = {k: v for k, v in form_data.items() if v is not None and v != ''}
            if not filtered_data:
                return jsonify({"success": False, "error": "No data provided for insertion"}), 400
                
            columns = ', '.join(filtered_data.keys())
            placeholders = ', '.join(['%s'] * len(filtered_data))
            query = f"INSERT INTO {table} ({columns}) VALUES ({placeholders}) RETURNING *"
            cursor.execute(query, list(filtered_data.values()))
            
        elif action == 'update' and editid1 and pk:
            if not form_data:
                return jsonify({"success": False, "error": "No columns specified for update"}), 400
                
            # First get the existing record to ensure it exists
            cursor.execute(f"SELECT * FROM {table} WHERE {pk} = %s", (editid1,))
            existing_record = cursor.fetchone()
            
            if not existing_record:
                return jsonify({"success": False, "error": "Record not found"}), 404
            
            # Prepare update data - only include fields that are in the form_data and not empty
            update_data = {}
            for key, value in form_data.items():
                if value is not None and value != '':
                    update_data[key] = value
            
            if not update_data:
                return jsonify({"success": False, "error": "No valid fields to update"}), 400
            
            set_clause = ', '.join([f"{key}=%s" for key in update_data])
            query = f"UPDATE {table} SET {set_clause} WHERE {pk} = %s RETURNING *"
            cursor.execute(query, list(update_data.values()) + [editid1])
        
        conn.commit()
        return jsonify({
            "success": True, 
            "id": cursor.fetchone()[0] if cursor.description else None,
            "message": "Record updated successfully" if action == 'update' else "Record created successfully",
            "updated_fields": list(update_data.keys()) if action == 'update' else None
        })
        
    except Exception as e:
        conn.rollback()
        return jsonify({"success": False, "error": str(e)}), 500
    finally:
        conn.close()

def delete_table_data(table, editid1):
    if not editid1:
        return jsonify({"success": False, "error": "editid1 parameter is required"})
    
    conn = get_db_connection()
    cursor = conn.cursor()
    pk = get_primary_key(conn, table)
    
    if not pk:
        return jsonify({"success": False, "error": "Primary key not found"})
    
    cursor.execute(f"DELETE FROM {table} WHERE {pk} = %s", (editid1,))
    conn.commit()
    conn.close()
    return jsonify({"success": True})

@app.route("/api/<table>/schema")
def get_table_schema(table):
    try:
        conn = get_db_connection()
        cursor = conn.cursor()
        # PostgreSQL query to get column information
        cursor.execute("""
            SELECT 
                column_name,
                data_type,
                is_nullable,
                column_default,
                ordinal_position
            FROM information_schema.columns 
            WHERE table_name = %s 
            AND table_schema = 'public'
            ORDER BY ordinal_position
        """, (table,))
        columns = cursor.fetchall()
        schema = [
            {
                "field": col[0],
                "type": col[1],
                "null": col[2],
                "default": col[3],
                "description": ""  # PostgreSQL doesn't have built-in column comments in this query
            }
            for col in columns
        ]
        return jsonify({"success": True, "schema": schema})
    except Exception as e:
        return jsonify({"success": False, "error": str(e)})
    finally:
        if 'conn' in locals(): 
            conn.close()

# OpenAPI Spec Endpoints
@app.route("/api/generate-spec", methods=['POST'])
def generate_openapi_spec_endpoint():
    try:
        conn = get_db_connection()
        schemas = get_table_schemas(conn)
        spec = generate_openapi_spec(schemas)
        conn.close()
        
        # Ensure output directory exists
        os.makedirs("output", exist_ok=True)
        
        # Write YAML file
        with open("lifeboxme_dynamic.yaml", "w") as f:
            f.write(spec)
            
        # Also write JSON file
        spec_dict = yaml.safe_load(spec)
        with open("output/openapi.json", "w") as f:
            json.dump(spec_dict, f, indent=2)
            
        return jsonify({"success": True, "message": "OpenAPI specification generated successfully in both YAML and JSON formats"})
    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

@app.route("/api/spec")
def get_openapi_spec():
    try:
        if not os.path.exists("lifeboxme_dynamic.yaml") or not os.path.exists("output/openapi.json"):
            conn = get_db_connection()
            schemas = get_table_schemas(conn)
            spec = generate_openapi_spec(schemas)
            conn.close()
            
            # Ensure output directory exists
            os.makedirs("output", exist_ok=True)
            
            # Write YAML file
            with open("lifeboxme_dynamic.yaml", "w") as f:
                f.write(spec)
                
            # Also write JSON file
            spec_dict = yaml.safe_load(spec)
            with open("output/openapi.json", "w") as f:
                json.dump(spec_dict, f, indent=2)
        else:
            with open("lifeboxme_dynamic.yaml", "r") as f:
                spec = f.read()
        
        response = make_response(spec)
        response.headers['Content-Type'] = 'application/x-yaml'
        return response
    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

@app.route("/api/spec/download")
def download_openapi_spec():
    try:
        if not os.path.exists("lifeboxme_dynamic.yaml") or not os.path.exists("output/openapi.json"):
            conn = get_db_connection()
            schemas = get_table_schemas(conn)
            spec = generate_openapi_spec(schemas)
            conn.close()
            
            # Ensure output directory exists
            os.makedirs("output", exist_ok=True)
            
            # Write YAML file
            with open("lifeboxme_dynamic.yaml", "w") as f:
                f.write(spec)
                
            # Also write JSON file
            spec_dict = yaml.safe_load(spec)
            with open("output/openapi.json", "w") as f:
                json.dump(spec_dict, f, indent=2)
        else:
            with open("lifeboxme_dynamic.yaml", "r") as f:
                spec = f.read()
        
        response = make_response(spec)
        response.headers['Content-Type'] = 'application/x-yaml'
        response.headers['Content-Disposition'] = 'attachment; filename=lifeboxme_dynamic.yaml'
        return response
    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

# Add a new endpoint to serve the JSON spec
@app.route("/api/spec/json")
def get_openapi_spec_json():
    try:
        if not os.path.exists("output/openapi.json"):
            conn = get_db_connection()
            schemas = get_table_schemas(conn)
            spec = generate_openapi_spec(schemas)
            conn.close()
            
            # Ensure output directory exists
            os.makedirs("output", exist_ok=True)
            
            # Write YAML file
            with open("lifeboxme_dynamic.yaml", "w") as f:
                f.write(spec)
                
            # Also write JSON file
            spec_dict = yaml.safe_load(spec)
            with open("output/openapi.json", "w") as f:
                json.dump(spec_dict, f, indent=2)
        else:
            with open("output/openapi.json", "r") as f:
                spec_dict = json.load(f)
        
        response = make_response(json.dumps(spec_dict, indent=2))
        response.headers['Content-Type'] = 'application/json'
        return response
    except Exception as e:
        return jsonify({"success": False, "error": str(e)}), 500

# UI Routes
@app.route("/")
def home():
    return render_template('index.html')

@app.route("/docs")
def api_docs():
    return render_template('docs.html')

@app.route("/explorer")
def data_explorer():
    return render_template('explorer.html')

@app.route("/swaggertest")
def swagger_tester():
    return render_template('swagger.html')

# Helper functions for OpenAPI generation
def get_table_schemas(conn) -> Dict[str, List[Dict]]:
    cursor = conn.cursor()
    cursor.execute("""
        SELECT table_name 
        FROM information_schema.tables 
        WHERE table_schema = 'public' 
        AND table_type = 'BASE TABLE'
    """)
    tables = [table[0] for table in cursor.fetchall() if table[0] not in SKIP_TABLES]
    
    schemas = {}
    for table in tables:
        cursor.execute("""
            SELECT 
                column_name,
                data_type,
                is_nullable,
                column_default,
                ordinal_position
            FROM information_schema.columns 
            WHERE table_name = %s 
            AND table_schema = 'public'
            ORDER BY ordinal_position
        """, (table,))
        columns = cursor.fetchall()
        schemas[table] = [
            {
                "Field": col[0],
                "Type": col[1],
                "Nullable": col[2],
                "Default": col[3],
                "Description": ""  # You can extend this to get comments if needed
            }
            for col in columns
        ]
    return schemas

def generate_openapi_spec(schemas: Dict[str, List[Dict]]) -> str:
    openapi_spec = {
        "openapi": "3.0.4",
        "info": {
            "title": "Lifebox System API 1.0",
            "description": (
                "This is a comprehensive Lifebox System Server based on the OpenAPI 3.0 specification.  "
                "You can find out more about [Lifebox API Documentation](https://mne.lifebox.org/api/dev/api/).\n"
                "You can find the Generator for this Spec at [Lifebox API Spec Generator](http://mne.lifebox.org:/openapigen/).\n"
                "If you want to access the spec editor you can find it at [Swagger Editor](https://mne.lifebox.org/swagger_editor/) "
                "You can modify the API Spec whether it's by making changes to the definition itself or to the code using the python app.py!\n\n"
                "That way, with time, we can improve the API in general, and expose some of the new features in OAS3.\n\n"
                "Some useful links:\n"
                "- [The Lifebox System Repository](https://github.com/MIKEINTOSHSYSTEMS/LifeboxME\n"
                "- [The source API definition for Lifebox System YAML](https://mne.lifebox.org/api/dev/gen/lifeboxme_dynamic.yaml)\n"
                "- [The source API definition for Lifebox System JSON](https://mne.lifebox.org/api/dev/gen/output/openapi.json)\n"
                "- To Get Your API Key Please go to [Lifebox System Users](https://mne.lifebox.org/app/userinfo.php) and Login Using Your Account\n"
                "- [Contact the Developers](https://merqconsultancy.org)\n\n"
                "Information Section"
            ),
            "version": "1.0.0",
            "termsOfService": "https://swagger.io/terms/",
            "contact": {
                "email": "michaelktd@merqconsultancy.org"
            },
            "license": {
                "name": "Apache 2.0",
                "url": "https://www.apache.org/licenses/LICENSE-2.0.html"
            }
        },
        "externalDocs": {
            "description": "Find out more about Swagger",
            "url": "https://swagger.io"
        },
        "servers": [
            {
                "url": "https://mne.lifebox.org/app/api/v1.php",
                "description": "Current server"
            }
        ],
        "security": [{"apiKey": []}],
        "paths": {},
        "components": {
            "securitySchemes": {
                "apiKey": {
                    "type": "apiKey",
                    "name": "apikey",
                    "in": "query",
                    "description": "API key for authentication. Obtain from Lifebox System Users portal."
                }
            },
            "schemas": {},
            "parameters": {
                "apiKey": {
                    "name": "apikey",
                    "in": "query",
                    "required": True,
                    "schema": {
                        "type": "string",
                        "example": "$2y$10$CPrlfPZs4wI0QHECfzUUq.0eyCgbkRwOpNOpSpnyVDnmOVOav2qTm"
                    },
                    "description": "API key for authentication"
                },
                "records": {
                    "name": "records",
                    "in": "query",
                    "schema": {
                        "type": "integer",
                        "default": 20,
                        "minimum": 1,
                        "maximum": 100
                    },
                    "description": "Number of records to return"
                },
                "skip": {
                    "name": "skip",
                    "in": "query",
                    "schema": {
                        "type": "integer",
                        "default": 0,
                        "minimum": 0
                    },
                    "description": "Number of records to skip for pagination"
                },
                "advancedFilter": {
                    "name": "q",
                    "in": "query",
                    "schema": {"type": "string"},
                    "description": "Advanced search filter (e.g., (Status~equals~Active))"
                },
                "fulltextSearch": {
                    "name": "qs",
                    "in": "query",
                    "schema": {"type": "string"},
                    "description": "Full-text search query"
                }
            },
            "responses": {
                "BadRequest": {
                    "description": "Invalid request parameters",
                    "content": {
                        "application/json": {
                            "schema": {
                                "$ref": "#/components/schemas/Error"
                            }
                        }
                    }
                },
                "Unauthorized": {
                    "description": "Missing or invalid API key",
                    "content": {
                        "application/json": {
                            "schema": {
                                "$ref": "#/components/schemas/Error"
                            }
                        }
                    }
                },
                "Forbidden": {
                    "description": "Insufficient permissions",
                    "content": {
                        "application/json": {
                            "schema": {
                                "$ref": "#/components/schemas/Error"
                            }
                        }
                    }
                },
                "NotFound": {
                    "description": "Resource not found",
                    "content": {
                        "application/json": {
                            "schema": {
                                "$ref": "#/components/schemas/Error"
                            }
                        }
                    }
                },
                "ServerError": {
                    "description": "Server-side error",
                    "content": {
                        "application/json": {
                            "schema": {
                                "$ref": "#/components/schemas/Error"
                            }
                        }
                    }
                }
            }
        }
    }

    for table, columns in schemas.items():
        # Create schema definitions
        properties = {}
        for col in columns:
            properties[col["Field"]] = {
                "type": "string" if "varchar" in col["Type"].lower() else 
                       "integer" if "int" in col["Type"].lower() else
                       "number" if "float" in col["Type"].lower() or "double" in col["Type"].lower() else
                       "boolean" if "bool" in col["Type"].lower() else
                       "string",
                "description": col["Description"],
                "nullable": col["Nullable"] == "YES"
            }
            if "date" in col["Type"].lower():
                properties[col["Field"]]["format"] = "date"
        
        openapi_spec["components"]["schemas"][table] = {
            "type": "object",
            "properties": properties
        }
        
        openapi_spec["components"]["schemas"][f"{table}Input"] = {
            "type": "object",
            "additionalProperties": True,
            "properties": {k: v for k, v in properties.items() if k.lower() != "id"}
        }
        
        openapi_spec["components"]["schemas"][f"{table}Response"] = {
            "type": "object",
            "properties": {
                "success": {"type": "boolean", "example": True},
                "data": {"$ref": f"#/components/schemas/{table}"}
            }
        }
        
        openapi_spec["components"]["schemas"][f"{table}ListResponse"] = {
            "type": "object",
            "properties": {
                "success": {"type": "boolean", "example": True},
                "data": {
                    "type": "array",
                    "items": {"$ref": f"#/components/schemas/{table}"}
                }
            }
        }
        
        openapi_spec["components"]["schemas"]["SuccessResponse"] = {
            "type": "object",
            "properties": {
                "success": {"type": "boolean", "example": True},
                "message": {"type": "string"},
                "updated_fields": {
                    "type": "array",
                    "items": {"type": "string"},
                    "description": "List of fields that were updated (only for update operations)"
                }
            }
        }
        
        openapi_spec["components"]["schemas"]["Error"] = {
            "type": "object",
            "properties": {
                "success": {"type": "boolean", "example": False},
                "error": {"type": "string", "example": "Error message describing the issue"}
            }
        }

        # Standard parameters that will be used in all operations
        standard_params = [
            {
                "name": "table",
                "in": "query",
                "required": True,
                "schema": {
                    "type": "string",
                    "enum": [table.lower()],
                    "default": table.lower()
                }
            }
        ]

        # List operation parameters
        list_params = standard_params + [
            {
                "name": "action",
                "in": "query",
                "required": True,
                "schema": {
                    "type": "string",
                    "enum": ["list"],
                    "default": "list"
                }
            },
            {"$ref": "#/components/parameters/records"},
            {"$ref": "#/components/parameters/skip"},
            {"$ref": "#/components/parameters/advancedFilter"},
            {"$ref": "#/components/parameters/fulltextSearch"}
        ]

        # Insert/Update operation parameters
        modify_params = standard_params + [
            {
                "name": "action",
                "in": "query",
                "required": True,
                "schema": {
                    "type": "string",
                    "enum": ["insert", "update"]
                }
            },
            {
                "name": "editid1",
                "in": "query",
                "description": f"Required for updates - ID of {table} to update",
                "schema": {"type": "string"}
            }
        ]

        # Add column parameters for modify operation
        column_params = []
        for col in columns:
            if col["Field"].lower() != "id":
                param_name = f"{table}_{col['Field']}"
                column_params.append({
                    "name": col["Field"],
                    "in": "query",
                    "description": f"Update {col['Field']} field",
                    "schema": properties[col["Field"]],
                    "required": False
                })

        # Delete operation parameters
        delete_params = standard_params + [
            {
                "name": "action",
                "in": "query",
                "required": True,
                "schema": {
                    "type": "string",
                    "enum": ["delete"],
                    "default": "delete"
                }
            },
            {
                "name": "editid1",
                "in": "query",
                "required": True,
                "description": f"ID of {table} to delete",
                "schema": {"type": "string"}
            }
        ]

        # View operation parameters
        view_params = standard_params + [
            {
                "name": "action",
                "in": "query",
                "required": True,
                "schema": {
                    "type": "string",
                    "enum": ["view"],
                    "default": "view"
                }
            },
            {
                "name": "editid1",
                "in": "query",
                "required": True,
                "description": f"ID of {table} to view",
                "schema": {"type": "string"}
            }
        ]

        # Add paths for each table
        openapi_spec["paths"][f"/{table.lower()}"] = {
            "get": {
                "tags": [table.lower()],
                "summary": f"List {table} records",
                "description": f"Retrieve multiple {table} records with optional filtering and pagination",
                "operationId": f"list{table}",
                "parameters": list_params,
                "security": [{"apiKey": []}],
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": f"#/components/schemas/{table}ListResponse"
                                }
                            }
                        }
                    },
                    "400": {"$ref": "#/components/responses/BadRequest"},
                    "401": {"$ref": "#/components/responses/Unauthorized"},
                    "403": {"$ref": "#/components/responses/Forbidden"},
                    "500": {"$ref": "#/components/responses/ServerError"}
                }
            },
            "post": {
                "tags": [table.lower()],
                "summary": f"Create or update a {table} record",
                "description": f"Create a new {table} (action=insert) or update an existing one (action=update). For updates, editid1 parameter with ID is required. Only specified fields will be updated.",
                "operationId": f"modify{table}",
                "parameters": modify_params + column_params,
                "security": [{"apiKey": []}],
                "responses": {
                    "200": {
                        "description": f"{table} created/updated successfully",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/SuccessResponse"
                                }
                            }
                        }
                    },
                    "400": {"$ref": "#/components/responses/BadRequest"},
                    "401": {"$ref": "#/components/responses/Unauthorized"},
                    "403": {"$ref": "#/components/responses/Forbidden"},
                    "404": {"$ref": "#/components/responses/NotFound"},
                    "500": {"$ref": "#/components/responses/ServerError"}
                }
            },
            "delete": {
                "tags": [table.lower()],
                "summary": f"Delete a {table} record",
                "description": f"Delete a {table} record (action=delete)",
                "operationId": f"delete{table}",
                "parameters": delete_params,
                "security": [{"apiKey": []}],
                "responses": {
                    "200": {
                        "description": f"{table} deleted successfully",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": "#/components/schemas/SuccessResponse"
                                }
                            }
                        }
                    },
                    "400": {"$ref": "#/components/responses/BadRequest"},
                    "401": {"$ref": "#/components/responses/Unauthorized"},
                    "403": {"$ref": "#/components/responses/Forbidden"},
                    "404": {"$ref": "#/components/responses/NotFound"},
                    "500": {"$ref": "#/components/responses/ServerError"}
                }
            }
        }

        # Add view endpoint
        openapi_spec["paths"][f"/{table.lower()}/view"] = {
            "get": {
                "tags": [table.lower()],
                "summary": f"View a single {table} record",
                "description": f"Retrieve a single {table} record by ID (action=view)",
                "operationId": f"view{table}",
                "parameters": view_params,
                "security": [{"apiKey": []}],
                "responses": {
                    "200": {
                        "description": "Successful operation",
                        "content": {
                            "application/json": {
                                "schema": {
                                    "$ref": f"#/components/schemas/{table}Response"
                                }
                            }
                        }
                    },
                    "400": {"$ref": "#/components/responses/BadRequest"},
                    "401": {"$ref": "#/components/responses/Unauthorized"},
                    "403": {"$ref": "#/components/responses/Forbidden"},
                    "404": {"$ref": "#/components/responses/NotFound"},
                    "500": {"$ref": "#/components/responses/ServerError"}
                }
            }
        }

    return yaml.dump(openapi_spec, sort_keys=False)

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5000, debug=True)