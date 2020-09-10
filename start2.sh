#!/usr/bin/env bash
docker-compose exec app php artisan migrate
docker-compose exec app php artisan passport:install