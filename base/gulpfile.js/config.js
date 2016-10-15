var Elixir = require('laravel-elixir');
var path = require('path');

// Load Dotenv
require('dotenv').load();

// Set Elixir Config
Elixir.config.publicPath = 'public/build';
Elixir.config.css.sass.folder = 'scss';

var config = {

    fonts: {
        assets: Elixir.config.assetsPath + '/fonts',
        build: Elixir.config.publicPath + '/fonts'
    },

    vendorjs: {
        assets: {
            folder: Elixir.config.get('assets.js.folder') + '/vendor'
        },
        build: {
            file: Elixir.config.get('public.js.outputFolder') + '/vendor.js',
            folder: Elixir.config.get('public.js.outputFolder') + '/vendor'
        }
    },

    browserSync: {
        proxy: process.env.APP_URL,
        notify: false
    },

    eslint: {
        paths: [
            Elixir.config.get('assets.js.folder') + '/**/*.{js,vue}',
            '!' + Elixir.config.get('assets.js.folder') + '/vendor/**/*.js'
        ]
    },

    webpack: {
        babel: {
            presets: ['es2015', 'stage-2'],
            plugins: ['transform-runtime'],
        },
        resolve: {
            modules: [
                path.resolve(__dirname + '/../resources/assets/js'),
                path.resolve(__dirname + '/../node_modules')
            ]
        }
    }

};

// Merge Webpack Config
Elixir(function(mix) {
    Elixir.webpack.mergeConfig(config.webpack);
});

module.exports = config;
