#!/bin/bash

chmod 644 .env.dev

# Load environment variables
set -a
source .env.dev
set +a

# Create required directories
mkdir -p ./data/pgadmin-data
mkdir -p ./data/postgres-data
mkdir -p ./data/postgres-init
mkdir -p ./data/mariadb_data
mkdir -p ./data/mysql-init

# Create MariaDB initialization script
cat > "./data/mysql-init/01-create-db.sql" <<EOF
CREATE DATABASE IF NOT EXISTS ${MARIADB_DATABASE};
CREATE USER IF NOT EXISTS '${MARIADB_USER}'@'%' IDENTIFIED BY '${MARIADB_PASSWORD}';
GRANT ALL PRIVILEGES ON *.* TO '${MARIADB_USER}'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

# Create Lifebox Forms database initialization script
cat > "./data/mysql-init/02-create-lifebox-forms-db.sql" <<EOF
CREATE DATABASE IF NOT EXISTS ${LIFEBOX_FORMS_DB_NAME};
CREATE USER IF NOT EXISTS '${LIFEBOX_FORMS_DB_USER}'@'%' IDENTIFIED BY '${LIFEBOX_FORMS_DB_PASSWORD}';
GRANT ALL PRIVILEGES ON *.* TO '${LIFEBOX_FORMS_DB_USER}'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

# Create PostgreSQL initialization script
INIT_SCRIPT="./data/postgres-init/01-create-meta-db.sql"
if [ ! -f "$INIT_SCRIPT" ]; then
    echo "Creating database initialization script..."
    cat > "$INIT_SCRIPT" <<EOF
CREATE DATABASE lifeboxmeta;
GRANT ALL PRIVILEGES ON DATABASE lifeboxmeta TO postgres;
EOF
fi

# Start the containers
docker-compose -p lifebox -f dev.docker-compose.yml up -d

# Show status
echo "Containers started. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps
echo "Services are now running. You can access the application at '${BASE_URL}'."
