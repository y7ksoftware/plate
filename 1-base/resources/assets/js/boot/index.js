// First thing, run the polyfills
import 'boot/polyfills';
import {init as initErrorhandling} from 'boot/bugsnag';

// Load Vue and extensions
import Vue from 'vue';
import VueI18n from 'vue-i18n';
import axios from 'axios';

import store from 'store';
import router from 'router';

import * as config from 'config';
import locales_en from 'locales/en';

initErrorhandling();

axios.defaults.baseURL = config.API_PREFIX;
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + config.API_TOKEN;

Vue.use(VueI18n);

// Load the Language Data
Vue.config.lang = 'en';
Vue.locale('en', locales_en);

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

export { Vue, store, router };
