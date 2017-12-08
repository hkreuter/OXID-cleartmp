<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'          => 'cleartmp',
    'title'       => [
        'de' => 'OXID-cleartmp for OXID eShop 6',
        'en' => 'OXID-cleartmp for OXID eShop 6',
    ],
    'description' => [
        'de' => 'OXID-cleartmp for OXID eShop 6',
        'en' => 'OXID-cleartmp for OXID eShop 6',
    ],
    'thumbnail'   => 'out/pictures/picture.png',
    'version'     => '2.0.0',
    'author'      => 'OXID Hackathon 2017',
    'url'         => 'http://www.oxid-esales.com/',
    'email'       => '',
    'extend'      => [
        \OxidEsales\Eshop\Application\Controller\Admin\NavigationController::class => \Hackathon2017\ClearTmp\Controller\NavigationController::class,
    ],
    'templates'   => [
        'header.tpl' => 'ox/cleartmp/views/admin/tpl/header.tpl',
    ],
    'blocks'      => [
        [
            'template' => 'admin/header.tpl',
            'block'    => 'admin_header_links',
            'file'     => '/views/blocks/header__admin_header_links.tpl',
        ],
    ],
];
