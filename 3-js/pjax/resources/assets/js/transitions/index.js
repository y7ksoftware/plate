import Barba from 'barba.js';
import initPageScripts from 'transitions/pages';

Barba.Dispatcher.on('newPageReady', (e) => {
    initPageScripts(e.namespace);
});

export {Barba};
