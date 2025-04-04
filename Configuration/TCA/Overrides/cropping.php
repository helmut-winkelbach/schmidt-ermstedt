<?php

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3') or die('Access denied.');

// Add crop variants
$defaultCropSettings = [
    'title' => 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.default',
    'allowedAspectRatios' => [
        '16:9' => [
            'title' => 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:ratio.16_9',
            'value' => 16 / 9
        ],
        '4:3' => [
            'title' => 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:ratio.4_3',
            'value' => 4 / 3
        ],
        '1:1' => [
            'title' => 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:ratio.1_1',
            'value' => 1.0
        ],
        'NaN' => [
            'title' => 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:ratio.free',
            'value' => 0.0
        ],
    ],
    'selectedRatio' => 'NaN',
    'cropArea' => [
        'x' => 0.0,
        'y' => 0.0,
        'width' => 1.0,
        'height' => 1.0,
    ]
];
$xlargeCropSettings = $defaultCropSettings;
$xlargeCropSettings['title'] = 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.xlarge';
$largeCropSettings = $defaultCropSettings;
$largeCropSettings['title'] = 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.large';
$mediumCropSettings = $defaultCropSettings;
$mediumCropSettings['title'] = 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.medium';
$smallCropSettings = $defaultCropSettings;
$smallCropSettings['title'] = 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.small';
$extrasmallCropSettings = $defaultCropSettings;
$extrasmallCropSettings['title'] = 'LLL:EXT:schmidt_ermstedt/Resources/Private/Language/Backend.xlf:option.extrasmall';

// Accordion
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_accordion_item']['types']['1']['columnsOverrides']['media']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;

// Timeline
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['default'] = $defaultCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['xlarge'] = $xlargeCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['large'] = $largeCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['medium'] = $mediumCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['small'] = $smallCropSettings;
$GLOBALS['TCA']['tx_bootstrappackage_timeline_item']['types']['1']['columnsOverrides']['image']['config']['overrideChildTca']['columns']['crop']['config']['cropVariants']['extrasmall'] = $extrasmallCropSettings;
