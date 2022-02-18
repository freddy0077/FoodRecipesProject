<?php

use Illuminate\Support\Str;

return [

    'users'=> [
        "base_url"       => "http://gateway:80",
        "secret"         => env("GATEWAY_SERVICE_SECRET"),
        "endpoints"      =>  [
            "register"   => "/api/register",
            "login"      => "/api/login",
            "profile"         => "/api/profile"
        ]
    ],

    'payments'=> [
        "base_url"           => "http://payments:8001",
        "secret"             => env("PAYMENT_SERVICE_SECRET"),
        "endpoints" => [
            "make_payment_url"   => "/api/payments/transactions",
            "verify_payment_url" => "/api/payments/verify-payment/",
            "submit_otp"         => "/api/payments/transactions/otp"
            ]
    ],

    'notifications' => [
        'base_url' => "http://notifications:8005",
        "secret"   => env("NOTIFICATION_SERVICE_SECRET"),
        "endpoints" => [
            "notify_url" => "/api/notify",
            "notify_otp_url" => "/api/notifications/otp/",
            "verify_otp_url" => "/api/notifications/verify-otp/",
        ]
    ],

    'uploads' => [
        'base_url' => "http://uploads:8003",
        'endpoints' => [
            'files_url'   => '/api/uploads',
            'upload_url'  => '/api/uploads',
            'upload_file_url'  => '/api/uploads/file/new',
            'fetch_url'       => '/api/uploads/',
            'delete_url'  => '/api/uploads/'
        ],
        "secret"   => env("UPLOADS_SERVICE_SECRET")
    ],


    'search' => [
        'base_url' => "http://uploads:8003",
        'endpoints' => [
            'search_url' => '/api/search'
        ],
        "secret"   => env("SEARCH_SERVICE_SECRET")
    ],


    'institutions' => [
        'base_url' => "http://institutions:8004",
        'endpoints' => [
            'institutions_url'   => '/api/institutions/'
        ],
        "secret"   => env("INSTITUTIONS_SERVICE_SECRET")
    ],


    'curriculums' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'curriculums_url'   => '/api/curriculums/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'integrations' => [
        'base_url' => "http://settings:8008",
        'endpoints' => [
            'integrations_url'   => '/api/integrations/',
            'settings_url'   => '/api/settings/'
        ],
        "secret"   => env("INTEGRATIONS_SERVICE_SECRET")
    ],

];
