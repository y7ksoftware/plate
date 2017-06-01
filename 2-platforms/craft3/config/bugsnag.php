<?php # craft/config/bugsnag.php

return [

    'serverApiKey' => getenv('BUGSNAG_API_KEY_CRAFT'),
    'frontendApiKey' => getenv('BUGSNAG_API_KEY_JS'),
    'environment' => getenv('APP_ENV'),
    'notifyReleaseStages' => ['staging', 'production'],

];
