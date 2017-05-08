import Vue from 'vue'

export function mountModules(modules, container) {

    if(typeof modules === 'undefined') return [];

    let loadedModules = [];

    // Loop through all Modules
    for (let i = 0; i < modules.length; i++) {

        // get the element from the vue file
        let elementSelector = modules[i].el;
        let elements = container.querySelectorAll(elementSelector);

        // Nullify the lement selector to allow proper mounting
        // Not sure why we have to do this
        modules[i].el = null;

        // mount vue instance to all elements
        for (let j = 0; j < elements.length; j++) {
            let instance = new Vue(modules[i]).$mount(elements[j]);
            loadedModules.push(instance);
        }

        // Restore the Element selector, otherwise it will be lost in future calls
        modules[i].el = elementSelector;
    }

    return loadedModules;
}

export function unMountModules(modules) {

    if(typeof modules === 'undefined') return;

    // Loop through all Modules
    for (let i = 0; i < modules.length; i++) {
        modules[i].$destroy();
    }
}
