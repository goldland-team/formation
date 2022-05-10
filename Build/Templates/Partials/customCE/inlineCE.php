<h1 class="mb-20">Creating a Custom Content Element Type IN Line</h1>
<p>
Most of the steps are the same for  <span class="expresion">SimpleCE</span> and <span class="expresion">InlineCE</span> . <br><br>
the same for : <br><br> 
    Add it to the new content element wizard : <span class="expresion">Ts-config</span> <br><br>
    Register the content element : <span class="expresion"> TCA </span>  <br><br>
</p>
<p> but in the  <span class="expresion"> ext_tables.sql </span> we will add our new table tx_doc_sitepackage_info_item </p>

<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
                   
CREATE TABLE tx_doc_sitepackage_info_item
(
    tt_content      int(11) unsigned  DEFAULT '0',
    media           int(11)           DEFAULT '0' NOT NULL,
    header          varchar(1024)     DEFAULT ''  NOT NULL,
    header_layout   varchar(1024)     DEFAULT ''  NOT NULL,
    subheader       varchar(1024)     DEFAULT ''  NOT NULL,
    bodytext        text,
    link         	varchar(255)      DEFAULT ''  NOT NULL,
    link_text       varchar(255)      DEFAULT ''  NOT NULL,
    second_link     varchar(255)      DEFAULT ''  NOT NULL,
    second_link_text varchar(255)     DEFAULT ''  NOT NULL,
    author         	varchar(255)      DEFAULT ''  NOT NULL, 
    image_position  varchar(255)      DEFAULT ''  NOT NULL,
    background  int(11) DEFAULT '0' NOT NULL , 
);
</pre>
<p>But in the registre of the Content element  <span class="expresion">TCA </span> all the same , just we use the table here in Override folder  in the TCA </p> 
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;"> 
/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['docsitepackage_infoitemtext'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['docsitepackage_infoitemtext'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            header,subheader, 
            <span class="expresion"> tx_doc_sitepackage_info_item,</span>
            --palette--;btnPalette;btnPalette,
        --div--;LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_db.xlf:tabs.media,
            media,
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
</pre>
<p> - Also we have to add the   <span class="expresion"> tx_doc_sitepackage_info_item </span> in the tt_content Overrodes folder in TCA </p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;"> 
<span class="expresion"> 'tx_doc_sitepackage_info_item '</span>  => [
        'exclude' => 0,
        'label' => $ll.'tx_doc_sitepackage_info_item',
        'config' => [
            'type' => 'inline',
            'foreign_table' => 'tx_doc_sitepackage_info_item',
            'foreign_field' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'appearance' => <h2> in the type InLine we can override on the Table column so as in the SimpleCE in the tt_content page we add this  </h2>
                'collapseAll' => 1,
                'useSortable' => 1,
                'newRecordLinkPosition' => 'top',
                'showPossibleLocalizationRecords' => 1,
                'showAllLocalizationLink' => 1,
            ],
        ],
    ],
</pre>.
<h2> 2- Overrides fields </h2>
<p>- In the type InLine we can override on the Table column so as in the SimpleCE in the tt_content page we add this </p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;"> 
'tx_doc_sitepackage_info_item' => [
        'config' => [
            'overrideChildTca' => [
                'ctrl' => [
                    'label' => 'header'
                ],
                'types' => [
                    '1' => [
                        'showitem' => '
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                            header,
                            image,
                            image_position,
                            media,
                        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                        --palette--;;hiddenLanguagePalette,
                    '
                    ],
                ],
                'columns' => [
                    'image' => [
                        'label' => $ll . 'fal_related_files',
                        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                            'image',
                            [
                                'behaviour' => [
                                    'allowLanguageSynchronization' => true,
                                ],
                                'appearance' => [
                                    'createNewRelationLinkTitle' => $ll . 'fal_related_files.add',
                                    'showPossibleLocalizationRecords' => true,
                                    'showRemovedLocalizationRecords' => true,
                                    'showAllLocalizationLink' => true,
                                    'showSynchronizationLink' => true
                                ],
                                // custom configuration for displaying fields in the overlay/reference table
                                // to use the newsPalette and imageoverlayPalette instead of the basicoverlayPalette
                                'overrideChildTca' => [
                                    'types' => [
                                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                                            'showitem' => '
                                                    --palette--;;imageoverlayPalette,
                                                    --palette--;;filePalette'
                                        ],
                                    ],
                                ],
                                'minitems' => 0,
                                'maxitems' => 1,
                            ],
                            ('jpg,png')
                        )
                    ],
                ],
            ],
        ],
    ],
</pre>
<h2>Typoscript</h2>
<p> - The typoscript step , is like the one of SimpleCE ; juste we need to add the <span class="expresion"> librery </span>  of our CE  </p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;"> 
tt_content.doc_sitepackage_info_item =< lib.contentElement
tt_content.doc_sitepackage_info_item {
    ################
    ### TEMPLATE ###
    ################
    templateName = InforItemText

    ##########################
    ### DATA PREPROCESSING ###
    ##########################
    dataProcessing {
        20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        20 {
            references.fieldName = media
            as = media
        }
    }
}
</pre>