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
            ],
            // Uncomment this to include the template compiler
            // alias: {
            //     'vue$': 'vue/dist/vue.js'
            // }
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
                    baseDir + '/resources/{views,lang}/**/*.{php,twig}'
                ]
            })
        ],

        externals: {}

    }


};

module.exports.config = config;
