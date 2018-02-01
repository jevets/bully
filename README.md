# Work In Progress

And is Subject to Change

---

# Bully

Bully is a [Bulma](bulma)-based admin theme for [Laravel](laravel) 5.5.

![screenshot](https://github.com/jevets/bully/tree/master/resources/screenshot.png)

## Install

> Installation requires manual editing of your Laravel's `composer.json` file, at least until the repo is set up on packagist and available via `composer require`.

Require the package and defined the repository in your Laravel project's `composer.json`:

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

### Publish the assets

**You must publish the compiled assets** unless you're customizing, which includes a stylesheet and a few scripts.

```sh
php artisan vendor:publish
# select the option for [bully-assets]
```

This will publish a `bully` folder to your public directory, with the following files:

```
public/
  bully/
    css/
      bully.css
    img/
    js/
      bully.js
```

## Customize

## Blade Components

Bully includes a few [Blade](blade) [components](blade-components) out of the box.

### Navbar

> todo: document @slot('toggleTargetId', 'my-special-target') for menu toggling if including default bully.js

`components/navbar.blade.php`

Example Usage:

```blade
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

```blade
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

```blade
@component('bully::components.notification')
  @slot('color', 'is-danger')
  <p>You just won $1,000!</p>
@endcomponent
```

### Layout Components

#### Hero Card Narrow

`components/layouts/hero-card-narrow.blade.php`

- See `views/auth/*.blade.php` for more thorough examples

Example Usage:

```blade
@component('bully::components.layouts.hero-narrow-card')
  @slot('title', 'Login')

  <!-- injected into card content -->
  <p>Hello, World!</p>

  @slot('foot')
    <!-- centered block below card -->
    <a href="#">Go elsewhere</a>
  @endslot
@endcomponent
```

## CHANGELOG

- 2018.02.01 Initial Offering

## Links

[bulma]: https://bulma.io/
[laravel]: https://laravel.com/
[blade]: https://laravel.com/docs/master/blade
[blade-components]: https://laravel.com/docs/master/blade#components-and-slots
