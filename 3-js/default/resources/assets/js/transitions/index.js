/* global _paq */

// Init Barba.js
window.Barba = require('barba.js')

// Initalize the views
require('transitions/views')

// Initalize the modules
require('transitions/modules')


Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {

    // Track Pageview
    if (typeof(_paq) !== 'undefined') {
        _paq.push(['setCustomUrl', currentStatus.url]);
        _paq.push(['trackPageView']);
    }

});


// Main page transition
Barba.Pjax.getTransition = function () {
    return require('transitions/base').BaseTransition;
};
