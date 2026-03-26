import psycopg2
import yaml
import os
from dotenv import load_dotenv
from typing import Dict, List

# Load environment variables
load_dotenv()

def get_db_connection():
    try:
        conn = psycopg2.connect(
            host=os.getenv('DB_HOST'),
            port=int(os.getenv('DB_PORT')),
            user=os.getenv('DB_USER'),
            password=os.getenv('DB_PASSWORD'),
            database=os.getenv('DB_NAME')
        )
        return conn
    except psycopg2.Error as e:
        print(f"Error connecting to PostgreSQL: {e}")
        return None

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

def get_table_schemas(conn) -> Dict[str, List[Dict]]:
    cursor = conn.cursor()
    # PostgreSQL query to get tables
    cursor.execute("""
        SELECT table_name 
        FROM information_schema.tables 
        WHERE table_schema = 'public' 
        AND table_type = 'BASE TABLE'
    """)
    tables = [table[0] for table in cursor.fetchall()]
    
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
                "Description": ""
            }
            for col in columns
        ]
    return schemas

def generate_openapi_spec(schemas: Dict[str, List[Dict]]) -> str:
    openapi_spec = {
        "openapi": "3.0.4",
        "info": {
            "title": "Lifebox System API",
            "description": "Auto-generated API from PostgreSQL schema",
            "version": "1.0.0"
        },
        "servers": [
            {
                "url": "https://mne.lifebox.org/app/api/v1.php",
                "description": "Main production server"
            }
        ],
        "paths": {
            "/": {  # Single endpoint for all operations
                "get": {
                    "tags": ["general"],
                    "summary": "List table records",
                    "description": "Retrieve multiple records from any table with optional filtering and pagination",
                    "operationId": "listRecords",
                    "parameters": [
                        {
                            "name": "table",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "Name of the table to query"
                        },
                        {
                            "name": "action",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string",
                                "enum": ["list", "view"],
                                "default": "list"
                            }
                        },
                        {
                            "name": "apikey",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "API key for authentication. Use the exact key without modification.",
                            "example": "YOUR_API_KEY_HERE"
                        },
                        {
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
                        {
                            "name": "skip",
                            "in": "query",
                            "schema": {
                                "type": "integer",
                                "default": 0,
                                "minimum": 0
                            },
                            "description": "Number of records to skip for pagination"
                        },
                        {
                            "name": "q",
                            "in": "query",
                            "schema": {"type": "string"},
                            "description": "Advanced search filter (e.g., (Status~equals~Active))"
                        },
                        {
                            "name": "qs",
                            "in": "query",
                            "schema": {"type": "string"},
                            "description": "Full-text search query"
                        },
                        {
                            "name": "editid1",
                            "in": "query",
                            "description": "Required for view action - ID of record to view",
                            "schema": {"type": "string"}
                        }
                    ],
                    "responses": {
                        "200": {
                            "description": "Successful operation",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": True},
                                            "data": {
                                                "type": "array",
                                                "items": {
                                                    "type": "object",
                                                    "additionalProperties": True
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        "400": {
                            "description": "Invalid request parameters",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "401": {
                            "description": "Missing or invalid API key",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "500": {
                            "description": "Server-side error",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "post": {
                    "tags": ["general"],
                    "summary": "Create or update a record",
                    "description": "Create a new record (action=insert) or update an existing one (action=update). For updates, editid1 parameter with ID is required.",
                    "operationId": "modifyRecord",
                    "parameters": [
                        {
                            "name": "table",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "Name of the table"
                        },
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
                            "name": "apikey",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "API key for authentication. Use the exact key without modification.",
                            "example": "YOUR_API_KEY_HERE"
                        },
                        {
                            "name": "editid1",
                            "in": "query",
                            "description": "Required for updates - ID of record to update",
                            "schema": {"type": "string"}
                        }
                    ],
                    "requestBody": {
                        "required": True,
                        "content": {
                            "application/x-www-form-urlencoded": {
                                "schema": {
                                    "type": "object",
                                    "additionalProperties": True
                                }
                            },
                            "application/json": {
                                "schema": {
                                    "type": "object",
                                    "additionalProperties": True
                                }
                            }
                        }
                    },
                    "responses": {
                        "200": {
                            "description": "Record created/updated successfully",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": True},
                                            "message": {"type": "string"},
                                            "id": {"type": "integer"},
                                            "updated_fields": {
                                                "type": "array",
                                                "items": {"type": "string"}
                                            }
                                        }
                                    }
                                }
                            }
                        },
                        "400": {
                            "description": "Invalid request parameters",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "401": {
                            "description": "Missing or invalid API key",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "404": {
                            "description": "Record not found",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "500": {
                            "description": "Server-side error",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        }
                    }
                },
                "delete": {
                    "tags": ["general"],
                    "summary": "Delete a record",
                    "description": "Delete a record (action=delete)",
                    "operationId": "deleteRecord",
                    "parameters": [
                        {
                            "name": "table",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "Name of the table"
                        },
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
                            "name": "apikey",
                            "in": "query",
                            "required": True,
                            "schema": {
                                "type": "string"
                            },
                            "description": "API key for authentication. Use the exact key without modification.",
                            "example": "YOUR_API_KEY_HERE"
                        },
                        {
                            "name": "editid1",
                            "in": "query",
                            "required": True,
                            "description": "ID of record to delete",
                            "schema": {"type": "string"}
                        }
                    ],
                    "responses": {
                        "200": {
                            "description": "Record deleted successfully",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": True}
                                        }
                                    }
                                }
                            }
                        },
                        "400": {
                            "description": "Invalid request parameters",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "401": {
                            "description": "Missing or invalid API key",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "404": {
                            "description": "Record not found",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        },
                        "500": {
                            "description": "Server-side error",
                            "content": {
                                "application/json": {
                                    "schema": {
                                        "type": "object",
                                        "properties": {
                                            "success": {"type": "boolean", "example": False},
                                            "error": {"type": "string"}
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        },
        "components": {
            "schemas": {},
            "securitySchemes": {
                "apiKey": {
                    "type": "apiKey",
                    "name": "apikey",
                    "in": "query",
                    "description": "API key for authentication. Obtain from lifebox System Users portal."
                }
            }
        },
        "security": [{"apiKey": []}]
    }

    # Add table-specific schemas for documentation
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

    return yaml.dump(openapi_spec, sort_keys=False, allow_unicode=True)

if __name__ == "__main__":
    conn = get_db_connection()
    if conn:
        schemas = get_table_schemas(conn)
        with open("lifeboxme_dynamic.yaml", "w", encoding='utf-8') as f:
            f.write(generate_openapi_spec(schemas))
        conn.close()
        print("Generated lifeboxme_dynamic.yaml with correct URL structure")
        print("\nIMPORTANT: When using the API, manually enter your API key with $ characters.")
        print("The Swagger UI will automatically URL-encode $ as %24, but your backend should handle this.")