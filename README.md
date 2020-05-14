# flask-phpApache-docker-2containers
A web application in Apache-php invoking get from a different flask web service done by containerising in a docker-compose file


 docker-compose build --no-cache
 docker-compose up -d
 docker-compose stop
 docker-compose down

remeber to build without cache as once any error docker container is processed by docker-compose, it keeps accesing from the old docker file without updating
