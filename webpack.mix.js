const mix = require('laravel-mix')

mix.setPublicPath('dist')

mix.sass('resources/assets/sass/bully.scss', 'dist/css/bully.css')

mix.js('resources/assets/js/bully.js', 'dist/js/bully.js')
