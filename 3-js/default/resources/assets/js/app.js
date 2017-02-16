require('boot')

document.addEventListener("DOMContentLoaded", () => {
    // Enable when using Pagetransitions
    // Barba.Pjax.init()
    // Barba.Prefetch.init()
})


/*
 * Single Page Applications be like this instead
 */

/*
    import { store, router } from 'boot'
    import App from 'components/App.vue'

    new Vue({
        router,
        store,
        render: h => h(App)
    }).$mount('#app')
*/
