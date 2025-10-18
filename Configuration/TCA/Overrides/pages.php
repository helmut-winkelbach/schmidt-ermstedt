<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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

    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Timeline.tsconfig',
        'schmidt_ermstedt :: Timeline'
    );

    ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Accordion.tsconfig',
        'schmidt_ermstedt :: Accordion'
    );
});