# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

Please run the command project directory
composer install --no-dev

## Setup
## Step 1: Database Configuration
Update your database configuration in the Config/Database.php file:

'username'     => 'root',
'password'     => '',
'database'     => 'user_crud',

## Step 2: Migrate the Database
To set up the database schema, use the following command
php spark migrate
This will run any pending database migrations and create the necessary tables.
then finaly your open web browser and type 
http://localhost/your-project/
