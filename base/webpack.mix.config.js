// Load Dotenv
require('dotenv').load();

const path = require('path');
const baseDir = path.resolve(__dirname);

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
        },

        module: {
            rules: [{
                test: /\.scss/,
                loader: 'import-glob',
                exclude: /node_modules/,
                enforce: 'pre'
            }]
        }
    },


    /*
     * BrowserSync
     */

    browserSync: {
        proxy: process.env.APP_URL,
        notify: false,
        open: false,
        files: [
            baseDir + '/{public,app,craft}/**/*.{php,html}',
            baseDir + '/public/build/**/*.{js,css}',
            baseDir + '/resources/{views,lang}/**/*.{php,twig}'
        ]
    }


};

module.exports.config = config;
