<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$text = isset($text) ? $text:'';
$image = isset($image) ? $image:'';
?>
<div class="ce-mediathek-fotogalerien">
    <div class="container-xl">
        <div class="row mediathek-items">
            <?php foreach ($items as $item) { ?>
                <div class="col-md-6 ">
                    <div  class="mediathek-item">
                        <?php if( !empty( $item['image'] ) ): ?>
                            <a href="<?php echo $item['image']; ?>" data-fancybox="images"
                               data-caption="Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed eu accumsan nunc elementum nibh per ut.">
                                <figure >
                                    <img src="<?php echo $item['image']; ?>" alt="mediathek">
                                </figure>
                            </a>
                        <?php endif; ?>
                        <?php if( !empty( $item['text'] ) ): ?>
                            <p>
                                <?php echo $item['text']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>



