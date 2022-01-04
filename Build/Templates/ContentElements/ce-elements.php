<?php

$class = isset($class) ? $class : '';
$text = isset($text) ? $text:[];
$headline = isset($headline) ? $headline:[];
$link = isset($link) ? $link:[];
?>
<div class="ce-elements">
    <div class="container">
        <div class="row ">
            <div class="col-md-10 offset-md-1 ">
                <div class="element-item">
                    <?php if( !empty( $headline ) ): ?>
                    <h2>
                        <?php echo $headline; ?>
                    </h2>
                    <?php endif; ?>
                    <?php if( !empty( $text ) ): ?>
                    <p>
                        <?php echo $text; ?>
                    </p>
                    <?php endif; ?>
                    <?php if( !empty( $link ) ): ?>
                    <a href="#">
                        <?php echo $link; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>