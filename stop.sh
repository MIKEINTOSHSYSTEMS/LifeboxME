#!/bin/bash

# Set the environment file
export ENV_FILE=.env.dev

# Stop and remove containers with volumes
docker-compose -p lifebox -f dev.docker-compose.yml --env-file $ENV_FILE down --volumes

# Clean data directories (commented out by default - uncomment if needed)
# echo "Cleaning data directories..."
# rm -rf ./data/pgadmin-data
# rm -rf ./data/postgres-data
# rm -rf ./data/postgres-init

echo "Services stopped. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps