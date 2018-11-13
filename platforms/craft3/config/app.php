<?php

return [
    'modules' => [
        'environment-indicator-module' => [
            'class' => \Y7K\EnvironmentIndicatorModule\EnvironmentIndicatorModule::class
        ],
        'maintenance-module' => [
            'class' => \Y7K\MaintenanceModule\MaintenanceModule::class,
            'components' => [
                'cachewarmer' => [
                    'class' => \Y7K\MaintenanceModule\services\Cachewarmer::class,
                ],
            ],
        ],
    ],
    'bootstrap' => ['environment-indicator-module', 'maintenance-module'],

    'components' => [
        'mailer' => function() {
            // Get the stored email settings
            $settings = Craft::$app->systemSettings->getEmailSettings();

            // Override the transport adapter class
            $settings->transportType = craft\mail\transportadapters\Smtp::class;

            // Override the transport adapter settings
            $settings->transportSettings = [
                'host' => getenv('EMAIL_HOST'),
                'port' => getenv('EMAIL_PORT'),
                'username' => getenv('EMAIL_USER'),
                'password' => getenv('EMAIL_PASSWORD'),
                'useAuthentication' => true,
                'encryptionMethod' => 'tls',
            ];

            return craft\helpers\MailerHelper::createMailer($settings);
        },
    ]
];
