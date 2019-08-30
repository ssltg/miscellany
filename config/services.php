<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'account' => [
            'url' => env('FACEBOOK_ACCOUNT_URL', '//www.facebook.com/kanka.io.ch')
        ],
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => env('APP_URL') . '/auth/facebook/callback',
    ],

    'google' => [
        'client_id' => env('GOOGLE_CLIENT_ID'),
        'client_secret' => env('GOOGLE_CLIENT_SECRET'),
        'redirect' => env('APP_URL') . '/auth/google/callback',
    ],

    'twitter' => [
        'account' => [
            'url' => env('TWITTER_ACCOUNT_URL', '//twitter.com/kankaio'),
            'name' => env('TWITTER_ACCOUNT_NAME', '@kankaio')
            ],
        'client_id' => env('TWITTER_CLIENT_ID'),
        'client_secret' => env('TWITTER_CLIENT_SECRET'),
        'redirect' => env('APP_URL') . '/auth/twitter/callback',
    ],

    'reddit' => [
        'account' => [
            'url' => env('REDDIT_ACCOUNT_URL', 'https://reddit.com/r/kanka')
        ],
    ],

    'trello' => [
        'account' => [
            'roadmap' => [
                'url' => env('TRELLO_ACCOUNT_ROADMAP_URL', 'https://trello.com/b/62aOwCHU/kanka')
            ],
            'backlog' => [
                'url' => env('TRELLO_ACCOUNT_BACKLOG_URL', 'https://trello.com/b/hVjPfOMU/kanka-backlog')
            ],
        ],

    ],
];
