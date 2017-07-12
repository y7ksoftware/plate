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


mix

    // Build Javascript
    .js('resources/assets/js/app.js', 'public/build/js')

    // Extract libraries to vendor.js file
    .extract(['vue', 'barba.js', 'bugsnag-js', 'lazysizes', 'axios', 'lodash'])

    // Copy assets
    .copyDirectory('resources/assets/fonts', 'public/build/fonts')
    .copyDirectory('resources/assets/images', 'public/build/images')

    // Copy whole js vendor folders
    //.copy('resources/assets/js/vendor/modernizr', 'public/build/js/vendor/modernizr', false)

    // Build Stylesheets
    .sass('resources/assets/scss/main.scss', 'public/build/css', config.sass)
    .options({ processCssUrls: false })

    // Build sourcemaps
    .sourceMaps()

    // Start BrowserSync
    .browserSync(config.browserSync)

    .webpackConfig(config.webpack);

// Version Files
if (mix.inProduction()) {
    // mix.version();
}
