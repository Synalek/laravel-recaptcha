<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Recaptcha
    |--------------------------------------------------------------------------
    |
    | Here you may specify the settings that should be used by the framework.
    | The keys can be obtained on https://www.google.com/recaptcha.
    |
    */
    'secret' => env('RECAPTCHA_SECRET'),
    'sitekey' => env('RECAPTCHA_SITEKEY'),
    'options' => [
        'timeout' => env('RECAPTCHA_TIMEOUT', 60),
        'scores' => [
            'homepage' => 0.5,
            'login' => 0.8
        ]
    ]
];
