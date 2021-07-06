# CakePHP Minderest Application

## Installation

1. Clone repository into your localhost or similar webserver
2. Config DDBB connection. Edit the environment specific `config/app_local.php` and setup the default connection in
`'Datasources'` .

3. Create tables
```bash
bin/cake migrations migrate
```
4. Seed tables 
```bash
bin/cake migrations seed --seed DatabaseSeed
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the main page.

## Configuration

Edit the environment specific `config/app_local.php` and setup the default connection in
`'Datasources'` .
Other environment agnostic settings can be changed in `config/app.php`.

## Layout

The app uses Bottstrap4.6 [Dashboard](https://getbootstrap.com/docs/4.6/examples/dashboard/) template.
