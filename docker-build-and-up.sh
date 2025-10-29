#!/bin/bash

# Construir la imagen de Docker
docker build -t allblue-image .

# Iniciar los contenedores
docker compose up -d