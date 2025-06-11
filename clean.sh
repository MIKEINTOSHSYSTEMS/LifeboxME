#!/bin/bash

# Set the environment file
#export ENV_FILE=.env.dev
ENV_FILE=.env.dev

# Full cleanup - containers, volumes, and images
docker-compose -p lifebox -f dev.docker-compose.yml --env-file $ENV_FILE down --volumes --rmi all

# Clean data directories
echo "Cleaning all data directories..."
rm -rf ./data/pgadmin-data
rm -rf ./data/postgres-data
rm -rf ./data/postgres-init

echo "Full cleanup completed. Running containers:"
docker-compose -p lifebox -f dev.docker-compose.yml ps