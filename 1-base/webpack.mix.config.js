const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

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
            ]
        },

        plugins: [
            new BrowserSyncPlugin({
                host: process.env.APP_URL,
                proxy: process.env.APP_URL,
                notify: false,
                open: false,
                files: [
                   baseDir + '/{public,app,craft,site}/**/*.php',
                   baseDir + '/build/**/*.{js,css}',
                   baseDir + '/mix-manifest.json',
                   baseDir + '/resources/{views,lang}/**/*.{php,twig}'
                ]
            })
        ],

        externals: {}

    }


};

module.exports.config = config;
