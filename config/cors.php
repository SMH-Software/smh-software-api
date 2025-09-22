<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://127.0.0.1:5500',             // ⚡ Ton front local
        'https://smh-software-api.vercel.app', // ⚡ Ton API sur Vercel
    ],

    // ⚡ Autorise tout en dev (localhost + vercel)
    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
