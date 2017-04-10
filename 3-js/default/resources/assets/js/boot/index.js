import * as config from 'config'
import Vue from 'vue'
import Vuex from 'vuex'

// Load Bugsang
require('boot/bugsnag')


// First thing, run the polyfills
require('boot/polyfills')


// Lodash
// window._ = require('lodash');


Vue.config.silent = !config.APP_DEBUG
Vue.config.devtools = config.APP_DEBUG

// Change vue delimiters, to use vue in twig and blade tempaltes.
// This doesn't change the delimiters in .vue files
// Vue.mixin({delimiters: ['${', '}']})


// Init Localisation
// Vue.use(require('vue-i18n'))
// Vue.config.lang = 'en'
// Vue.locale('en', require('locales/en').default)


// Enable Transitions / Barba
// require('transitions')


// Load the Vuex Store
// Vue.use(Vuex)
// window.store = require('store').default
// Vue.mixin({ store })



// Load VueRouter
// let router = require('router').default


// Initialize Lazyizes
require('lazysizes')
// require('lazysizes/plugins/object-fit/ls.object-fit.min')
// require('lazysizes/plugins/parent-fit/ls.parent-fit')
// require('lazysizes/plugins/unveilhooks/ls.unveilhooks.min')

// Load Axios
window.axios = require('axios')

// axios.defaults.baseURL = config.API_PREFIX
axios.defaults.headers.common = {
    // 'Authorization': 'Bearer ' + config.API_TOKEN,
    // 'X-CSRF-TOKEN': window.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
}

// TODO what is this, is it needed?
export {
    // store,
    // router
}

