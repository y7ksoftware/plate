import { Vue, store, router } from 'boot';
import App from 'components/App.vue';

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app');
