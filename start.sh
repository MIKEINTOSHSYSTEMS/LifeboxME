#!/bin/bash

# Set the environment file
export ENV_FILE=.env.dev

# Create required directories
mkdir -p ./data/pgadmin-data
mkdir -p ./data/postgres-data
mkdir -p ./data/postgres-init

# Start the containers
docker-compose -p lifebox -f dev.docker-compose.yml --env-file $ENV_FILE up -d

# Show status
echo "Containers started. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps