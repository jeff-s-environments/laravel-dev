# Laravel Docker Environment

- git clone
- `cp .env.example .env`
- Fill out `.env` fields:
    - `DB_DATABASE`
    - `DB_USERNAME`
    - `DB_PASSWORD`
- `docker-compose up --build -d`
- `docker-compose exec app composer install`
- `docker-compose exec app php artisan key:generate`
- `docker-compose exec app php artisan migrate`
- `http://localhost` = App
- `http://localhost:8080` = Adminer (Database GUI)