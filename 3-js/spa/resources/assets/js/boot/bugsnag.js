import * as config from 'config'

/*
 Initialize Bugsnag Error Handler
 */

window.Bugsnag = require('bugsnag-js')

window.Bugsnag.apiKey = config.BUGSNAG_API_KEY_JS
window.Bugsnag.releaseStage = config.APP_ENV
window.Bugsnag.appVersion = config.APP_VERSION

window.Bugsnag.notifyReleaseStages = ['develop', 'staging', 'production']
