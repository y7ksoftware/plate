
// Boot up
require('boot')

/**
 * * ----------------------------------------------------------------------------------------
 * Enable Barba Page Transitions
 */

// document.addEventListener("DOMContentLoaded", () => {
//     Barba.Pjax.start()
//     Barba.Prefetch.init()
// })


/**
 * ----------------------------------------------------------------------------------------
 * Mount normal Vue Components (outside of Barba container)
 * You don't need this if you load modules inside a barba container
 * or if u build a SPA app
 */

// import DemoModule from 'modules/DemoModule.vue'
//
// mountModules([
//     DemoModule,
// ], document)


/*
 * ----------------------------------------------------------------------------------------
 * Single Page Applications (SPA) be like this instead
 */

// import App from 'components/App.vue'
//
// new Vue({
//     render: h => h(App)
// }).$mount('#app')

