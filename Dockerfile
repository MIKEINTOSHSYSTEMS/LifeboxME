

################################################################################
# Setup for MkDocs
################################################################################

FROM squidfunk/mkdocs-material:latest AS mkdocs_app

# Copy MkDocs configuration and content
COPY docs /docs
#COPY mkdocs.yml /docs
#COPY mkdocs.yml /docs/mkdocs.yml  

# Copy the mkdocs.yml file into the container

# Expose the port MkDocs listens on
EXPOSE 8558

# Start MkDocs uncomment if you want to start the entry point
CMD ["serve", "-a", "0.0.0.0:8558"]

################################################################################
# Setup for Openapi Generator
################################################################################
# OpenAPI Generator stage - SIMPLIFIED VERSION
FROM python:3.9-slim AS openapi_gen

# Install system dependencies
RUN apt-get update && apt-get install -y \
    wget \
    gcc \
    python3-dev \
    netcat-openbsd \   
    curl \
    git \     
    nano \    
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app

COPY api/dev/gen/requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY api/dev/gen .

CMD ["python", "app.py"]
EXPOSE 5000

################################################################################
# Note on DNS issues with Docker
################################################################################

#If Unable to connect to the dns servers use the following command on the host
#sudo nano /etc/docker/daemon.json
# Add the following lines to the file
#{
#"dns": ["8.8.8.8", "1.1.1.1"]
#}
# Restart the Docker service
#sudo systemctl restart docker
