<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Documentation Sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Softtodo\\DocSitepakcage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => '',
    'author_email' => 'dhouhamkaour@softtodo.com',
    'author_company' => 'SOFTTODO',
    'version' => '@dev',
];