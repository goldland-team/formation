<?php
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline:'Mitglied werden und Vorteile genießen';
$fontstyle = isset($fontstyle) ? $fontstyle : 'strong';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text : '';
$image = isset($image) ? $image:'Img/teaser-magnify-house.jpg';
$image_position = isset($image_position) ? $image_position : '';
$link = isset($link) ? $link : 'Vorteile entdecken';
?>

<div class="row teaser-image-text <?php echo $image_position ?>">
    <div class="col-md-6 image-teaser  ">
        <figure class="circle-shape blue">
            <img src=" <?php echo $image; ?>" alt="teaser-magnify-house">
        </figure>
    </div>
    <div class="col-md-6 text-teaser">
        <?php if( !empty( $headline ) ): ?>
        <div class="headline">
            <h2 class=" <?php echo $fontstyle ?> "><?php echo $headline; ?></h2>    
        </div>
        <?php endif; ?>
        <?php if( !empty( $subline ) ): ?>
        <div class="subline ">
            <h4><?php echo $subline; ?></h4>
        </div>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
        <div class="text">
            <p class="big"><?php echo $text; ?></p>
        </div>
        <?php endif; ?>
        <?php if( !empty( $link ) ): ?>
        <div class="link">
            <a class="button-link" href="#"><?php echo  $link;?></a>
        </div>
        <?php endif; ?>
    </div>

</div>