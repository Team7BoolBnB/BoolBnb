const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/backend.js', 'public/js')
    .js('resources/js/frontend.js', 'public/js')
    .js('resources/js/handlerMaps.js', 'public/js')
    .js('resources/js/backend/tomtomAPI.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
    
