<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation Steps

-   Create an env file using the provided example
-   Specify your sql credential in the env file
-   Add your stripe api keys to the env file together with the stripe price id for deposite
-   Run the database migration command ```php artisan migrate:fresh```
-   Seed the database using artsian command ```php artisan db:seed```
-   Start the work queue using ```php artisan queue:work```
-   Create a storage symbolic using the command ``` php artisan storage:link ```
-   Run ``` npm run dev ```
-   Start the program by running ```php artisan serve ```
