# RIA1-realtime

An example of a realtime app with laravel and websokets !

## Install

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

## User

| email        | username | pass   |
|--------------|----------|--------|
| root@unix.io | root     | secret |

## Official docs

* [laravel](https://laravel.com/docs/5.6/)
* [laravel echo](https://laravel.com/docs/5.6/broadcasting)