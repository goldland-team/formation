<h1 class="mb-20">Add the Icon</h1>
<p>
    You can either use an existing icon from the TYPO3 core or register your own icon using the Icon API.
</p>
<h3>- Search Icon : </h3><br>
<p>
    - Do a little search on the flaticon website : <span class="expresion">https://www.flaticon.com/fr/ </span><br><br>
    - Download the icon and move it in the Icons folder :<br><br>
    => <span class="expresion"> Resources/Public/Icons/ContentElement/icon.svg</span>.
</p>
<h3>- Register Icon : </h3><br>
<p>
    - In this example we use the icon <span class="expresion">Teaser Image Text</span>, the same icon as the Regular TeaserImageText uses.<br><br>
    => <span class="expresion"> Resources/ext_localconf.php</span>.
</p>

<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
/***************
 * Register Icons
 */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$icons = ['test','<span class="expresion">teaserImageText</span>','heroslider', 'teaserslider', 'quoteslider', 'imagecaption', 'teasertextmedia'];

foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        'vdisitepackage-' . $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:vdi_sitepackage/Resources/Public/Icons/ContentElements/' . $icon . '.svg']
    );
}

                   </pre>
<h3>- Assign Icon :</h3><br>
<p>You can either use an existing icon from the TYPO3 core or register your own icon using the Icon API. In this example we use the icon <span class="expresion">content-text</span>, the same icon as the <span class="expresion">Regular Text Element</span> uses.<br><br>

    - The following code must be added to the file: <br><br>
    => <span class="expresion">Configuration/TCA/Overrides/tt_content_element_teaser_image_text.php</span><br>
</p>

<pre style="background:#000; color:#fff; padding-top:30px; padding-left: 30px;">
/***************
 * Assign Icon
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['docsitepackage_teaserimagetext'] = '<span class="expresion">docsitepackage-teaserImageText</span>';
                    </pre><br><br>