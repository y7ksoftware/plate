var Elixir = require('laravel-elixir');
var config = require('./config');

require('laravel-elixir-vue');
require('laravel-elixir-eslint');
require('laravel-elixir-imagemin');

Elixir(function(mix) {

    mix

    // Minify images
    .imagemin()

    // Copy font files to build folder
    .copy(config.fonts.assets, config.fonts.build)

    // Build css
    .sass('vendor.scss')
    .sass('main.scss')

    // Lint code for errors
    .eslint(config.eslint.paths)

    // Build App with Webpack
    .webpack('app.js')

    // Concatenate all js FILES inside "js/vendor/" to "build/js/vendor.js" to include all at once
    .scripts(config.vendorjs.assets.folder + '/*.js', config.vendorjs.build.file)

    // Copy any FOLDER inside "js/vendor/" to "build/js/vendor" untouched (for separate, single script import)
    .copy(config.vendorjs.assets.folder + '/*', config.vendorjs.build.folder)

    // Start browsersync if appliable
    .browserSync(config.browserSync);

});
