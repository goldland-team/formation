<?php
$class = isset($class) ? $class : '';
$items = isset($items) ? $items : [];
$partners = isset($partners) ? $partners : [];
$headline = isset($headline) ? $headline:[];
$image = isset($image) ? $image:'';
?>
<div class="ce-partners-logo">
<div class="row">
<div class=" col-sm-12 col-md-12 col-lg-11 offset-lg-1 partner-items <?php echo $class; ?>">
        <?php foreach ($partners as $val) { ?>
            <div class=" partner-item">
                <?php if( !empty( $val['headline'] ) ): ?>
                    <p><?php echo $val['headline']; ?></p>
                <?php endif; ?>
                <div class="items">
                    <?php foreach ($val['items'] as $item) { ?>
                        <?php if( !empty( $item['image'] ) ): ?>
                                <figure>
                                    <img src="<?php echo $item['image']; ?>" alt="logo partner">
                                </figure>
                        <?php endif; ?>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
    
</div>