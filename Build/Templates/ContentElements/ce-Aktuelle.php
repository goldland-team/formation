<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$Date = isset($Date) ? $Date : '';
$type = isset($type) ? $type : '';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text : '';
$link = isset($link) ? $link : '';
?>
<div class="ce-aktuelle">
    <div class="container">
        <div class="row table-wrapper ">
            <?php foreach ($items as $item) { ?>
                <div class="col-12 col-md-6 col-lg-4 item">
                    <div class="grid-item">
                        <div class="caption">
                            <?php if (!empty($item['Date'])): ?>
                                <p class="news-card-date"><?php echo $item['Date']; ?></p>
                            <?php endif; ?>
                            <?php if (!empty($item['type'])): ?>
                                <p class="news-category-badge"><?php echo $item['type']; ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <?php if (!empty($item['headline'])): ?>
                                     <p class="bigger">
                                        <a href="#"> <span itemprop="headline"><?php echo $item['headline']; ?></span></a>
                                     </p>
                            <?php endif; ?>
                            <?php if (!empty($item['text'])): ?>
                                    <p class="secondary">
                                        <?php echo $item['text']; ?>
                                    </p>
                            <?php endif; ?>
                            <?php if (!empty($item['link'])): ?>
                                    <a href="#">
                                        <?php echo $item['link']; ?>
                                    </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn">
                        <button>Alle anzeigen</button>
                </div>
            </div>
        </div>
</div>