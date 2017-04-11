import * as config from 'config'

// Load Bugsang
require('boot/bugsnag')


// First thing, run the polyfills
require('boot/polyfills')


// Lodash
// window._ = require('lodash');


// Bootstrap Vue
require('boot/vue')


// Enable Transitions / Barba
// require('transitions')


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

