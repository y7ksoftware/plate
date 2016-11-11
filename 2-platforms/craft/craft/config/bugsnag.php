<?php # craft/config/bugsnag.php

return [

    'serverApiKey' => getenv('BUGSNAG_API_KEY_CRAFT'),
    'environment' => getenv('APP_ENV'),
    'notifyReleaseStages' => ['staging', 'production'],

];
