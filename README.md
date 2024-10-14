<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>




# Hướng dẫn cài đặt InnoShop
PHP version 8.2
Node.js version >=18.12.0

## 1. Pull the Code from GitHub ​
Open the terminal and execute the following commands:

```sh
git clone https://github.com/dovietthang/laravel_base.git
cd laravel_base
```
## 2. Install Third-Party Dependencies ​
Open the terminal, navigate to the project directory, and then run the following command to install the required third-party packages:

```sh
composer install
```
## 3. Compile Front-End Resources ​
Execute the following command to compile the front-end CSS and JavaScript files:

```sh
npm install && npm run prod
```
## 4. Set Up the Upload Resources Directory ​
Run the following command to create and set up the directory for uploaded resources:

```sh
php artisan storage:link
```
## 5. Set the Website Root Directory ​
Point your website's root directory to the current project's public folder and configure the pseudo-static pages.

Web Installation Option

After completing the above steps, you have the option to open our installation wizard page through your browser, which will guide you through the remaining installation process. Of course, if you prefer to install manually using the command line, please continue reading the guide below.

## 6. Create the Configuration File ​
Copy the .env.example file to create a new .env configuration file:

```sh
cp .env.example .env
```
## 7. Configure the Database ​
Depending on your database type, open the .env file and fill in the database configuration information. If you are using SQLite:

SQLite

Your .env file should not contain the DB_HOST key. You also need to create the database/database.sqlite file and set the appropriate permissions.

```sh
touch ./database/database.sqlite
chmod 666 ./database/database.sqlite
```
If you are using MySQL, you will need to modify the database configuration starting with DB_ according to the actual database information.

## 8. Set the Application Key ​
Before generating the APP_KEY, make sure you have the correct read and write permissions for the .env file. Then, run the following command:

```sh
php artisan key:generate
```
## 9. Database Migration and Data Seeding ​
Finally, execute the following commands to create the database structure and import the basic data:

```sh
php artisan migrate && php artisan db:seed
```
After completing the above steps, your InnoShop should be successfully installed. You can now access it via a browser and start exploring.

## 9. Run ​

```sh
php artisan serve
```


## Demo Site
 - Frontend: http://127.0.0.1:8000/
 - Backend: http://127.0.0.1:8000/panel
 - Account: admin@innoshop.com
 - Password: 123456
