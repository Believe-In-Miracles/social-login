<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id'     => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect'      => env('GOOGLE_REDIRECT')
    ],
    // //     GOOGLE_CLIENT_ID=760337306979-7oqq5dhf3742bk3n2qu3lhel41ln2c21.apps.googleusercontent.com
    // // GOOGLE_CLIENT_SECRET=PJMsvlIINlUZPcXru7NVng-d
    // // GOOGLE_REDIRECT=http://localhost:8000/callback
    // 'google' => [
    //     'client_id' => "760337306979-7oqq5dhf3742bk3n2qu3lhel41ln2c21.apps.googleusercontent.com",
    //     'client_secret' => "PJMsvlIINlUZPcXru7NVng-d",
    //     'redirect' => 'http://localhost:8000/callback',
    // ],
];
