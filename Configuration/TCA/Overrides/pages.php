<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'schmidt_ermstedt';

    /**
     * Default PageTS for SchmidtErmstedt
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Schmidt-Ermstedt'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
    'Configuration/TsConfig/Timeline.tsconfig',
    'EXT:schmidt_ermstedt :: Timeline',
    'Configuration/TsConfig/Accordion.tsconfig',
    'EXT:schmidt_ermstedt :: Accordion'
    );
});
