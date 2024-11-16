# laravel_course

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

# install the laravel installer
- composer global require laravel/installer (run ince in the system untill you uninstall this from system)
- laravel new app_name

# run project
- php artisan serve

## Create file
- make file
- route for that file
- Q. what if i dont write .blade, will it run ? => Yes

## MVC (Model-view-controller) || Folder Structure
- MVC is software designe pattern to develope software
- Model : Write bussiness logic, database communication
- view: user interface(look and feel)
- controller: Handle user interaction and select a view to render, communicate Model and view