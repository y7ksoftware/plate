import Vue from 'vue';
import VueI18n from 'vue-i18n';
import axios from 'axios';
import Vuex from 'vuex';
import VueRouter from 'vue-router';

import store from 'store';
import router from 'router';

import * as config from 'config';
import locales_en from 'locales/en';

axios.defaults.baseURL = config.API_PREFIX;
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + config.API_TOKEN;

Vue.use(Vuex);
Vue.use(VueI18n);
Vue.use(VueRouter);

// Load the Language Data
Vue.config.lang = 'en';
Vue.locale('en', locales_en);

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

require('errorhandling/bugsnag').init();

export { Vue, store, router };
