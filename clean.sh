#!/bin/bash
set -e

cd "$(dirname "$0")"
ENV_FILE=.env.dev

read -p "Are you sure you want to permanently delete all containers, images, volumes, and data directories? [y/N] " confirm
if [[ $confirm != "y" ]]; then
  echo "Aborting cleanup."
  exit 1
fi

echo "Stopping and cleaning Docker containers, volumes, and images..."
docker-compose -p lifebox -f dev.docker-compose.yml --env-file "$ENV_FILE" down --volumes --rmi all

echo "Removing data directories..."
sudo rm -rf ./data/pgadmin-data ./data/postgres-data ./data/postgres-init

echo "Stashing local Git changes..."
git stash

echo "Pulling latest changes from Git..."
git pull

echo "Full cleanup completed. Current container status:"
docker-compose -p lifebox -f dev.docker-compose.yml ps
