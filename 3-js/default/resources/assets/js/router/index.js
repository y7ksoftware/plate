import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

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

export default router
