// Load Dotenv
require('dotenv').load();

const baseDir = require('path').resolve(__dirname);

const config = {

    sass: {
        includePaths: [
            baseDir + '/resources/assets/scss',
            baseDir + '/node_modules'
        ]
    },

    /*
     * Webpack Config
     */

    webpack: {

        resolve: {
            modules: [
                baseDir + '/resources/assets/js',
                baseDir + '/node_modules'
            ],
            // Uncomment this to include the template compiler
            // alias: {
            //     'vue$': 'vue/dist/vue.js'
            // }
        },

        externals: {}

    },


    /*
     * BrowserSync
     */

    browserSync: {
        proxy: process.env.APP_URL,
        notify: false,
        open: false,
        files: [
            baseDir + '/{public,app,craft}/**/*.php',
            baseDir + '/public/build/**/*.{js,css}',
            baseDir + '/resources/{views,lang}/**/*.{php,twig}'
        ]
    }


};

module.exports.config = config;
