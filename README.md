# Laravel Course

## install on mac by homebrew
1. php
2. composer
3. mysql
4. setup myphpadmin
5. start or restart using from command only.

## Create Laravel App
- composer create-project laravel/laravel app_name (with gobal package)
- this command you have run again when you create new project

OR

## install the laravel installer
- composer global require laravel/installer (run ince in the system untill you uninstall this from system)
- laravel new app_name

## run project
- php artisan serve

## Create file
- make file
- route for that file
- Q. what if i dont write .blade, will it run ? => Yes

## MVC (Model-view-controller)
- MVC is software designe pattern to develope software
- Model : Write bussiness logic, database communication
- view: user interface(look and feel)
- controller: Handle user interaction and select a view to render, communicate Model and view

## File and Folder Structure
- Important Folder: 
    - composer.json = Defines PHP dependencies and package information
    - vendor = Contains third-party packages and dependencies installed via Composer.
    - app = The core application code resides here, including controllers, models, middleware, and more.
    - route = Routes for web requests
    - resourse = Manages views, raw assets, and localization files
    - public = The web server's document root. Contains the front-facing index.php file, assets like images, CSS, JavaScript, - and compiled files.
    - config = Holds configuration files for various parts of the framework like database, mail, queue, and services.
    - databse = Manages database migrations, factories, and seeders.
    - storage = Stores logs, cached views, and other files the application generates.
    - tests = Contains test cases for the application.
    - .env = Environment-specific configuration

## Routing
- Routing is a path for opening a webpage or URL for opning file.(eg: /home, /about, etc)
- create route
- open view via route
- pass data with route
- Anchor tag
- Redirect
- Routing methods (get,post,put,patch,delete,options,etc)


