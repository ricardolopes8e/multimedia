const { mix } = require('laravel-mix');

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

mix.sass('resources/assets/sass/bulma.sass', 'public/css/bulma.css')
    .sass('resources/assets/sass/font-awesome.scss', 'public/css/font-awesome.css')
    .copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .copy('resources/assets/fonts', 'public/fonts')
    .minify('public/js/jquery.js')
    .js('resources/assets/js/bulma.js', 'public/js/bulma.js');
