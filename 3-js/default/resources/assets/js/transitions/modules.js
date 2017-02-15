import {mountModules, unMountModules} from 'utils/modules'

// Import Modules
import DemoModule from 'modules/DemoModule.vue'


Barba.Dispatcher.on('newPageReady', (currentStatus, oldStatus, container) => {

    // Load all modules
    Barba.BaseView.mountedModules = mountModules([
        DemoModule
    ], container)

})


Barba.Dispatcher.on('initStateChange', function (currentStatus) {
    // Unmount Modules
    unMountModules(Barba.BaseView.mountedModules)
})
