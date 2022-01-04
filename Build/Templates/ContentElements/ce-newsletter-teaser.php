<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline:'';
$text = isset($text) ? $text.'':
$image = isset($image) ? $image:'';
$link = isset($link) ? $link : '';
?>
<div class="container">
    <div class=" newsletter-teaser ">
        <div class="row newsletter">
            <?php if( !empty( $image ) ): ?>
            <div class="image col-md-6">
                <figure>
                    <img src=" <?php echo $image; ?>" alt="image-event-content">
                </figure>
            </div>
            <?php endif; ?>
            <div class="description col-md-5 offset-md-1    ">
                <?php if( !empty( $headline ) ): ?>
                <div class="headline">
                    <p><?php echo $headline; ?></p>
                </div>
                <?php endif; ?>
                <div class="mailaddress">
                    <form action="#" method="post">
                        <div class="desktop-input special-input-wrapper">
                            <?php if( !empty( $text ) ): ?>
                            <label for="mail-address"><?php echo $text; ?></label>
                            <?php endif; ?>
                            <input class="special-input" type="text" name="mail-address"
                                placeholder="<?php echo $text; ?>">
                        </div>
                        <?php if( !empty( $link ) ): ?>
                        <div class="link">
                            <button><?php echo  $link;?></button>
                        </div>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>