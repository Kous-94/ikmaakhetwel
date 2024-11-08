# Makefile for Docker Compose Laravel Project

# Variables
DOCKER_COMPOSE = docker-compose

# Commands
.PHONY: build rebuild up down stop start logs clean

# Build the application container
build:
	$(DOCKER_COMPOSE) build

# Rebuild the application container without cache
rebuild:
	$(DOCKER_COMPOSE) build --no-cache

# Start the application in detached mode
up:
	$(DOCKER_COMPOSE) up -d

# Stop all running containers
down:
	$(DOCKER_COMPOSE) down

# Stop containers without removing them
stop:
	$(DOCKER_COMPOSE) stop

# Start previously stopped containers
start:
	$(DOCKER_COMPOSE) start

# Tail logs for all services
logs:
	$(DOCKER_COMPOSE) logs -f

# Clean up all containers and remove volumes
clean:
	$(DOCKER_COMPOSE) down -v
