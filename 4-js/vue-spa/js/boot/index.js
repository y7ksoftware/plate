import Vue from 'vue';
import VueI18n from 'vue-i18n';
import axios from 'axios';

import store from 'store';
import router from 'router';

import * as config from 'config';
import locales_de from 'locales/de';

axios.defaults.baseURL = config.API_PREFIX;
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + config.API_TOKEN;

Vue.use(VueI18n);

// Load the Language Data
Vue.config.lang = 'de';
Vue.locale('de', locales_de);

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

require('errorhandling/bugsnag').init();

export { Vue, store, router };
