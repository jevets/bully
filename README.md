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

## Blade Components

Bully includes a few [Blade](blade) [components](blade-components) out of the box.

### Navbar

`components/navbar.blade.php`

Example Usage:

```php
@component('bully::components.navbar')
  @slot('color', 'is-primary')

  @slot('brand', 'My App Name')
  @slot('brandUrl', route('home'))

  // .navbar-menu > .navbar-start
  @slot('start')
    <a class="navbar-item" href="#">Link</a>
  @endslot

  @slot('end')
    <a class="navbar-item" href="#">Link</a>
  @endslot
@endcomponent
```

### Hero

`components/hero.blade.php`

Example Usage:

```php
@component('bully::components.hero')
  @slot('color', 'is-primary')
  @slot('class', 'is-fullheight is-bold')

  @slot('head')
    <div class="container"><!-- ...--></div>
  @endslot

  <!-- .hero-body -->
  <div class="container"><!-- .. --></div>

  @slot('foot')
    <div class="container"><!-- ...--></div>
  @endslot
@endcomponent
```

### Notification

`components/notification.blade.php`

Example Usage:

```php
@component('bully::components.notification')
  @slot('color', 'is-danger')
  <p>You just won $1,000!</p>
@endcomponent
```

## CHANGELOG

## Links

[bulma]: https://bulma.io/
[laravel]: https://laravel.com/
[blade]: https://laravel.com/docs/master/blade
[blade-components]: https://laravel.com/docs/master/blade#components-and-slots
