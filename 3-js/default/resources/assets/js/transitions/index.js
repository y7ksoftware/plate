/* global _paq */

// Init Barba.js
window.Barba = require('barba.js')

// Initalize the views
require('transitions/views')

// Initalize the modules
require('transitions/modules')


Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {

    // set active class in navigation
    /*
    const link = currentStatus.url;// get path of current page

    const navigation = document.querySelector('.site-navigation');
    const navigationLinks = navigation.querySelectorAll('.js-navigation');
    const navigationLinkIsActive = navigation.querySelector(`[href="${link}"]`);

    Array.prototype.forEach.call(navigationLinks, (navigationLink) => navigationLink.classList.remove('active')); // remove CSS class 'active' from all .navigation__links

    if (navigationLinkIsActive) navigationLinkIsActive.classList.add('active'); // add CSS class to current .navigation__link
    */

    // Track Pageview
    if (typeof(_paq) !== 'undefined') {
        _paq.push(['setCustomUrl', currentStatus.url])
        _paq.push(['trackPageView'])
    }

})


// Main page transition
Barba.Pjax.getTransition = function () {
    return require('transitions/base').default
}
