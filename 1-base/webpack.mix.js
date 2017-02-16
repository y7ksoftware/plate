const { mix } = require('laravel-mix');
const { config } = require('./webpack.mix.config');

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

// Load Webpack Config
mix.webpackConfig(config.webpack);


mix

    // Build Javascript
    .js('resources/assets/js/app.js', 'public/build/js')

    // Extract libraries to vendor.js file
    .extract(['vue', 'barba.js', 'bugsnag-js', 'lazysizes', 'axios'])

    // Build Stylesheets
    .sass('resources/assets/scss/main.scss', 'public/build/css', config.sass)
