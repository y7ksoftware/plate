/* global _paq */
import Barba from 'barba.js';

import Homepage from 'transitions/views/home';

// Initialize Views
Homepage.init();

// Track PageView
Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {
    console.log('page is ready');
    if(typeof(_paq) !== 'undefined') {
        _paq.push(['setCustomUrl', currentStatus.url]);
        _paq.push(['trackPageView']);
    }
});


Barba.Dispatcher.on('linkClicked', function(currentStatus, oldStatus, container){
    console.log('link clicked');
});


let transition = Barba.BaseTransition.extend({
    onEnter(){
        console.log('bonjour transition');
    },

    start() {
        this.newContainerLoading.then(this.finish.bind(this));
    },

    finish() {
        console.log('finish main transition')
        document.body.scrollTop = 0;
        this.done();
    }
});

// Main page transition
Barba.Pjax.getTransition = function() {
    return transition;
};

export {Barba};
