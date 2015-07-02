## Instructions

- rename .env.example and set a valid mysql DB Host and User/Pass;
- run `php artisan migrate` then `php artisan db:seed` (or import `db.sql`) to prepare the DB;
- publish `public` folder. `index.php` is the entry point.