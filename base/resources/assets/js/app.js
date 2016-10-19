import Vue from 'vue';
import Example from 'components/Example.vue';
import {initBugsang} from 'errorhandling/BugsnagHandler';

initBugsang();

const app = new Vue({
    el: '#app',
    components: {
        Example
    }
});
