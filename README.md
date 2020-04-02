
## About

This a test API which has accounts, orders and products functionality.
It also makes use of the laravel passport module to authenticate users.

The functionality is very basic but demonstrates how results can be paginted when being passed on to a front-end app like vue or react.

The has full CRUD functionality

The Account and Order models have a one to many relationship respectively
The Product and Order models have this too.

The relationships does not have any foreign key constraints on the database level but can be added if need be by creating an update migration.

## How to run the app
Step 1
Clone the the repo or copy to your hosting folder

Step 2
Navigate to the app folder

Step 3
Run 'Composer dump-autoload

Step 4
Create a database in your database

Step 5
Add database details to the .env file
Add PAGE_SIZE constant to .env file and set value according to how many items you want displayed per page

Step 6
Run command 'php artisan migrate'

Step 6
Run command 'php artisan db:seed'

Step 7
Run command 'php artisan serve'

## Available routes 
User routes (POST)
http://127.0.0.1:8000/api/register
http://127.0.0.1:8000/api/login

Account routes (GET)
http://127.0.0.1:8000/api/accounts
http://127.0.0.1:8000/api/accounts/1
Account routes (POST)
http://127.0.0.1:8000/api/accounts
Account routes (PUT) & (DELETE)
http://127.0.0.1:8000/api/accounts/1

Orders routes (GET)
http://127.0.0.1:8000/api/orders
http://127.0.0.1:8000/api/account_orders/1
http://127.0.0.1:8000/api/orders/1
Orders routes (POST)
http://127.0.0.1:8000/api/orders
Orders routes (PUT) & (DELETE)
http://127.0.0.1:8000/api/orders/1

Products routes (GET)
http://127.0.0.1:8000/api/products
http://127.0.0.1:8000/api/products/1
Account routes (POST)
http://127.0.0.1:8000/api/products
Account routes (PUT) & (DELETE)
http://127.0.0.1:8000/api/products/1

## Authentication
The API routes are are all behind a middleware that requires users to be signed in.
The seed creates a user whose login details are
email = admin@test.com & password = password
use these details to login here http://127.0.0.1:8000/api/login by passing the 2 params using a client such as insomnia or postman
Once authenticated a bearer token will be returned and this should be passed in the header when making requested to the API

If the login details provided do not work you can use the http://127.0.0.1:8000/api/register route to create another account.
