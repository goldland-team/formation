<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : [];
$subline = isset($subline) ? $subline : [];
$date = isset($date) ? $date : [];
$type = isset($type) ? $type : [];
$text = isset($text) ? $text : '';
$title = isset($title) ? $title : '';
?>
<div class="ce-news-detail">
    <div class="container">
        <div class="row justify-content-center Sidebarpage">
            <div class="col-md-7 col-xl-6 bloc-left">
                <div class="link-arrow">
                    <a href="#" class="arrow">
                        Zurück zur Übersicht
                    </a>
                </div>
                <div class="caption">
                    <?php if (!empty($date)): ?>
                        <p class="news-card-date"><?php echo $date; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($type)): ?>
                        <p class="news-category-badge"><?php echo $type; ?></p>
                    <?php endif; ?>
                </div>
                <div class="headline">
                    <?php if( !empty( $headline ) ): ?>
                        <h1> <?php echo $headline; ?></h1>
                    <?php endif; ?>
                    <?php if( !empty( $subline) ): ?>
                        <p class="big"><?php echo $subline; ?></p>
                    <?php endif; ?>
                </div>
                <div class="content-news">
                    <?php foreach ($items as $item) { ?>
                        <?php if (!empty($item['title'])): ?>
                                <h2><?php echo $item['title']; ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])): ?>
                                <p class="primary">
                                    <?php echo $item['text']; ?>
                                </p>
                        <?php endif; ?>
                        <?php if (!empty($item['title'])): ?>
                            <h3><?php echo $item['title']; ?></h3>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])): ?>
                            <p class="primary">
                                <?php echo $item['text']; ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($item['title'])): ?>
                            <h4><?php echo $item['title']; ?></h4>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])): ?>
                            <p class="primary">
                                <?php echo $item['text']; ?>
                            </p>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 sidebar-col">
                <?php ce('sidebar',[
                    'notify'=>[
                        [
                            'headline' => 'Janie Pratt',
                            'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus condimentum dictumst fringilla orci iaculis molestie turpis tellus cras posuere, lacinia ultricies aenean magnis fames facilisis volutpat dictum potenti facilisi. Taciti auctor ligula vitae sollicitudin mollis at aenean lectus, dictum porta lacinia cursus sem nullam sagittis interdum dignissim, senectus ullamcorper aptent placerat neque in montes. Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed.
                Teu accumsan nunc elementum nibh per ut, ridiculus condimentum dictumst fringilla orci iaculis molestie turpis tellus cras posuere, lacinia ultricies aenean magnis fames facilisis volutpat dictum potenti facilisi. Taciti auctor ligula vitae sollicitudin mollis at aenean lectus, dictum porta lacinia cursus sem nullam sagittis interdum dignissim, senectus ullamcorper aptent placerat neque in montes.',
                        ]
                    ],
                    'posts' =>[
                        [
                            'class' => 'contact',
                            'autor' => 'Presseverteiler',
                            'image' => 'Img/avatar.jpg',
                            'name' => 'Janie Pratt',
                            'position' => 'CEO ',
                            'text' => 'Verband der Immobilienverwalter Baden-Württemberg e. V. ',
                            'link' => ' Informationen ausblenden',
                        ],
                        [
                            'class' => 'article',
                            'headline' => 'Presseverteiler',
                            'subtitle' => 'Corona-Umfrage des VDIV Deutschland',
                            'image' => 'Img/publication-cover-1.jpg',
                            'btn' => 'Download PDF',
                        ],
                        [
                            'class' => 'post',
                            'headline' => 'Presseverteiler',
                            'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. ',
                            'btn' => 'Buttonlink',
                        ],
                        [
                            'class' => 'post ',
                            'headline' => 'Presseverteiler',
                            'text' => 'Leipziger Platz 9<br>
                                        10117 Berlin<br>
                                        <br>
                                        Tel.: 030 300 96 79 0<br>
                                        Fax: 030 300 96 79 21<br>
                                         ',
                            'linkTxt' => 'seminare@vdiv.de<br>
                                        www.vdiv.de',
                        ],
                        [
                            'class' => 'post linkTxt',
                            'linkTxt' => 'AGB<br>
                                    Seminarbedingungen<br>
                                    Über die VDIV Seminare<br>',
                        ],
                        [
                            'class' => 'icon',
                            'headline' => 'Download',
                            'subline' => 'Titel der Pressemitteilung',
                            'image' => 'Img/pdf.svg',
                            'btn' => 'Download PDF',
                        ],
                        [
                            'class' => 'post btnFull details',
                            'text' => 'Datum (Zeitraum): von - bis<br>
                                        Ort: (Anfahrt Googlemaps)<br>
                                        <br>
                                        Veranstalter:<br>
                                        <br>
                                        Qualifikationsniveau:<br>
                                        Format: <br>
                                        Themengebiet:<br>
                                        <br>
                                        Kosten 1<br>
                                        Kosten 2<br>
                                        Kosten 3<br>
                                         ',

                            'btnTop' => 'In den Warenkorb',
                        ],
                        [
                            'class' => 'post btnFull',
                            'btn' => 'Abmelden vom Presseverteiler',
                        ],
                        [
                            'class' => 'post btnFull',
                            'btnTop' => 'Abmelden vom Presseverteiler',
                        ]
                    ]]); ?>

            </div>
        </div>
    </div>
</div>
