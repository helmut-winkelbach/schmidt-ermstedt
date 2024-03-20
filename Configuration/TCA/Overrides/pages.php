<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'schmidt_ermstedt';

     /**
     * Default PageTS for WinkelbachDistribution
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Winkelbach-Distribution'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Timeline.tsconfig',
    'EXT:winkelbach_distribution :: Timeline',
    'Configuration/TsConfig/Accordion.tsconfig',
    'EXT:winkelbach_distribution :: Accordion'
    );
});