# laravel-newsfeed
Laravel test project

1. Install project dependencies:
  composer install

2. Create your .env and generate key:
  cp .env.example .env
  php artisan key:generate

3. Create your own DB and DB user or use default:

CREATE DATABASE laravel_newsfeed_db;
CREATE USER 'laravel_newsfeed_user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON laravel_newsfeed_db.* TO 'laravel_newsfeed_user'@'localhost';

4. Run migrations:
  php artisan migrate

5. (optional) You may want to seed db with random data:
  php artisan db:seed
  
6. Navigate to http://127.0.0.1:8000 in your browser after running:
  php artisan serve
