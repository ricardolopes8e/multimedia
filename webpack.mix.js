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

/*
mix.sass('resources/assets/sass/bulma.sass', 'public/css/bulma2.css')
    .sass('resources/assets/sass/font-awesome.sass', 'public/css/font-awesome.css')
    .copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .copy('resources/assets/fonts', 'public/fonts')
    .minify('public/js/jquery.js')
    .js('resources/assets/js/app.js', 'public/js/bulma.js' );*/

mix.sass('resources/assets/css/app.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js');

