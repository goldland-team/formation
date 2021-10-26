<?php

$ll = 'LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_db.xlf:';

$columns = [
    'button' => [
        'exclude' => true,
        'label' => $ll . 'button',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'link' => [
        'exclude' => true,
        'label' => $ll . 'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette('tt_content','spacingPalette','column, column_offset','');

/**
 *
 * ADD EXTEND COLUMN TO TT_CONTENT
 *
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $columns
);

