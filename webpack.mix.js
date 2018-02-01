const mix = require('laravel-mix')

mix.setPublicPath('dist')

mix.sass('resources/assets/sass/bully.scss', 'dist/css')
mix.sass('resources/assets/sass/dashboard.scss', 'dist/css/dashboard.css')

mix.js('resources/assets/js/bully.js', 'dist/js')

mix.copy('resources/assets/img', 'dist/img')
