# ecommerce-solidaire-minisite
Mini site ecommerce solidaire

## Start project on local

If you already have php/mysql/npm, don't launch docker stuff.

1. `docker-compose build --no-cache --pull`
1. `docker-compose up -d`
1. `docker-compose exec web bash`
1. `composer install`
1. `npm i`
1. `npm run dev`
1. `php artisan migrate`
1. Rename .env.exemple to .env
1. Open http://localhost

## Compilation sass/js
1. `npm run dev`
