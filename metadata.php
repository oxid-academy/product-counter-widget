<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'oxacproductcounterwidget',
    'title'       => [
        'de' => 'OXAC Produkt Counter Widget',
        'en' => 'OXAC Product Counter Widget',
    ],
    'description' => [
        'de' => 'Zeigt einen Banner im Header-Bereich an mit der Anzahl der verfügbare Produkten.',
        'en' => 'Displays a banner in the header area showing the number of available products.',
    ],
    'thumbnail'   => '',
    'version'     => '1.0.0',
    'author'      => 'OXID Academy',
    'url'         => 'https://www.oxid-esales.com/',
    'email'       => 'academy@oxid-esales.com',
    'controllers' => [
        'product_counter_widget' => \OxidAcademy\ProductCounterWidget\Controller\ProductCounterController::class,
    ],
    'blocks' => [
        [
            'template' => 'layout/header.tpl',
            'block'=>'layout_header_bottom',
            'file'=>'/views/blocks/layout_header_bottom.tpl',
        ],
    ],
    'templates' => [
        'productcounter.tpl' => 'oxac/product-counter-widget/views/tpl/widget/productcounter.tpl'
    ],
];
