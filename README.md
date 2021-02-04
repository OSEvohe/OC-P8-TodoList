ToDoList
========

Openclassrooms project #8 : Improve an existing project.

https://openclassrooms.com/projects/ameliorer-un-projet-existant-1


[![SonarCloud](https://sonarcloud.io/images/project_badges/sonarcloud-white.svg)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)

[![Maintainability Rating](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=sqale_rating)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)
[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=alert_status)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)
[![Security Rating](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=security_rating)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=bugs)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=code_smells)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=OSEvohe_OC-P8-TodoList&metric=duplicated_lines_density)](https://sonarcloud.io/dashboard?id=OSEvohe_OC-P8-TodoList)

Code Climate  
[![Maintainability](https://api.codeclimate.com/v1/badges/3c10ea86ff7ba94bf013/maintainability)](https://codeclimate.com/github/OSEvohe/OC-P8-TodoList/maintainability)

#Prerequisite
* A Web Server (Apache, Nginx...)
* Php 7.3
* Composer
* A Database engine (Mysql, PostgreSQL...)

## Installation
* Clone or download the project
* Go to project folder in a terminal
* Type `composer install`
* Configure a new host in your web server with `public/` folder as DocumentRoot

### Database setup
* Copy `.env` to `.env.local` and edit database parameters
* Initialize the database :
    * `php bin/console doctrine:database:create`
    * `php bin/console make:migration`
    * `php bin/console doctrine:migrations:migrate`

### Initial database data
* Load users and samples data : `php bin/console doctrine:fixtures:load`

### Admin access
By default, you can log as admin with :  
`admin / adminadmin`

### Unit testing
Tests require minimum data, samples data from fixture can be used
