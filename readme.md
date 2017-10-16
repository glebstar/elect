<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Electrician

Live Demo is: http://elect.edelen.ru

## Install

Clone project
```
git clone git@github.com:glebstar/elect.git
```

```
cd /path/to/project
composer install
cp .env.example .env

php artisan key:generate
```

Create database, edit .env

```
php artisan migrate
```

```
chmod -R 777 storage
chmod -R 777 bootstap/cache

```

