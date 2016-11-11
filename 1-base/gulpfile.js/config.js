var Elixir = require('laravel-elixir');
var path = require('path');

// Load Dotenv
require('dotenv').load();

// Set Elixir Config
Elixir.config.publicPath = 'public/build';
Elixir.config.css.sass.folder = 'scss';
Elixir.config.css.sass.pluginOptions.includePaths = [
    path.resolve(__dirname + '/../resources/assets/scss'),
    path.resolve(__dirname + '/../node_modules')
];

var config = {

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
        notify: false,
        browser: 'google-chrome'
    },

    eslint: {
        paths: [
            Elixir.config.get('assets.js.folder') + '/**/*.{js,vue}',
            '!' + Elixir.config.get('assets.js.folder') + '/vendor/**/*.js'
        ]
    },

    webpack: {
        resolve: {
            modules: [
                path.resolve(__dirname + '/../resources/assets/js'),
                path.resolve(__dirname + '/../node_modules')
            ]
        },
        module: {
            loaders: [
                {test: /\.json$/, loader: "json"}
            ]
        }
    }

};

// Merge Webpack Config
Elixir(function(mix) {
    Elixir.webpack.mergeConfig(config.webpack);
});

module.exports = config;
