# Team-258-group-a-backend-php
[![Codacy Badge](https://api.codacy.com/project/badge/Grade/c958f7ef8c71434f9b3a65779203edcd)](https://app.codacy.com/gh/BuildForSDGCohort2/Team-258-group-a-backend-php?utm_source=github.com&utm_medium=referral&utm_content=BuildForSDGCohort2/Team-258-group-a-backend-php&utm_campaign=Badge_Grade_Dashboard)

## Introduction

This is the PHP back end of the fumana work project. This is where the magic happens; you can learn more 
about the project here [Fumana](https://github.com/BuildForSDGCohort2/Team-258-group-a-frontend).

## Requirements

-	PHP 7.2.0 or greater
-	Laravel 7
-	Composer
-   MySQL 
-	Text editor and command line, i use vscode since it combines both

## Installation

This is done on the command line or terminal. 
[Optional] For the full installation go here for [laravel](https://laravel.com/docs/7.x/installation)

*   Clone the app on your computer using https://github.com/BuildForSDGCohort2/Team-258-group-a-backend-php)
*  `cd` into the directory of where you installed this project.
*	Run  `composer install`
*	Run  `cp .env.example .env` to create your .env file
*	In the .env file fill in the ```javascript DB_HOST ```, ```javascript DB_PORT ```, ```javascript DB_DATABASE ```, ```javascript DB_USERNAME ```, and ```javascript DB_PASSWORD ``` options need to match the credentials of the database you just created.
*	Run `php artisan migrate`    to migrate / create the database.
*   [Optional] run     `php artisan db:seed`  if your repo contains a seeder file, to fill your database with dummy data
*   Run `php artisan serve`, the app should run on port 8000

### Todo

- [ ] Create database schema
- [ ] Populate database
- [ ] Ceate Insert/Add user
- [ ] Ceate Edit user
- [ ] Ceate Update user
- [ ] Ceate Delete user
- [ ] Ceate Read user