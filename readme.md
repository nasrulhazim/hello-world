
## Hello World Laravel Package

Typical Hello World Demo

## Installation

```
composer require nasrulhazim/hello-world
```

## Register Service Provider

Open up `config/app.php` and register `NasrulHazim\Hello\World\HelloWorldServiceProvider::class,` in `providers` key.

## Usage

Say hello

```
php artisan hello:world
```

## License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).