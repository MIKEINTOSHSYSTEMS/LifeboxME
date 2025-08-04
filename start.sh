#!/bin/bash

# Set permissions
chmod 644 .env.dev

# Load environment variables
set -a
source .env.dev
set +a

# Create required directories
mkdir -p ./data/{pgadmin-data,postgres-data,postgres-init,mariadb_data,mysql-init}

# Create MariaDB initialization script
cat > "./data/mysql-init/01-create-db.sql" <<EOF
CREATE DATABASE IF NOT EXISTS ${MARIADB_DATABASE};
CREATE USER IF NOT EXISTS '${MARIADB_USER}'@'%' IDENTIFIED BY '${MARIADB_PASSWORD}';
GRANT ALL PRIVILEGES ON *.* TO '${MARIADB_USER}'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
EOF

# Create PostgreSQL initialization script
cat > "./data/postgres-init/01-create-meta-db.sql" <<EOF
CREATE DATABASE lifeboxmeta;
GRANT ALL PRIVILEGES ON DATABASE lifeboxmeta TO postgres;
EOF

# Clean and start fresh
docker-compose -p lifebox -f dev.docker-compose.yml down
docker volume prune -f
rm -rf ./data/mariadb_data/*

# Start containers
docker-compose -p lifebox -f dev.docker-compose.yml up -d

# Verify
echo "Containers started. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps
