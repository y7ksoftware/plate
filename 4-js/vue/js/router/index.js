import VueRouter from 'vue-router';

const routes = [
    // {
    //     path: '/',
    //     name: 'Home',
    //     component: {}
    // },
];

const router = new VueRouter({
    routes: routes,
    mode: 'history',
});

// router.afterEach((to, from) => {})

export default router;
