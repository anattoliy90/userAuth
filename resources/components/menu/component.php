<?php

$urlParh = parse_url($_SERVER['REQUEST_URI'])['path'];
$activeItem = 'N';
$resultExt = [];

$result['ITEMS'] = [
    0 => [
        'ACTIVE' => $activeItem,
        'LINK' => '/',
        'NAME' => 'Main page',
    ]
];

if (!empty($_SESSION['user_id'])) {
    $resultExt = [
        0 => [
            'ACTIVE' => $activeItem,
            'LINK' => '',
            'NAME' => 'Logout',
        ]
    ];
} else {
    $resultExt = [
        0 => [
            'ACTIVE' => $activeItem,
            'LINK' => '/login/',
            'NAME' => 'Login',
        ],
        1 => [
            'ACTIVE' => $activeItem,
            'LINK' => '/registration/',
            'NAME' => 'Registration',
        ]
    ];
}

$result['ITEMS'] = array_merge($result['ITEMS'], $resultExt);

foreach ($result['ITEMS'] as $key => $item) {
    if ($urlParh == $item['LINK']) {
        $activeItem = 'Y';

        $result['ITEMS'][$key]['ACTIVE'] = $activeItem;
    }
}
