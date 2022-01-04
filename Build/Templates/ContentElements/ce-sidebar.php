<?php
$class = isset($class) ? $class : '';
$items = isset($items) ? $items : [];
$posts = isset($posts) ? $posts : [];
$notify = isset($notify) ? $notify : [];
$headline = isset($headline) ? $headline : '';
$autor = isset($autor) ? $autor : '';
$subline = isset($subline) ? $subline : '';
$subtitle = isset($subtitle) ? $subtitle : '';
$text = isset($text) ? $text : '';
$btn = isset($btn) ? $btn : '';
$btnTop = isset($btnTop) ? $btnTop : '';
$image = isset($image) ? $image:'';
$icon = isset($icon) ? $icon:'';
$name = isset($name) ? $name:'';
$position = isset($position) ? $position:'';
$link = isset($link) ? $link:'';
$linkTxt = isset($linkTxt) ? $linkTxt:'';
?>
<div class="ce-sidebar">
    <div class="sidebar-items">
        <!--            regular post -->
        <?php foreach ($posts as $item) { ?>
        <div class="post-item">
            <div class="<?php if( !empty( $item['class'] ) ): echo $item['class']; endif;?>">
                <?php if (!empty($item['btnTop'])): ?>
                <a href="#" class="button-link">
                    <?php echo $item['btnTop']; ?>
                </a>
                <?php endif; ?>
                <?php if( !empty( $item['autor'] ) ): ?>
                <p class="regular-big"><?php echo $item['autor']; ?></p>
                <?php endif; ?>
                <div class="download-item">
                    <?php if( !empty( $item['image'] ) ): ?>
                    <figure>
                        <img src="<?php echo $item['image']; ?>" alt="icon download">
                    </figure>
                    <?php endif; ?>
                    <div class="contact-info">
                        <?php if (!empty($item['name'])): ?>
                        <p class="medium">
                            <?php echo $item['name']; ?>
                        </p>
                        <?php endif; ?>
                        <?php if (!empty($item['position'])): ?>
                        <p class="small">
                            <?php echo $item['position']; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div class="info">
                        <?php if( !empty( $item['headline'] ) ): ?>
                        <p class="regular-big"><?php echo $item['headline']; ?></p>
                        <?php endif; ?>
                        <?php if( !empty( $item['subline'] ) ): ?>
                        <p class="secondary"><?php echo $item['subline']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if( !empty( $item['subtitle'] ) ): ?>
                <p><?php echo $item['subtitle']; ?></p>
                <?php endif; ?>
                <div class="text">
                    <?php if (!empty($item['text'])): ?>
                    <p>
                        <?php echo nl2br($item['text']); ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($item['linkTxt'])): ?>
                    <a href="#" class="underlined">
                        <?php echo nl2br($item['linkTxt']); ?>
                    </a>
                    <?php endif; ?>

                </div>
                <?php if (!empty($item['link'])): ?>
                <a class="underlined-under" href="#">
                    <?php echo nl2br($item['link']); ?>
                </a>
                <?php endif; ?>
                <?php if (!empty($item['btn'])): ?>
                <a href="#" class="outline">
                    <?php echo $item['btn']; ?>
                </a>
                <?php endif; ?>
            </div>
            <!-- pop up a notification  element -->
            <div class="pop-up">
                <?php foreach ($notify as $val) { ?>
                <div class="notification">
                    <span></span>
                    <?php if (!empty($val['headline'])): ?>
                    <p class="regular-big ">
                        <?php echo $val['headline']; ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($val['text'])): ?>
                    <div class="text">
                        <p class="small">
                            <?php echo $val['text']; ?>
                        </div>
                    <?php endif; ?>
                    <a class="close-btn">
                        <figure>
                            <svg viewPort="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1" y1="11" x2="11" y2="1" stroke="white" stroke-width="1" />
                                <line x1="1" y1="1" x2="11" y2="11" stroke="white" stroke-width="1" />
                            </svg>
                        </figure>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>