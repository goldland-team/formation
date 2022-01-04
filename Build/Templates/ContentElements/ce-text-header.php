<?php
$headline = isset($headline) ? $headline : '';
$headlineType = isset($headlineType) ? $headlineType : '1';
$subtitle = isset($subtitle) ? $subtitle : '';
$subtitleType = isset($subtitleType) ? $subtitleType : '2';
$text = isset($text) ? $text : '';
$longText = isset($longText) ? $longText : false;

?>
<div class="container">
    <?php if(!empty($headline)): ?>
    <div class="row justify-content-center">
        <?php if($longText){ ?>
        <div class="col-md-6 text-center mt-40">
            <?php }else{ ?>
            <div class="col-md-4 text-center mt-40">
                <?php } ?>
            <h<?php echo $headlineType; ?>  ><?php echo $headline; ?></h<?php echo $headlineType; ?>>
        </div>
    </div>
        <?php endif; ?>
        <?php if(!empty($subtitle)): ?>
    <div class="row justify-content-center mt-10 mb-20">
        <?php if($longText){ ?>
        <div class="col-md-6 text-center">
            <?php }else{ ?>
            <div class="col-md-4 text-center">
                <?php } ?>
            <h<?php echo $subtitleType; ?>  ><?php echo $subtitle; ?></h<?php echo $subtitleType; ?>>
        </div>
    </div>
        <?php endif; ?>
        <?php if(!empty($text)): ?>
    <div class="row justify-content-center">
        <?php if($longText){ ?>
        <div class="col-md-6">
            <?php }else{ ?>
            <div class="col-md-4">
        <?php } ?>

            <p class="text-center"><?php echo $text; ?></p>

        </div>

    </div>
        <?php endif ?>
</div>
