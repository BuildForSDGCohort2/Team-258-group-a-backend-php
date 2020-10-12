# Team-258-group-a-backend-php
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c958f7ef8c71434f9b3a65779203edcd)](https://app.codacy.com/gh/BuildForSDGCohort2/Team-258-group-a-backend-php?utm_source=github.com&utm_medium=referral&utm_content=BuildForSDGCohort2/Team-258-group-a-backend-php&utm_campaign=Badge_Grade_Dashboard)

## Introduction

This is the PHP back end of the fumana work project. This is where the magic happens; you can learn more 
about the project here [Fumana](https://github.com/BuildForSDGCohort2/Team-258-group-a-frontend).

## Requirements

-	PHP 7.2.0 or greater
-	Laravel 8
-	Composer
-   sqlite
-	Text editor and command line, i use vscode since it combines both

## Installation

This is done on the command line or terminal. 
[Optional] For the full installation go here for [laravel](https://laravel.com/docs/7.x/installation)

*   Clone the app on your computer 
*  `cd` into the directory of where you installed this project.
*	Run  `composer install`
*	Run  `cp .env.example .env` if you have a .env file duplicate it and change the name to .env
*	In the .env file remove DB_HOST , DB_PORT , DB_DATABASE , DB_USERNAME , and DB_PASSWORD, only leave DB_CONNECTION=, change DB_CONNECTION=mysql to DB_CONNECTION=sqlite.
*	Whilst in the .env file add, `DB_DATABASE=absolute\path\to\database\database.sqlite` and `DB_FOREIGN_KEYS=true`  each on a new line 
*   In the database folder, create a file – database.sqlite (this is database file with extension .sqlite).
*	Run `php artisan migrate`    to migrate / create the database if the foreign key give a problem you can  create each table on its on by running `php artisan migrate --path=\database\migrations\2014_10_12_000000_create_tablename_table.php`
*   [Optional]go \database\seeders\DatabaseSeeder.php and uncommment the seeder class you want to run and run     `php artisan db:seed`  if your repo contains a seeder file, to fill your database with dummy data. 
*   Run `php artisan serve`, the app should run on port 8000

### Todo

- [ ] Create database schema
- [ ] Populate database
- [ ] Ceate Insert/Add user
- [ ] Ceate Edit user
- [ ] Ceate Update user
- [ ] Ceate Delete user
- [ ] Ceate Read user