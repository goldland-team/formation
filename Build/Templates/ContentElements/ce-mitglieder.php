<?php

$class = isset($class) ? $class : '';
$subline = isset($subline) ? $subline:[];
$headline = isset($headline) ? $headline:[];
$btn = isset($btn) ? $btn:[];
?>
<div class="ce-mitglieder">
    <div class="container">
        <div class="row ">
            <div class="col-md-6 offset-md-3 ">
                <?php if( !empty( $headline ) ): ?>
                    <h2>
                        <?php echo $headline; ?>
                    </h2>
                <?php endif; ?>
                <?php if( !empty( $subline ) ): ?>
                    <p>
                        <?php echo $subline; ?>
                    </p>
                <?php endif; ?>
                <?php if( !empty( $btn ) ): ?>
                <div class="btn">
                    <a href="#" >
                        <?php echo $btn; ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

