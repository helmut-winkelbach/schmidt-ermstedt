<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['schmidt_ermstedt'] = 'EXT:schmidt_ermstedt/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:schmidt_ermstedt/Configuration/TsConfig/Page/All.tsconfig">');

// Register Icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'systeminformation-bootstrappackage',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:schmidt_ermstedt/Resources/Public/Icons/bootstrappackage.svg']
);
$icons = [
    'timeline',
    'timeline-item',
    'accordion',
    'accordion-item'
];
foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'content-bootstrappackage-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:schmidt_ermstedt/Resources/Public/Icons/' . $icon . '.svg']
    );
}
return [
    'content-bootstrappackage-accordion' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:schmidt_ermstedt/Resources/Public/Icons/ContentElements/accordion.svg'
    ],
    'content-bootstrappackage-accordion-item' => [
        'provider' => \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        'source' => 'EXT:schmidt_ermstedt/Resources/Public/Icons/ContentElements/accordion-item.svg'
    ],
];

