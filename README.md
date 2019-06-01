# CRUD-Laravel-MongoDB

Create new .env or rename .env.example file and for connection use these:
`
DB_CONNECTION=mongodb
DB_HOST=localhost
DB_PORT=27017
DB_DATABASE=InternetForum //or your mongoDB created DB
DB_USERNAME=
DB_PASSWORD=
`

- Open the console and cd your project root directory
- Run `composer install` or ```php composer.phar install```
- Run `php artisan key:generate` 
- Run `php artisan migrate`
- Run `php artisan db:seed` to run seeders, if any.
- Run `php artisan serve`



