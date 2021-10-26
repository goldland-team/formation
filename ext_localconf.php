<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['doc_sitepackage'] = 'EXT:doc_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:doc_sitepackage/Configuration/TsConfig/Page/All.tsconfig">');

/***************
* Register Icons
*/
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$icons = ['teaserImageText'];

foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'vdivsitepackage-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:doc_sitepackage/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
    );
}