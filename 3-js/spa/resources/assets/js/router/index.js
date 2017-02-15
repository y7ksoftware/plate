
window.VueRouter = require('vue-router')

const routes = [
    // {
    //     path: '/',
    //     name: 'Home',
    //     component: {}
    // },
];

const router = new window.VueRouter({
    routes: routes,
    mode: 'history',
});

// router.afterEach((to, from) => {})

export default router;
