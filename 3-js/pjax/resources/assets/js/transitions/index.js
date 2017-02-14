/* global _paq */
import Barba from 'barba.js';
import {mountModules, unMountModules} from 'utils/modules';
import BaseTransition from 'transitions/base';

// Views
import Homepage from 'transitions/views/home';

// Modules
import DemoModule from 'modules/DemoModule.vue';


// Initialize Views
Homepage.init();

// Track PageView
Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {

    // Load all modules here
    Barba.BaseView.mountedModules = mountModules([
        DemoModule
    ], container);

    // Track Pageview
    if (typeof(_paq) !== 'undefined') {
        _paq.push(['setCustomUrl', currentStatus.url]);
        _paq.push(['trackPageView']);
    }

});


Barba.Dispatcher.on('initStateChange', function (currentStatus) {
    // Unmount Modules
    unMountModules(Barba.BaseView.mountedModules);
});


// Main page transition
Barba.Pjax.getTransition = function () {
    return BaseTransition;
};

export {Barba};
