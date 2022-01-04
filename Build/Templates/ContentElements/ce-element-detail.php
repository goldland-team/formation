<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline : [];
$subline = isset($subline) ? $subline : [];
$btn = isset($btn) ? $btn : [];
$image = isset($image) ? $image : [];
$text = isset($text) ? $text : '';
$title = isset($title) ? $title : '';

?>
<div class="ce-element-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-8 bloc-left">
                <div class="headline">
                    <div class="link-arrow">
                        <a href="#" class="arrow">
                            Zurück zur Übersicht
                        </a>
                    </div>
                    <?php if( !empty( $headline ) ): ?>
                        <h1> <?php echo $headline; ?></h1>
                    <?php endif; ?>
                    <?php if( !empty( $subline) ): ?>
                        <p class="big"><?php echo $subline; ?></p>
                    <?php endif; ?>

                    <?php if (!empty($btn)): ?>
                        <button >
                            <?php echo $btn; ?>
                        </button>
                    <?php endif; ?>
                </div>
                <div class="content-elements">
                    <?php foreach ($items as $item) { ?>
                        <?php if (!empty($item['title'])): ?>
                            <h2><?php echo $item['title']; ?></h2>
                        <?php endif; ?>
                        <?php if (!empty($item['text'])): ?>
                            <p class="primary">
                                <?php echo $item['text']; ?>
                            </p>
                        <?php endif; ?>
                        <?php if( !empty( $image ) ): ?>
                            <figure >
                                <img src="<?php echo $image; ?>" alt="image">
                            </figure>
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
            <div class="col-lg-3 col-md-4">
                <?php ce('sidebar',[
                        'notification'=>[
                            [
                                'headline' => 'Janie Pratt',
                                'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus condimentum dictumst fringilla orci iaculis molestie turpis tellus cras posuere, lacinia ultricies aenean magnis fames facilisis volutpat dictum potenti facilisi. Taciti auctor ligula vitae sollicitudin mollis at aenean lectus, dictum porta lacinia cursus sem nullam sagittis interdum dignissim, senectus ullamcorper aptent placerat neque in montes. Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed.
              interdum dignissim, senectus ullamcorper aptent placerat neque in montes.',
                            ]
                        ],
                    'contact'=>[
                        [
                            'class' => '',
                            'headline' => 'Presseverteiler',
                            'image' => 'Img/avatar.jpg',
                            'name' => 'Janie Pratt',
                            'position' => 'CEO',
                            'text' => 'Verband der Immobilienverwalter Baden-Württemberg e. V.',
                            'link' => 'Informationen ausblenden',
                        ]
                    ],
                    'btnWide'=>[
                        [
                            'btn' => 'Abmelden vom Presseverteiler',
                        ],
                        [
                            'class' => '',
                            'btnColored' => 'In den Warenkorb',
                            'text' => 'Datum (Zeitraum): von - bis
                                        Ort: (Anfahrt Googlemaps)

                                        Veranstalter:

                                        Qualifikationsniveau:
                                        Format:
                                        Themengebiet:

                                        Kosten 1
                                        Kosten 2
                                        Kosten 3',
                        ],
                    ],
                    'download'=>[
                        [
                            'class' => '',
                            'headline' => 'Download',
                            'subline' => 'Titel der Pressemitteilung',
                            'icon' => 'Img/pdf.svg',
                            'btn' => 'Download PDF',
                        ],
                        [
                            'class' => '',
                            'headline' => 'Download',
                            'subline' => 'Titel der Pressemitteilung',
                            'image' => 'Img/publication-cover-1.jpg',
                            'btn' => 'Download PDF',
                        ],
                    ],
                    'posts' =>[
                        [
                            'class' => '',
                            'headline' => 'Presseverteiler',
                            'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. ',
                            'btn' => 'Buttonlink',
                        ],
                        [
                            'class' => '',
                            'headline' => 'VDIV Management GmbH',
                            'text' => 'Leipziger Platz 9 
                                    10117 Berlin 
                                    
                            Tel.: 030 300 96 79 0
                            Fax: 030 300 96 79 21

                            seminare@vdiv.de
                            www.vdiv.de',
                        ],
                        [
                            'class' => '',
                            'link' => 'AGB 
                             Seminarbedingungen  
                              Über die VDIV  Seminare',
                        ],
                    ]
                ]); ?>
            </div>
        </div>
    </div>
</div>
