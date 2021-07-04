# CakePHP Minderest Application

## Installation

1. Clone repository into your localhost or similar webserver
2. Config DDBB connection
3. Create tables
4. Seed tables 

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

The app skeleton uses [Milligram](https://milligram.io/) (v1.3) minimalist CSS
framework by default. You can, however, replace it with any other library or
custom styles.
