<?php
$headline = isset($headline) ? $headline:'';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text : 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus condimentum dictumst fringilla orci iaculis molestie turpis tellus cras posuere, lacinia ultricies aenean magnis fames facilisis volutpat dictum potenti facilisi. Taciti auctor ligula vitae sollicitudin mollis at aenean lectus, dictum porta lacinia cursus sem nullam sagittis interdum dignissim, senectus ullamcorper aptent placerat neque in montes.';
?>


<div class="header-centered">
    <div class="offset-lg-2 col-lg-8">
        <?php if( !empty( $headline ) ): ?>
        <div class="headline">
            <h2><?php echo $headline; ?></h2>
        </div>
        <?php endif; ?>
        <?php if( !empty( $subline ) ): ?>
        <p class="subline"><?php echo $subline; ?></p>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
        <p class="textcenter"><?php echo $text; ?></p>
        <?php endif; ?>
    </div>
</div>