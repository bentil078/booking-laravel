<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# booking-laravel
Booking is a laravel application with Three user roles. The roles are Admin, Instructor  and Member/User.

Instructors are to schedule a class and delete/cancel classes.

Users are to check for available classes and book for any of the classes available



## How to set up
Duplicate the .env.example file and rename it to .env and put all your connections in there

First clone the project
open your terminal and do composer install
set up your database connections from the .env file
Run php artisan migrate
You can generate a key for your version with php artisan key:generate
finally php artisan serve


## To-do

1. Work on admin Page
2. Work on mailing system 





## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).