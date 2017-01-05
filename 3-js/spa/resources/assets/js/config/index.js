import project from '../../../../project.json';

const constants = JSON.parse(JSON.stringify(window.App.constants));

export const APP_VERSION = project.version;
export const APP_ENV = constants.APP_ENV;
export const APP_DEBUG = constants.APP_DEBUG;
export const BUGSNAG_API_KEY_JS = constants.BUGSNAG_API_KEY_JS;
