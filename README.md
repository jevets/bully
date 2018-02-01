# Bully

Bully is a [Bulma](bulma)-based admin theme for [Laravel](laravel) 5.5.

## Install

> Installation is manual (requires editing `composer.json`), until the repo is set up on packagist and available via `composer require`.

Add the package to your Laravel project's `composer.json`:

```json
"require": {
  "jevets/bully": "dev-master"
},
"repositories": [
  {
    "type": "git",
    "url": "https://github.com/jevets/bully"
  }
]
```

Then run `composer update` or `composer install`.

**You must publish the compiled assets** unless you're customizing, which includes a stylesheet and a few scripts.

```sh
php artisan vendor:publish --provider="Jevets\Bully\ServiceProvider::class"
```

## Customize

## CHANGELOG

## Links

[bulma]: https://bulma.io/
[laravel]: https://laravel.com/
