/*
SPA
 */
import { store, router } from 'boot'
import App from 'components/App.vue'

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app')


/*
PJAX
 */
require('boot')

document.addEventListener("DOMContentLoaded", () => {
    Barba.Pjax.init()
    Barba.Prefetch.init()
});


/*
Default
 */
require('boot')

document.addEventListener("DOMContentLoaded", () => {
    // Start App here ..
});

