# flask-phpApache-docker-2containers
A web application in Apache-php invoking get from a different flask web service done by containerising in a docker-compose file


  689  docker-compose build --no-cache
  690  docker-compose up -d
  691  docker-compose stop
  692  docker-compose down

remeber to build without cache as once any error docker container is processed by docker-compose, it keeps accesing from the old docker file without updating
