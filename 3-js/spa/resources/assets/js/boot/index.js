import * as config from 'config';

// Load Bugsang
require('boot/bugsnag')


// First thing, run the polyfills
require('boot/polyfills')


// Vue
window.Vue = require('vue')

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

// Change vue delimiters
// Vue.mixin({
//     delimiters: ['${', '}']
// })


// Init Localisation
// Vue.use(require('vue-i18n'))
// Vue.config.lang = 'en';
// Vue.locale('en', require('locales/en').default);


// Store
let store = require('store').default


// Router
let router = require('router').default


// Lazyizes
require('lazysizes')
require('lazysizes/plugins/object-fit/ls.object-fit.min')


// Axios
window.axios = require('axios')

axios.defaults.baseURL = config.API_PREFIX;
axios.defaults.headers.common = {
    // 'Authorization': 'Bearer ' + config.API_TOKEN,
    // 'X-CSRF-TOKEN': window.constants.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

export {
    store,
    router
}

