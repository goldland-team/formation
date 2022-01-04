<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline:'';
$subtitle = isset($subtitle) ? $subtitle:'';
$text = isset($text) ? $text:'';
    $image = isset($image) ? $image:'';
$link = isset($link) ? $link : '';
?>
<div class="ce-top-issues">
    <div class="container">
        <div class="row top-issues-items">
            <?php foreach ($items as $item) { ?>
            <div class="col-12  col-md-6 col-lg-4 ">
                <div  class="top-issue-item">
                    <?php if( !empty( $item['image'] ) ): ?>
                        <figure class="light-blue-shadow">
                            <img src="<?php echo $item['image']; ?>" alt="top themen">
                        </figure>
                    <?php endif; ?>
                    <?php if( !empty( $item['headline'] ) ): ?>
                        <div class="headline">
                            <?php echo $item['headline']; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( !empty( $item['subtitle'] ) ): ?>
                        <p class="subtitle">
                            <?php echo $item['subtitle']; ?>
                        </p>
                    <?php endif; ?>
                    <?php if( !empty( $item['text'] ) ): ?>
                        <p>
                            <?php echo $item['text']; ?>
                        </p>
                    <?php endif; ?>
                    <?php if( !empty( $item['link'] ) ): ?>
                        <a href="#" >
                            <?php echo $item['link']; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn">
                    <a href="#">Alle anzeigen</a>
                </div>
            </div>
        </div>
    </div>
</div>



