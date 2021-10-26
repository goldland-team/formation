<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'doc_sitepackage';

    /**
     * Default TypoScript for doc_sitepackage
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'sitepackage documentation (added Ext:  fluid + News + Seo)'
    );
});