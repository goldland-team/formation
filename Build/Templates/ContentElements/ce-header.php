<?php
$class = isset($class) ? $class : '';
$items = isset($items)?$items:[];
?>
<div class="ce-header">
    <?php foreach ($items as $item) { ?>

    <div class="slider-elements <?php echo $item["class"]; ?>">
        <?php if(!empty($item['bubble-text'])): ?>
        <div class="circle-badge <?php echo  $item["bubble-color"]; ?>">
            <div class='circle-info'><?php echo $item["bubble-text"]; ?></div>
        </div>
        <?php endif ?>
        <?php if(!empty($item['image'])): ?>
        <div class="image-slider cd-box blue-shadow">
            <figure>
                <img src="<?php echo $item["image"]; ?>" alt="image-event-content" ?>
            </figure>
        </div>
        <?php else : ?>
                <div class="no-image"><img></div>
        <?php endif ?>
        <div class="offset-md-1 offset-lg-2 col-md-10 col-lg-7 col-xl-5  description">
            <?php if(!empty($item['headline'])): ?>
            <div class="headline">
                <h2><?php echo $item["headline"]; ?></h2>
            </div>
            <?php endif ?>
            <?php if(!empty($item['subline'])): ?>
            <div class="subline">
                <h4><?php echo $item["subline"]; ?></h4>
            </div>
            <?php endif ?>
            <?php if(!empty($item['text'])): ?>
            <div class="text">
                <p class="big"><?php echo $item["text"]; ?></p>
            </div>
            <?php endif ?>
            <?php if(!empty($item['link'])): ?>
            <div class="link">
                <a class="button-link" href="#"><?php echo $item["link"]; ?></a>
            </div>
            <?php endif ?>
        </div>

        <div class="circle-wrapper circle-shape white "></div>
    </div>
    <?php } ?>
</div>