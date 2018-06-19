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
];
