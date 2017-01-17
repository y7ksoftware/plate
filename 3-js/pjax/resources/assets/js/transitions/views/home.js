import Barba from 'barba.js';
import Vue from 'vue';

import DemoModule from 'modules/DemoModule.vue';

export default Barba.BaseView.extend({

    namespace: 'home',

    onEnter() {
        // The new Container is ready and attached to the DOM.

        // Components & Modules
        new Vue(DemoModule);
    },

    onEnterCompleted() {
        // The Transition has just finished.
    },

    onLeave() {
        // A new Transition toward a new page has just started.
    },

    onLeaveCompleted() {
        // The Container has just been removed from the DOM.
    }
});

