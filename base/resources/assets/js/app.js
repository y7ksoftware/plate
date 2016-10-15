import BugsnagHandler from './helpers/BugsnagHandler';
import PolyfillsHandler from './helpers/PolyfillsHandler';

import ExampleComponent from './components/ExampleComponent';


export default class App {

    construct() {
        this.super(...arguments);
    }

    run() {

        BugsnagHandler.init();
        PolyfillsHandler.init();

        switch (document.body.getAttribute('data-page')) {
            case 'home':
                this.homepage();
                break;
            default:
                break;
        }
    }


    homepage() {
        let exampleComponent = new ExampleComponent();
        exampleComponent.init();
    }

}

let app = new App();
app.run();

