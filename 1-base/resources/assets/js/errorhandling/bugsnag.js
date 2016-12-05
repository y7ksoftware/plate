import Bugsnag from 'bugsnag-js';
import * as config from 'config';

/*
 Initialize Bugsnag Error Handler
 */
export function init() {
    Bugsnag.apiKey = config.BUGSNAG_API_KEY_JS;
    Bugsnag.releaseStage = detectReleaseStage();
    Bugsnag.appVersion = config.APP_VERSION;

    Bugsnag.notifyReleaseStages = ['develop', 'staging', 'production'];
}

function detectReleaseStage() {

    // Return the env if one is set in the Config
    if (typeof config.APP_ENV !== 'undefined') return config.APP_ENV;

    const href = window.location.href;

    return (
    href.indexOf(".pizza") !== -1 ) ? "develop"
        : ( href.indexOf(".dev") !== -1 || href.indexOf("localhost") !== -1 ) ? "local"
        : "production";
}
