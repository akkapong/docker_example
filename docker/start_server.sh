#!/bin/sh

#remove old container
docker rm -f web_server
docker rm -f mysql_server
docker-compose rm

#create container
docker-compose build mysql_server
docker-compose up -d mysql_server

docker-compose build web_server
docker-compose up -d web_server

sleep 5

# run script in mysql server for create and import data to db
docker exec -it mysql_server sh /start_script.sh
