<?php
$items = isset($items) ? $items : '';

?>

<div class="ce-teaser-slider mb-md-60 mb-30 seminar-slider-wrapper">
    <div class="container">
        <div class="row">
            <div class=" col-12">
                <div class="teaser-slide-wrapper">
                    <?php foreach ($items as $item) { ?>

                        <div class="slider-wrapper">
                            <div class="item-content">

                        <?php if(!empty($item['image'])): ?>
                            <div class="image">
                                <figure>
                                    <img src="<?php echo $item["image"]; ?>"?>
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

                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-20 d-flex justify-content-center">
                <a class="button-link" href="#">Zu allen Seminaren</a>
            </div>
        </div>
    </div>
</div>
