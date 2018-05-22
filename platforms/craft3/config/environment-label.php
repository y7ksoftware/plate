<?php

$envirnomentLabels = [
    'local' => [
        'labelColor' => '#D8D8D8',
        'textColor' => '#000000',
        'labelText' => "{{ 'Lokal' | t }} 🐐",
    ],
    'develop' => [
        'labelColor' => '#7720FC',
        'textColor' => '#FFFFFF',
        'labelText' => "{{ 'Development' | t }} 🏡",
    ],
    'staging' => [
        'labelColor' => '#FA7601',
        'textColor' => '#FFFFFF',
        'labelText' => "{{ 'Test-Environment' | t }} 🍕",
    ],
    'production' => [
        'labelColor' => '#1FA213',
        'textColor' => '#FFFFFF',
        'labelText' => "{{ 'Live' | t }} 🔥",
    ],
];

$defaultLabel = [
    'showLabel' => true,
    'labelText' => CRAFT_ENVIRONMENT,
    'prefixText' => null,
    'suffixText' => null,
    'labelColor' => '#D8D8D8',
    'textColor' => '#000000',
];

$appEnv = getenv('APP_ENV');

return array_key_exists($appEnv, $envirnomentLabels) ? array_merge($defaultLabel, $envirnomentLabels[$appEnv]) : $defaultLabel;
