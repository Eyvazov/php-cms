<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

$menus = [
    'index' => [
        'title' => 'Əsas Səhifə',
        'icon' => 'tachometer-alt'
    ],
    'menus' => [
        'title' => 'Menyular',
        'icon' => 'bars',
        'sub-menu' => [
            'add-menu' => 'Əlavə Et',
            'menus' => 'Bütün Menyular'
        ]
    ],
    'users' => [
        'title' => 'İstifadəçilər',
        'icon' => 'user',
        'sub-menu' => [
            'add-user' => 'Əlavə Et',
            'users' => 'Bütün İstifadəçilər',
        ]
    ],
    'settings' => [
        'title' => 'Parametrlər',
        'icon' => 'cog'
    ]
];

require admin_controller(route(1));

?>