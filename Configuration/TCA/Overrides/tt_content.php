<?php

defined('TYPO3') or die('Access denied.');

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('container')) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'two_columns',
            '2 Column Container',
            '2 Column Container 50 - 50',
           [
                [
                    ['name' => 'left side', 'colPos' => 221],
                    ['name' => 'right side', 'colPos' => 222]
                ]
            ] 
        )
    )
    // override default configurations
    ->setIcon('EXT:schmidt_ermstedt/Resources/Public/Icons/ge-2_col.svg')
    ->setSaveAndCloseInNewContentElementWizard(false)
);

// container 2
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'three_columns',
            '3 Column Container',
            'Container with 3 Columns 33-33-33',
            [
                [
                    ['name' => '3-cols-left', 'colPos' => 231],
                    ['name' => '3-cols-midle', 'colPos' => 232],
                    ['name' => '3-cols-right', 'colPos' => 233]
                ]
            ]
        )
    )
	->setIcon('EXT:schmidt_ermstedt/Resources/Public/Icons/Register/ge-3_col.svg')
	->setSaveAndCloseInNewContentElementWizard(false)
);

// container 3
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'four_columns',
            '4 Column Container',
            'Container with 4 Columns 25-25-25-25',
            [
                [
                    ['name' => '4-cols-left', 'colPos' => 241],
                    ['name' => '4-cols-left-midle', 'colPos' => 242],
                    ['name' => '4-cols-right-midle', 'colPos' => 243],
                    ['name' => '4-cols-right', 'colPos' => 244]
                ]
            ]
        )
    )
	->setIcon('EXT:schmidt_ermstedt/Resources/Public/Icons/Register/ge-4_col.svg')
	->setSaveAndCloseInNewContentElementWizard(false)
);

    // Add Flexform to Container Two Columns Grid-System
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:schmidt_ermstedt/Configuration/FlexForms/TwoColumns.xml',
        'two_columns'
    );
 
    $GLOBALS['TCA']['tt_content']['types']['two_columns']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,pi_flexform;Container Einstellungen,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ';

    // Add Flexform to Container Three Columns Grid-System
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:schmidt_ermstedt/Configuration/FlexForms/ThreeColumns.xml',
        'three_columns'
    );
 
    $GLOBALS['TCA']['tt_content']['types']['three_columns']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,pi_flexform;Container Einstellungen,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ';

    // Add Flexform to Container Four Columns Grid-System
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:schmidt_ermstedt/Configuration/FlexForms/FourColumns.xml',
        'four_columns'
    );

// New fields in table:tt_content
/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
   'tt_content',
 [
	'tx_t3sbootstrap_header_fontawesome' => [
		'label' => 'Font Awesome Icon',
		'exclude' => 1,
		'config' => [
			'type' => 'input',
			'size' => 40,
			'eval' => 'trim',
			'valuePicker' => [
				'items' => [
					['bahai', 'fa-duotone fa-bahai fa-lg'],
					['bible', 'fa-duotone fa-book-bible'],
					['typo3', 'fa-brands fa-typo3'],
					['envelope', 'fa-duotone fa-envelopes fa-lg'],
					['chevron-up', 'fa-duotone fa-chevron-up fa-lg'],
					['mobile-screen', 'fa-duotone fa-mobile-screen fa-lg'],
					['fa-phone', 'fa-duotone fa-phone fa-lg'],
					['question-circle', 'fa-duotone fa-circle-question'],
					['check-circle', 'fa-duotone fa-circle-check'],
					['fa-phone', 'fa-duotone fa-phone fa-lg'],
					['magnifying-glass', 'fa-duotone fa-magnifying-glass fa-lg'],
					['youtube', 'fab fa-youtube'],
					['globe', 'fa-duotone fa-globe fa-lg'],
					['comments', 'fa-duotone fa-comments fa-lg'],
					['tags', 'fa-duotone fa-tags fa-lg'],
					['arrow-up-right', 'fa-duotone fa-arrow-up-right-from-square fa-lg'],
				],
			],
		],
	],
]
);
     \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
   'tt_content',
   'access',
   'tx_t3sbootstrap_header_fontawesome',
);

 $GLOBALS['TCA']['tt_content']['palettes']['bsHeaderExtra'] = [
  'showitem' => 'tx_t3sbootstrap_header_fontawesome'
];
*/

    $GLOBALS['TCA']['tt_content']['types']['four_columns']['showitem'] = '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,pi_flexform;Container Einstellungen,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ';
}