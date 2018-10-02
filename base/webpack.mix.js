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

    .setPublicPath('./public/build')
    .webpackConfig(config.webpack)
    .options({
        processCssUrls: false,
    })

    // Build Javascript
    .js('resources/assets/js/app.js', 'js')

    // Extract libraries to vendor.js file
    .extract(['vue', /*'barba.js', 'bugsnag-js', 'lazysizes', 'axios'*/])

    // Copy assets
    .copyDirectory('resources/assets/fonts', 'public/build/fonts')
    .copyDirectory('resources/assets/images', 'public/build/images')

    // Copy whole js vendor folders
    //.copy('resources/assets/js/vendor/modernizr', 'public/js/vendor/modernizr', false)

    // Build Stylesheets
    .sass('resources/assets/scss/main.scss', 'css', config.sass)

    // Build sourcemaps
    .sourceMaps()

    // Start BrowserSync
    .browserSync(config.browserSync)



// Version Files
if (mix.inProduction()) {
    mix.version();
}
