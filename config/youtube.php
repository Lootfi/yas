<?php

return [
    /*
    |----------------------------------------------------------------------------
    | Google application name
    |----------------------------------------------------------------------------
    */
    'application_name' => env('GOOGLE_APPLICATION_NAME', ''),

    /*
    |----------------------------------------------------------------------------
    | Google OAuth 2.0 access
    |----------------------------------------------------------------------------
    |
    | Keys for OAuth 2.0 access, see the API console at
    | https://developers.google.com/console
    |
    */
    'client_id'            => env('YOUTUBE_CLIENT_ID', ''),
    'client_secret'        => env('YOUTUBE_CLIENT_SECRET', ''),
    'redirect_uri'         => env('GOOGLE_REDIRECT', 'http://127.0.0.1:8000'),
    // 'scopes'               => [\Google_Service_Sheets::DRIVE, \Google_Service_Sheets::SPREADSHEETS],  // previously only []
    'access_type'          => 'online',
    'approval_prompt'      => 'auto',
    'prompt'               => 'consent',

    /*
    |----------------------------------------------------------------------------
    | Google developer key
    |----------------------------------------------------------------------------
    |
    | Simple API access key, also from the API console. Ensure you get
    | a Server key, and not a Browser key.
    |
    */
    'api_key' => env('YOUTUBE_API_KEY', ''),

    /*
    |----------------------------------------------------------------------------
    | Google service account
    |----------------------------------------------------------------------------
    |
    | Set the credentials JSON's location to use assert credentials, otherwise
    | app engine or compute engine will be used.
    |
    */
    'service' => [
        /*
        | Enable service account auth or not.
        */
        'enable' => env('GOOGLE_SERVICE_ENABLED', true),

        /*
        | Path to service account json file
        */
        'file' => storage_path('app/credentials.json'),
    ],

    /*
    |----------------------------------------------------------------------------
    | Additional config for the Google Client
    |----------------------------------------------------------------------------
    |
    | Set any additional config variables supported by the Google Client
    | Details can be found here:
    | https://github.com/google/google-api-php-client/blob/master/src/Google/Client.php
    |
    | NOTE: If client id is specified here, it will get over written by the one above.
    |
    */
    'config' => [],
];
