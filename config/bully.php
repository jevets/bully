<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Asset Loading
    |--------------------------------------------------------------------------
    |
    | These settings determine if bully should load its default stylesheet
    | and script assets. Set to false if you are customizing bully, in which
    | case you'd probably compile and load your own versions.
    |
    */

    'styles' => true,
    'scripts' => true,

    /*
    |--------------------------------------------------------------------------
    | Menus
    |--------------------------------------------------------------------------
    |
    | A static of array of menu items.
    |
    */

    'menus' => [
        'main' => [
            'label' => 'Main Menu',
            'items' => [[
                'label' => 'Home',
                'url' => '/',
                'can' => '',
            ], [
                'label' => 'Login',
                'url' => '/login',
                // 'route' => 'login',
            ], [
                'label' => 'My Account',
                'url' => '/home',
            ]]
        ],
    ]
];
