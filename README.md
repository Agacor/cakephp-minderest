# CakePHP Minderest Application

## Installation

1. Clone repository into your localhost or similar webserver
```bash
git clone https://github.com/Agacor/cakephp_minderest.git
```

2. Update composer dependencies.
```bash
composer update
composer dumpautoload
```

3. Edit the environment specific `config/app_local.php` and setup the default connection in
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

4. Create tables
```bash
bin/cake migrations migrate
```

5. Seed tables 
```bash
bin/cake migrations seed --seed DatabaseSeed
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

## Layout

The app uses Bottstrap4.6 [Dashboard](https://getbootstrap.com/docs/4.6/examples/dashboard/) template.
