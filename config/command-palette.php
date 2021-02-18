<?php

use App\Domain\CommandPalette\Actions\Logout;
use App\Domain\CommandPalette\Actions\NavigateToPage;
use App\Domain\CommandPalette\Actions\NavigateToTagPage;

return [

    'auth' => [

        'logout' => [
            'description' => 'Logout of the application',
            'handler' => Logout::class,
        ],

        'tag' => [
            'description' => 'Navigate to the given tag\'s page',
            'handler' => NavigateToTagPage::class,
        ],

        'links' => [
            'description' => 'Navigate to the links page',
            'handler' => NavigateToPage::class,
            'default_args' => [
                'dashboard.links.index'
            ],
        ]

    ],

    'guest' => [
        'login' => [
            'description' => 'Go to the login page',
            'handler' => NavigateToPage::class,
            'default_args' => [
                'login'
            ],
        ],
        'register' => [
            'description' => 'Go to the registration page',
            'handler' => NavigateToPage::class,
            'default_args' => [
                'register'
            ],
        ],
    ]


];
