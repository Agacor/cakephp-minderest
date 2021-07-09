# CakePHP Minderest Application

## Installation

1. Clone repository into your localhost or similar webserver
```bash
git clone https://github.com/Agacor/cakephp-minderest.git

cd cakephp-minderest
```

2. Update composer dependencies.
```bash
composer update

composer dumpautoload
```

3. Rename the environment specific `config/app_local.example.php` to `config/app_local.php` and setup the default connection in
`'Datasources'` .

```php
'Datasources' => [
    ...
    'default' => [
        'host' => 'localhost',
        'port' => '3306',
        'username' => 'root',
        'password' => '',
        'database' => 'minderest',
        'url' => env('DATABASE_URL', null),
    ],
    ...

```

4. Create database called `minderest`

```bash
mysql> CREATE DATABASE minderest CHARACTER SET utf8 COLLATE utf8_spanish_ci;
```

5. Create tables
```bash
bin/cake migrations migrate
```

6. Seed tables (Only ClientesSeed needed)

```bash
bin/cake migrations seed --seed DatabaseSeed
                -OR-
bin/cake migrations seed --seed ClientesSeed
bin/cake migrations seed --seed ProductosSeed
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

To access the built-in webserver click on http://localhost:8765.

## Layout

The app uses Bottstrap 4.6 [Dashboard](https://getbootstrap.com/docs/4.6/examples/dashboard/) template.

## MVC Framework

The app uses [CakePHP 4.x](https://book.cakephp.org/4/en/index.html) framework.
