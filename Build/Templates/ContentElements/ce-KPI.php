<?php
$class = isset($class) ? $class : '';
$image = isset($image) ? $image:'';
$number = isset($number) ? $number:'';
$value = isset($value) ? $value : '';
$text = isset($text) ? $text : '';
?>
<div class="ce-kpi <?php echo $class;?>">
    <?php if( !empty( $image ) ): ?>
    <div class=" col-md-6 image">
        <figure>
            <img src=" <?php echo $image; ?>" alt="capture-facts">
        </figure>
    </div>
    <?php endif; ?>
    <div class=" col-md-6 description">
        <?php if( !empty( $number ) ): ?>
        <span class="number">
            <?php echo $number; ?>
        </span>
        <?php endif; ?>
        <?php if( !empty( $value ) ): ?>
        <span class="value">
             <?php echo $value; ?> 
        </span>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
        <div class="text">
           <?php echo $text; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
