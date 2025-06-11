#!/bin/bash

# Set the environment file
export ENV_FILE=.env.dev

# Create required directories
mkdir -p ./data/pgadmin-data
mkdir -p ./data/postgres-data
mkdir -p ./data/postgres-init

# Create database initialization script if it doesn't exist
INIT_SCRIPT="./data/postgres-init/01-create-meta-db.sql"
if [ ! -f "$INIT_SCRIPT" ]; then
    echo "Creating database initialization script..."
    cat > "$INIT_SCRIPT" <<EOF
CREATE DATABASE lifeboxmeta;
GRANT ALL PRIVILEGES ON DATABASE lifeboxmeta TO postgres;
EOF
fi

# Start the containers
docker-compose -p lifebox -f dev.docker-compose.yml --env-file $ENV_FILE up -d

# Show status
echo "Containers started. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps