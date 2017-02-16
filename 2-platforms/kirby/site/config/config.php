<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', getenv('KIRBY_LICENSE'));

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('url', getenv('APP_URL'));
c::set('debug', (getenv('APP_DEBUG') == 'true'));
c::set('appEnv', getenv('APP_ENV'));
c::set('cache', (getenv('TEMPLATE_CACHING') == 'true'));

c::set('panel.install', c::get('debug', false));

c::set('bugsnagKeyJs', getenv('BUGSNAG_API_KEY_JS'));
c::set('googleAnalyticsCode', getenv('GOOGLE_ANALYTICS_CODE'));
c::set('piwikSiteId', getenv('PIWIK_SITE_ID'));


c::set('twig', true);
c::set('twig.cache', (getenv('TEMPLATE_CACHING') == 'true'));
c::set('twig.strict', c::get('debug', false));

