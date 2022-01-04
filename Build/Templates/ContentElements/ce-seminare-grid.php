<?php
$text = isset($text) ? $text : '';
$title = isset($title) ? $title : '';
$items = isset($items)?$items:[];
$tags = isset($tags)?$tags:[];
?>

<div class="ce-seminare-grid">
    <div class="container">
        <?php if(!empty($title)): ?>
        <div class="headline">
            <h2> <?php echo $title; ?> </h2>
        </div>
        <?php endif ?>
        <?php if(!empty($text)): ?>
        <div class="subline">
            <p> <?php echo $text; ?> </p>
        </div>
        <?php endif ?>
        <button class=" d-none d-md-flex  mb-15 button-simple-search pr-20">
            <div class=" tiny-title-gray button-placeholder  ">Filter zurücksetzen</div>
            <div class="icon icon-refresh ml-5"></div>
        </button>
        <div class="tag-cloud">
            <div class="sg-list-wrapper">
                <?php foreach ($tags as $tag) { ?>
                <?php if(!empty($tag['tag'])): ?>
                <div class="check-element">
                    <div class="icon-state icon"></div>
                    <div class="check-content"><?php echo $tag['tag'] ;?></div>
                </div>
                <?php endif ?>
                <?php } ?>
            </div>
        </div>
        <div class="seminare-grid">
            <div class=" row table-wrapper">
                <?php foreach ($items as $item) { ?>
                <div class=" col-md-3 seminare-elements">
                    <div class="tags">
                        <?php foreach ($item['tags'] as $key=>$tag) { ?>
                        <?php if(!empty($tag)): ?>
                        <?php if($key < 1):?>
                        <div class="  vdi-tag">
                            <?php echo $tag['tag'] ; ?>
                        </div>
                        <?php endif ?>
                        <?php endif ?>
                        <?php } ?>
                        <?php if(count($item['tags']) > 1 ): ?>
                        <a tabindex="0" class="three-dots-button vdi-tag" role="button" data-toggle="popover"
                            data-placement="bottom" data-html="true"
                            data-content="
                    <?php for ($i= 1; $i < count($item['tags']) ; $i++) { echo  $item['tags'][$i]['tag'] ,"<br>";} ?>">...</a>
                        <?php endif ?>
                    </div>
                    <?php if(!empty($item['title'])): ?>
                    <div class="title py-8">
                        <div class="teaser-slider-title"><?php echo $item["title"]; ?>
                        </div>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($item['text'])): ?>
                    <div class="text">
                        <div class="vdi-content-description"> <?php echo $item["text"]; ?>
                        </div>
                    </div>
                    <?php endif ?>

                    <div class="description">
                        <table>
                            <tbody>
                                <?php if(!empty($item['next_date'])): ?>
                                <tr class="py-2">
                                    <td>Nächster Termin</td>
                                    <td class="dark-content to-right"><?php echo $item["next_date"]; ?></td>

                                </tr>
                                <?php endif ?>
                                <?php if(!empty($item['format'])): ?>
                                <tr>
                                    <td>Format</td>
                                    <td class="dark-content to-right"><?php echo $item["format"]; ?></td>
                                </tr>
                                <?php endif ?>
                                <?php if(!empty($item['price'])): ?>
                                <tr>
                                    <td>Preis</td>
                                    <td class="dark-content to-right"><span
                                            class="tiny-tag mr-5"><?php echo $item["price"]; ?></span><span
                                            class="tiny-tag">1350€</span></td>
                                </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                    <a href="#" class="button-link button-icon orange-bg ">
                        <div class="icon icon-arrow"></div>
                        <?php echo $item["link"]; ?>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="link-button">
            <a class="button-link" href="#">Alle Seminare durchsuchen</a>
        </div>

    </div>

</div>