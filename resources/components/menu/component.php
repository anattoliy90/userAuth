<?php

$urlParh= parse_url($_SERVER['REQUEST_URI'])['path'];
$activeItem = 'N';

$result['ITEMS'] = [
    0 => [
        'ACTIVE' => $activeItem,
        'LINK' => '/',
        'NAME' => 'Main page',
    ],
    1 => [
        'ACTIVE' => $activeItem,
        'LINK' => '/login/',
        'NAME' => 'Login',
    ],
    2 => [
        'ACTIVE' => $activeItem,
        'LINK' => '/registration/',
        'NAME' => 'Registration',
    ],
];

foreach ($result['ITEMS'] as $key => $item) {
    if ($urlParh == $item['LINK']) {
        $activeItem = 'Y';

        $result['ITEMS'][$key]['ACTIVE'] = $activeItem;
    }
}
