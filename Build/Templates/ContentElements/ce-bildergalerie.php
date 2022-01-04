<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline:[];
$subline = isset($subline) ? $subline:[];
$text = isset($text) ? $text:'';
$image = isset($image) ? $image:'';
?>
<div class="ce-bildergalerie">
    <div class="container-bildergalerie h-100 ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-4  col-md-10 offset-md-1 bildergalerie-item">
                    <?php if( !empty( $headline ) ): ?>
                    <h3>
                        <?php echo $headline; ?>
                    </h3>
                    <?php endif; ?>
                    <?php if( !empty( $subline ) ): ?>
                    <p>
                        <?php echo $subline; ?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6 offset-lg-1  bildergalerie-slider">
                    <?php foreach ($items as $item) { ?>
                    <div class="bildergalerie-slick">
                        <?php if( !empty( $item['image'] ) ): ?>
                        <figure>
                            <img src="<?php echo $item['image']; ?>" alt="bildergalerie">
                        </figure>
                        <?php endif; ?>
                        <?php if( !empty( $item['text'] ) ): ?>
                        <p>
                            <?php echo $item['text']; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
</div>