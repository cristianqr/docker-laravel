#!/bin/sh
docker-compose run --rm composer update
docker-compose run --rm artisan db:create nfmc_laravel_oauth
docker-compose run --rm artisan migrate
docker-compose run --rm artisan passport:client --password
docker-compose run --rm artisan db:seed
