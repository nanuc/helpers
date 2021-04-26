<?php

return [
    'helpscout' => [
        'beacon' => [
            'key' => env('HELPSCOUT_BEACON_KEY'),
            'identify-user' => env('HELPSCOUT_BEACON_IDENTIFY_USER', true)
        ]
    ],
    'locale-setter' => [
        'mapping' => [
            'en' => 'en_US.UTF8',
            'de' => 'de_DE.UTF8',
            'fr' => 'fr_FR.UTF8',
            'es' => 'es_ES.UTF8',
        ],
    ],
    'socialite' => [
        'enabled' => false,
        'redirect-to' => 'dashboard'
    ]
];