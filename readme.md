<h1 align="center">Laravel Dev</h1>

Useful commands:

- `docker-compose exec app php artisan` = PHP Artisan commands
- `docker-compose exec app php artisan migrate` = Run migrations
- `docker-compose exec app php artisan migrate:refresh` = Roll back and rerun migrations
- `docker-compose exec app php artisan migrate --seed` = Run migrations and seeders
- `composer dump-autoload` = When adding new files, run this after