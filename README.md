composer install 
cp .env.example .env
php artisan key:generate
docker-compose up -d
docker-compose exec app php artisan migrate
docker-compose exec app php artisan passport:install