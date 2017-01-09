<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */


return [

    '*' => [
        'omitScriptNameInUrls' => true,
        'usePathInfo' => true,
        'convertFilenamesToAscii' => true, // Convert upload filenames to valid ascii chars
        'limitAutoSlugsToAscii' => true, // Converts Umlauts etc. in slugs to ascii
        'enableCsrfProtection' => true, // Enable CSRF protection (will be default in Craft 3)
        'cacheDuration' => 'P2W', // Set default template caching time to 2 weeks
        'generateTransformsBeforePageLoad' => true, // Generate Image Transforms before page load. Else caching may be a problem

        'devMode' => (getenv('APP_DEBUG')=='true'),
        'enableTemplateCaching' => (getenv('TEMPLATE_CACHING')=='true'),

        'appEnv' => getenv('APP_ENV'),
        'piwikSiteId' => getenv('PIWIK_SITE_ID'),
        'googleAnalyticsCode' => getenv('GOOGLE_ANALYTICS_CODE'),
        'googleVerificationCode' => getenv('GOOGLE_VERIFICATION_CODE'),

        'siteUrl' => [
            'en' => getenv('APP_URL') . '/',
            'de' => getenv('APP_URL') . '/de/',
        ],
    ],

];
