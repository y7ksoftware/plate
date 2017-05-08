import {mountModules, unMountModules} from 'utils/modules'

// Import Modules
import DemoModule from 'modules/DemoModule.vue'


Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {

    // Save modules from the old container, so we can unmount them,
    // as soon as the old container leaving transition is done
    Barba.BaseView.oldMountedModules = Barba.BaseView.mountedModules;

    // Load all modules
    Barba.BaseView.mountedModules = mountModules([
        DemoModule
    ], container)

})

Barba.Dispatcher.on('startTransitionEnded', function () {
    // Unmount Modules
    unMountModules(Barba.BaseView.oldMountedModules);
});
