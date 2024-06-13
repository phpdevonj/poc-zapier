# Zapier Integration With Laravel

> ### Zapier is an online automation tool that connects your favorite apps, such as Gmail, Slack, MailChimp, and more, to automate repetitive tasks without the need for coding or relying on developers to build integrations.

This repo is functionality complete — PRs and issues welcome!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Clone the repository

    git clone https://github.com/phpdevonj/poc-zapier.git

Switch to the repo folder

    cd poc-zapier

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

    
**Make sure you set the correct database connection information before running the migrations.**

    php artisan migrate
    php artisan serve

