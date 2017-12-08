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
	'extend'      => [],
	'files'       => [
		OxidEsales\EshopCommunity\Application\Controller\Admin\NavigationController::class => ClearTmp\Controller\NavigationController::clas,
	],
	'templates'   => [
		'header.tpl' => 'OXID-cleartmp/views/admin/tpl/header.tpl',
	],
	'blocks'      => [],
	'settings'    => [],
	'events'      => [],
];
