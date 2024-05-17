<?php

/**
 * Extension Manager/Repository config file for ext "igsnet_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Igsnet Package',
    'description' => 'Igsnet Package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Igsnet\\IgsnetPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Ahmad Dalati',
    'author_email' => 'dalati.ahmad@hotmail.com',
    'author_company' => 'Igsnet',
    'version' => '1.0.0',
];
