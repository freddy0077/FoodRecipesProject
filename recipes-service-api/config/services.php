<?php

use Illuminate\Support\Str;

return [

    'discovery'=> [
        "base_url"       => "http://gateway:80",
        "secret"         => env("GATEWAY_SERVICE_SECRET"),
        "endpoints"      =>  [
            "register"   => "/api/register",
            "login"      => "/api/login",
            "profile"         => "/api/profile"
        ]
    ],

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
            "submit_otp"         => "/api/payments/transactions/otp",
            "fund_wallet"         => "/api/payments/fund-wallet",
            "wallet_balance"         => "/api/payments/fund-wallet",
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

    'downloads' => [
        'base_url' => "http://uploads:8003",
        'endpoints' => [
            'bag_url'   => '/api/downloads/bag/',
            'favourite_url'  => '/api/downloads/favourites/',
            'download_url'  => '/api/downloads/',
        ],
        "secret"   => env("DOWNLOADS_SERVICE_SECRET")
    ],

    'search' => [
        'base_url' => "http://uploads:8003",
        'endpoints' => [
            'search_url' => '/api/search'
        ],
        "secret"   => env("SEARCH_SERVICE_SECRET")
    ],

    'wiki' => [
        'base_url' => "https://en.wikipedia.org",
        'endpoints' => [
            'search_url'   => '/w/api.php'
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

    'institution_types' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'institution_type_url'        => '/api/institution-types/',
            'institution_hierarchy_url'   => '/api/institution-hierarchies/',
        ],
        "secret"   => env("INSTITUTIONS_HIERARCHY_SERVICE_SECRET")
    ],


    'curriculums' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'curriculums_url'   => '/api/curriculums/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'subjects' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'subjects_url'   => '/api/subjects/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'classes' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'classes_url'   => '/api/classes/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'courses' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'courses_url'   => '/api/courses/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'levels' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'levels_url'   => '/api/levels/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'topics' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'topics_url'   => '/api/topics/'
        ],
        "secret"   => env("CURRICULUMS_SERVICE_SECRET")
    ],

    'periods' => [
        'base_url' => "http://curriculums:8006",
        'endpoints' => [
            'periods_url'   => '/api/periods/'
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
