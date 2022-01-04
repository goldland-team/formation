<h1 class="mb-20">Creating a Custom Content Element</h1>
<p>
    - A content element can be based on fields already available in the <span class="expresion">tt_content</span> table.<br><br>

    - It is also possible to add extra fields to the <span class="expresion">tt_content</span> table, see Extending tt_content.<br><br>

    - The data of the content element is then passed to a TypoScript object, in most cases to a <span class="expresion">FLUIDTEMPLATE</span>.<br><br>

    - A data processor can also be used to convert a string to an array, as is done for example in the table content element with the field <span class="expresion">bodytext</span>.

</p>

<h2>1- Add it to the new content element wizard : Ts-config</h2><br>
<p>Content elements in the <span class="expresion">New Content Element Wizard</span> are easier to find for editors. It is therefore advised to add the new content element to this wizard (via Page TSconfig).<br></br>
    => <span class="expresion">Configuration/TsConfig/ContentElements/TeaserImageText.tsconfig</span>
</p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
                    ##############################################
                    #### CE WIZARD: Teaser Image Text ############
                    ##############################################

                    mod.wizards.newContentElement.wizardItems.common {
                        elements {
                            docsitepackage_teaserimagetext {
                                iconIdentifier = docsitepackage-teaserImageText
                                title = LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_be.xlf:content_element.teaserImageText
                                description = LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_be.xlf:content_element.teaserImageText.description
                                tt_content_defValues {
                                    CType = docsitepackage_teaserimagetext
                                }
                            }
                        }
                        show := addToList(docsitepackage_teaserimagetext)
                    }
                </pre>
<p>- Content element wizard with thCTypee new content element</p>
<img src="Img/Capture2.png" style=" width: auto;"><br><br>
<p>- Do not forget to add the declaration of the content element in the language file:</p>
=> <span class="expresion">Ressources/Private/Language/locallang_be.xlf</span><br><br>

<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
<span class="p">&lt;</span>body<span class="p">&gt;</span> 

<span class="p">&lt;</span>!--Teaser Image Text--<span class="p">&gt;</span> 
<span class="p">&lt;</span>trans-unit id="content_element.teaserImageText"<span class="p">&gt;</span> 
<span class="p">&lt;</span>source>Teaser Image Text  <span class="p">&lt;</span>/source<span class="p">&gt;</span> 
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span> 
<span class="p">&lt;</span>trans-unit id="content_element.teaserImageText.description"<span class="p">&gt;</span> 
<span class="p">&lt;</span>source>Content element with title, subtitle and bodytext.<span class="p">&lt;</span>/source<span class="p">&gt;</span> 
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span> 

<span class="p">&lt;</span>/body<span class="p">&gt;</span> 

                </pre>

<h2>2- Overrides fields : </h2><br>

<h3>2.1- Overrides in tt-content.php </h3><br>
<p>- We will add 3 fields (link, button, imageposition)</p>
=> <span class="expresion">Configuration/TCA/Overrides/tt_content.php</span><br><br>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
<span><</span>?php

$ll = 'LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_db.xlf:';
$columns = [
    'link' => [
        'exclude' => 0,
        'label' => $ll.'link',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputLink',
        ],
    ],
    'button' => [
        'exclude' => 0,
        'label' => $ll.'button',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
   
    'imageposition' => [
        'label' => $ll.'imageposition',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                    '',
                    'content-beside-text-img-left'

                ],
                [
                    'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                    'flex-row-reverse',
                    'content-beside-text-img-right'
                ]
            ],
            'default' => '',
            'fieldWizard' => [
                'selectIcons' => [
                    'disabled' => false,
                ],
            ],
        ]
    ],
];

/**
 *
 * ADD EXTEND COLUMN TO TT_CONTENT
 *
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns( 'tt_content', $columns );

                </pre>
<h3>2.2- Add fields in ext_tables.sql </h3><br>
=> <span class="expresion">doc_sitepackage/ext_tables.sql</span><br><br>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
#
# Table structure for table 'tt_content'
#

CREATE TABLE tt_content
(
    link                             varchar(255)      DEFAULT ''  NOT NULL,
    button                           varchar(255)      DEFAULT ''  NOT NULL,
    imageposition                    varchar(255)      DEFAULT ''  NOT NULL,
);

</pre>
<br>
<p>- Do not forget to add the declaration of the new fields in the language file:</p>
=> <span class="expresion">Ressources/Private/Language/locallang_db.xlf</span><br><br>

<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
<span class="p">&lt;</span>trans-unit id="link"<span class="p">&gt;</span> 
<span class="p">&lt;</span> source<span class="p">&gt;</span> Link <span class="p">&lt;</span>/source<span class="p">&gt;</span> 
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span> 

<span class="p">&lt;</span>trans-unit id="button"<span class="p">&gt;</span> 
<span class="p">&lt;</span>source<span class="p">&gt;</span> Button <span class="p">&lt;</span>/source<span class="p">&gt;</span> 
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span>
			
<span class="p">&lt;</span>trans-unit id="imageposition"<span class="p">&gt;</span>
<span class="p">&lt;</span>source<span class="p">&gt;</span>Image Position<span class="p">&lt;</span>/source<span class="p">&gt;</span>
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span>


<span class="p">&lt;</span>trans-unit id="tabs.image"<span class="p">&gt;</span>
<span class="p">&lt;</span>source<span class="p">&gt;</span>Image Teaser<span class="p">&lt;</span>/source<span class="p">&gt;</span>
<span class="p">&lt;</span>/trans-unit<span class="p">&gt;</span>

                </pre>
<h3>2.3- Analyse data base</h3><br>
=> <span class="expresion">Maintenance (back-end)/Analyse DB</span><br><br>
<img src="Img/Capture1.png"><br><br>


<h2>3- Register the content element : TCA</h2><br>
<p>- First we need to define the key of the new content element type. We use <span class="expresion">tt_content_element_teaser_image_text</span> throughout the simple example.<br><br>

    - Next the key needs to be added to the select field <span class="expresion">CType</span>. This will make it available in Type dropdown in the backend.<br><br>

    - The following code must be added to the file: <br><br>
    => <span class="expresion">Configuration/TCA/Overrides/tt_content_element_teaser_image_text.php</span><br><br>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
<span><</span><span>?</span><span>php</span>

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
/***************
 * Configure element type
 */
$GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'] = array_replace_recursive(
    $GLOBALS['TCA']['tt_content']['types']['docsitepackage_teaserimagetext'],
    [
        'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
           header,header_layout,bodytext,imageposition,
            --palette--;btnPalette;btnPalette,
            --div--;LLL:EXT:doc_sitepackage/Resources/Private/Language/locallang_db.xlf:tabs.image,
            image,
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

                </pre><br>
<h3>- Add new Palette :</h3><br>
<p></p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
$GLOBALS['TCA']['tt_content']['palettes']['btnPalette'] = ['showitem' => 'button, link'];         
                    </pre><br>

<h3>- Override needed columns :</h3><br>
<p>This setting allows to override image field configuration :at least one selected image is needed. </p><br>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
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
                <span class="expresion">'minitems' => 1,</span>
                <span class="expresion">'maxitems' => 1,</span>
            ],
            ('png, jpg, svg')
        ),
    ],
];
                    </pre><br>

<h2>4- Add TypoScript to your extension :</h2><br>
<p>The output in the frontend gets configured in the setup TypoScript. See Add TypoScript to your extension about how to add TypoScript.<br><br>

    In the examples extension the TypoScript can be found at <br><br>
    => <span class="expresion">Configuration/TypoScript/ContentElements/TeaserImageText.typoscript</span><br><br>
</p>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
tt_content.vdivsitepackage_teaserimagetext =< lib.contentElement
tt_content.vdivsitepackage_teaserimagetext {
    ################
    ### TEMPLATE ###
    ################
    templateName = TeaserImageTex

    dataProcessing {
       10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
       10 {
             references.fieldName = image
             as = images
          }
       }
}
                     </pre><br>
<h2>5- Configure the frontend rendering : Template</h2><br>
<p> - The Fluid templates for our custom content element will be saved in our extension. Therefore we need to add the path to the templateRootPaths:
    <br><br>
    - The Fluid template is configured by the templateName property as<span class="expresion">TeaserImageText</span>.
    <br><br>
    - This will load a <span class="expresion">TeaserImageText.html </span>template file from the path defined at the templateRootPaths.
    <br><br>
    => <span class="expresion">Resources/Private/Templates/ContentElement/TeaserImageText.html</span>.
</p>
<br>
<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
<span></span><span class="p">&lt;</span><span class="nt">html</span> <span class="na">data-namespace-typo3-fluid</span><span class="o">=</span><span class="s">"true"</span> <span class="na">xmlns:f</span><span class="o">=</span><span class="s">"http://typo3.org/ns/TYPO3/CMS/Fluid/ViewHelpers"</span><span class="p">&gt;</span>
<span class="p">&lt;</span><span>div</span> class=" row teaser-image-text {f:if(condition: '{data.imageposition} == 1', then: 'left', else: 'right')}"<span class="p">&gt;</span>
      <span class="p">&lt;</span><span>div</span> class="col-md-6 image-teaser<span class="p">&gt;</span>

           <span class="p">&lt;</span>f:if condition="{images.0.originalFile}"<span class="p">&gt;</span>
                <span class="p">&lt;</span>figure<span class="p">&gt;</span>
                      <span class="p">&lt;</span>f:image image="{images.0.originalFile}" treatIdAsReference="1" alt="{images.0.properties.alternative}" title="{images.0.properties.title}" /<span class="p">&gt;</span>
                <span class="p">&lt;</span>/figure<span class="p">&gt;</span>
                <span class="p">&lt;</span>figcaption<span class="p">&gt;</span>{images.0.properties.description}<span class="p">&lt;</span>/figcaption<span class="p">&gt;</span>
                <span class="p">&lt;</span>/f:if<span class="p">&gt;</span>
                   <span class="p">&lt;</span>/div<span class="p">&gt;</span>

            <span class="p">&lt;</span>div class=" col-md-6 text-teaser"<span class="p">&gt;</span>
                <span class="p">&lt;</span>f:if condition="{data.header}"<span class="p">&gt;</span>
                <span class="p">&lt;</span>div class="headline"<span class="p">&gt;</span>
                <span class="p">&lt;</span>f:render partial="Header/CustomHeader" arguments="{header:data.header,layout:data.header_layout}" /<span class="p">&gt;</span>
                <span class="p">&lt;</span>/div<span class="p">&gt;</span>
                <span class="p">&lt;</span>/f:if<span class="p">&gt;</span> 
   
                 <span class="p">&lt;</span>f:if condition="{data.bodytext}"<span class="p">&gt;</span>
                 <span><</span>div class="text"<span class="p">&gt;</span>
                    {data.bodytext -> f:format.html()}
                    <span class="p">&lt;</span>/div<span class="p">&gt;</span>
                    <span class="p">&lt;</span>/f:if<span class="p">&gt;</span>
            
                    <span class="p">&lt;</span>f:if condition="{data.link}"<span class="p">&gt;</span>
                    <span class="p">&lt;</span>div class="link"<span class="p">&gt;</span>
                    <span class="p">&lt;</span>f:link.typolink parameter="{data.link}"<span class="p">&gt;</span>
                        {data.button -> f:format.html()} 
                        <span class="p">&lt;</span>/f:link.typolink<span class="p">&gt;</span>
            <span class="p">&lt;</span>/div<span class="p">&gt;</span>
                <span class="p">&lt;</span>/f:if<span class="p">&gt;</span>

        <span class="p">&lt;</span>/div<span class="p">&gt;</span>
 <span class="p">&lt;</span>/div<span class="p">&gt;</span>

<span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
                     </pre><br>