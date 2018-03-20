# Setup laravel with realtime

## Prerequistes

* PHP 7.1 (and the [required](https://laravel.com/docs/5.6/installation) laravel extensions)
* node.js 8+
* Redis 4+ (nessesary to broadcast events between laravel and soket.io server)
* [laravel-echo-server](https://github.com/tlaverdure/laravel-echo-server)

## Install

Clone the repo, and run the follownig instructions :

```sh
# Clone the repo
git clone git@github.com:bastiennicoud/RIA1-realtime.git

# Install the composer dependencies
composer install

# Copy the .env.example
cp .env.example .env

# Open our .env and setup a database with mysql (or postgres)

# Generate laravel keys
php artisan key:generate

# Migrate and seed the database
php artisan migrate:fresh --seed

# Install node dependencies
yarn
# or
npm i

# Start our dev server
php artisan serve
```

## Start the server

To use laravel with realtime, you need to start 3 servicies.
* The **php** server `php artisan serve`
* The **redis** server, see the [doc](https://redis.io/download) for our platform
* The **laravel-echo-server** installed globaly on our machine `laravel-echo-server start`

Once all these servicies are launched, you can open the app on `localhost:8000`.