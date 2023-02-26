<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Assessment Task

### Task Description :

Make an efficient web software which finds out the top 10 users who have most topup at the previous day. Make a process that will run every day first hour automatically, and can also initiate the process manually.

### Notes:

Use only three tables with below required fields along with the necessary fields

1. Users (required fields: name, email)
2. Topups (required fields: users_id, amount)
3. Top Topup Users (required fields: users_id, count): This table will hold maximum 10 records

For View make only one page, that will show the top topup users with search and in this page make a button that can initiate the process of finding the previous day's top topup users.

<!-- - [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications. -->

## Requirements :

1. Laravel version 8
2. Design Database
3. Maintain Coding Structure
4. Write Clean Code
5. Maintain Folder Structure
6. Use Database Queue Driver
7. Minimum User Records 500
8. Minimum Top up Records 200,000 /per day (need only 3 days worth of records)
9. Make blade template view for top users (show only 2 records per page)
10. Make a search field to search by user
11. Make a button that can initiate the top user finding process
12. For the design you can use bootstrap free AdminLTE template or whichever you like
13. No need for Authentication

# Project Set Up

### project dependency

```bash
  "php": "^7.3|^8.0"
```

git clone to set up this project :

```bash
  git clone https://github.com/masudrana03/kode-mason-coding-test.git
```

```bash
  cd kode-mason-coding-test
```

Install composer :

```bash
  composer install
```

Copy env :

```bash
  cp .env.example .env
```

when database connection is done :

```bash
  php artisan key:gen
```

Know we ready to run the project :

```bash
  php artisan serve --port=8001
```

### One click set up :

```bash
  git clone https://github.com/masudrana03/kode-mason-coding-test.git ;  cd kode-mason-coding-test; composer install ; cp .env.example .env ; php artisan key:gen ; php artisan serve --port=8001 ;
```

Import sql file :

```bash
  php artisan serve --port=8001
```

or
Run the migration and seeder command :

```bash
  php artisan migrate:fresh --seed
```


# Project Status Check

### To check the queue is working :

```bash
php artisan queue:work
```

### To check the schedule is working :

```bash
php artisan schedule:work
```

## Project Ending
This project aimed to develop a web application using Laravel 8 that could efficiently find the top 10 users with the most top-up amounts from the previous day. The project successfully met this goal by implementing a daily scheduled job that used Laravel Eloquent relationships to query the database and store the results in a dedicated table.

During development, I faced several challenges, such as optimizing the database queries to handle a large number of records, but we were able to overcome these obstacles by carefully designing the database schema and using Laravel's built-in features.

Overall, I am proud of the outcome of this project and believe it serves as a useful example of how to leverage Laravel's features to develop efficient and scalable web applications.

