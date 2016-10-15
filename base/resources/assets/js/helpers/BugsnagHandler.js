//
// BugsnagHandler Handler
// ---------------
//
// Initializes BugsnagHandler and adds some configuration
//

import Bugsnag from 'bugsnag-js';
import * as config from 'config';
import {version} from '../../../../version';

export default class BugsnagHandler {

    /**
     *
     */
    static init() {

        Bugsnag.apiKey = config.BUGSNAG_API_KEY;
        Bugsnag.releaseStage = BugsnagHandler.detectReleaseStage();
        Bugsnag.notifyReleaseStages = config.BUGSNAG_NOTIFY_RELEASE_STAGES;
        Bugsnag.appVersion = version;

    }


    /**
     *
     */
    static detectReleaseStage() {

        let href = window.location.href;

        return ( href.indexOf(".pizza") !== -1 ) ? "staging"
            : ( href.indexOf(".app") !== -1 || href.indexOf(".dev") !== -1 || href.indexOf("localhost") !== -1 ) ? "development"
            : "production";

    }

}
