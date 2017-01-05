// First thing, run the polyfills
import 'boot/polyfills';
import {init as initErrorhandling} from 'boot/bugsnag';

// Load Vue and extensions
import Vue from 'vue';
import axios from 'axios';

import * as config from 'config';

initErrorhandling();

axios.defaults.baseURL = config.API_PREFIX;
// axios.defaults.headers.common['Authorization'] = 'Bearer ' + config.API_TOKEN;

// Change vue delimiters
// Vue.mixin({
//     delimiters: ['${', '}']
// })

Vue.config.silent = !config.APP_DEBUG;
Vue.config.devtools = config.APP_DEBUG;

export {Vue};

