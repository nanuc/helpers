<?php

return [
    'helpscout' => [
        'beacon' => [
            'key' => env('HELPSCOUT_BEACON_KEY'),
            'identify-user' => env('HELPSCOUT_BEACON_IDENTIFY_USER', true)
        ]
    ]
];