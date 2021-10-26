<?php

/*
 * This file is part of the package Goldland/doc_sitepackage
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

defined('TYPO3_MODE') || die();

/***************
 * Add Content Element
 */
if (!is_array($GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'])) {
    $GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'] = [];
}


/***************
 * Add content element to selector list
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_db.xlf:teaserImageText',
        'docsitepackage_teaserimagetext',
        'docsitepackage-teaserImageText'
    ],
    '--div--',
    'after'
);

/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['docsitepackage_teaserimagetext'] = 'docsitepackage-teaserImageText';

/********
 * Add new Palette
 */
$GLOBALS['TCA']['tt_content']['palettes']['btnPalette'] = ['showitem' => 'button, link'];

/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
           header,header_layout,bodytext,image,imageposition,
            --palette--;btnPalette;btnPalette,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        '
    ]
);

/***************
 * Override needed columns
 */
$GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext']['columnsOverrides'] = [
    
    'bodytext' => [
        'config' => [
            'enableRichtext' => true,
        ],
    ],
    'image' => [
        'exclude' => true,
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'image',
            [
                'minitems' => 1,
                'maxitems' => 1,
            ],
            ('png, jpg, svg')
        ),
    ],
];
