import Bugsnag from 'bugsnag-js';
import * as config from 'config';

/*
 Initialize Bugsnag Error Handler
 */
export function init() {
    Bugsnag.apiKey = config.BUGSNAG_API_KEY_JS;
    Bugsnag.releaseStage = config.APP_ENV;
    Bugsnag.appVersion = config.APP_VERSION;

    Bugsnag.notifyReleaseStages = ['develop', 'staging', 'production'];
}
