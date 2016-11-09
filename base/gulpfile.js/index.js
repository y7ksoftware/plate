var Elixir = require('laravel-elixir');
var config = require('./config');

require('laravel-elixir-vue-2');
require('laravel-elixir-eslint');
require('laravel-elixir-imagemin');

Elixir(function (mix) {

    mix

        // Minify images
        .imagemin()

        // Build CSS
        .sass('vendor.scss')
        .sass('main.scss')

        // Lint code for errors
        .eslint(config.eslint.paths)

        // Build Javascript with Webpack
        .webpack('app.js')

        // Copy font files to build folder
        // .copy(config.fonts.assets, config.fonts.build)

        // Concatenate all js FILES inside "js/vendor/" - *including* files in  subfolders - to "build/js/vendor.js" to include all at once
        // .scriptsIn(config.vendorjs.assets.folder, config.vendorjs.build.file)

        // Concatenate all js files inside "js/vendor/" - *excluding* its subfolders - to "build/js/vendor.js"
        // .scripts(config.vendorjs.assets.folder + '/*.js', config.vendorjs.build.file)

        // Copy any FOLDER inside "js/vendor/" to "build/js/vendor" untouched (for separate, single script import)
        // .copy(config.vendorjs.assets.folder + '/*', config.vendorjs.build.folder)

        // Version Files
        // .version(['css/main.css', 'js/app.js'])

        // Start browsersync if appliable
        .browserSync(config.browserSync);

});
