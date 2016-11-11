import project from '../../../../project.json';

const constants = window.App.constants;

export const APP_VERSION = project.version;
export const APP_DEBUG = constants.APP_DEBUG;
export const BUGSNAG_API_KEY_JS = constants.BUGSNAG_API_KEY_JS;
export const BUGSNAG_NOTIFY_RELEASE_STAGES = constants.BUGSNAG_NOTIFY_RELEASE_STAGES;
