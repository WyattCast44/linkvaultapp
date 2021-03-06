<?php

use App\Domain\CommandPalette\Actions\Logout;
use App\Domain\CommandPalette\Actions\MakeLink;
use App\Domain\CommandPalette\Actions\MakeTag;
use App\Domain\CommandPalette\Actions\NavigateToPage;
use App\Domain\CommandPalette\Actions\NavigateToTagPage;

return [

    'auth' => [

        'logout' => [
            'description' => 'Logout of the application',
            'handler' => Logout::class,
        ],

        'make:tag' => [
            'description' => 'Create a new tag with the given name',
            'handler' => MakeTag::class,
        ],

        'make:link' => [
            'description' => 'Create a new link with the given url',
            'handler' => MakeLink::class,
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
