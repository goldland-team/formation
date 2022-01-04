<?php
$items = isset($items) ? $items : '';

?>


<div class="container seminare-grid-wrapper">
    <div class="row">
        <?php foreach ($items as $item) { ?>
        <div class="col-md-4 col-sm-6 position-relative ">
            <?php if(!empty($item['image'])): ?>
                <div class="image">
                    <figure>
                        <img class="item-content" src="<?php echo $item["image"]; ?>"?>
                    </figure>
                </div>

            <?php endif ?>
            <div class="text-box">
                <?php if(!empty($item['tag'])): ?>
                    <div class="vdi-tag mb-10"><?php echo $item["tag"]; ?></div>
                <?php endif ?>
                <p class="teaser-slider-text"><?php echo $item["text"]; ?></p>

                <a href="<?php echo $item["link"]; ?>" class="button-link button-icon"> <div class="icon icon-arrow"></div></a>

            </div>
        </div>


        <?php } ?>
    </div>
</div>
