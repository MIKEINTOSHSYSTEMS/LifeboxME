

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