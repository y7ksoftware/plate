// First thing, run the polyfills
import 'boot/polyfills';
import {init as initErrorhandling} from 'boot/bugsnag';

// Load Vue and extensions
import Vue from 'vue';
import VueI18n from 'vue-i18n';
import axios from 'axios';

import {Barba} from 'transitions';

import * as config from 'config';
import locales_de from 'locales/de';

initErrorhandling();

axios.defaults.baseURL = config.API_PREFIX;
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + config.API_TOKEN;

Vue.use(VueI18n);

// Change vue delimiters
Vue.mixin({
    delimiters: ['${', '}']
})

// Load the Language Data
Vue.config.lang = 'de';
Vue.locale('de', locales_de);

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

export {Barba};

