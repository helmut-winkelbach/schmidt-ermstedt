<?php

/**
 * Extension Manager/Repository config file for ext "schmidt_ermstedt".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Schmidt-Ermstedt',
    'description' => 'Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'php' => '8.0.0-8.3.99',
            'typo3' => '11.5.0-12.4.99',
            'backend' => '11.5.0-12.4.99',
            'frontend' => '11.5.0-12.4.99',
            'rte_ckeditor' => '11.5.0-12.4.99',
            'fluid_styled_content' => '11.5.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WinkelbachWebdesign\\SchmidtErmstedt\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Helmut Winkelbach',
    'author_email' => 'helmut@winkelbach-web.de',
    'author_company' => 'Winkelbach',
    'version' => '3.1.0',
];
