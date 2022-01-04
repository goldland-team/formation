<?php
$items = isset($items) ? $items : [];
$headline = isset($headline) ? $headline:[];
$subline = isset($subline) ? $subline:[];
$logo = isset($logo) ? $logo : '';
$title = isset($title) ? $title : '';
$sector= isset($sector) ? $sector : '';
$link = isset($link) ? $link : '';
?>
<div class="ce-partners-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-8 partner-headline">
                <div class="headline">
                    <?php if( !empty( $headline ) ): ?>
                        <h2> <?php echo $headline; ?></h2>
                    <?php endif; ?>
                    <?php if( !empty( $subline ) ): ?>
                        <p class="big"> <?php echo $subline; ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="partner-container">
            <div class="row table-wrapper">
                <?php foreach ($items as $item) { ?>
                    <div class="col-6 col-md-6 col-lg-4 item">
                        <div class="grid-item">
                            <?php if( !empty( $item['logo'] ) ): ?>
                            <a class="regular" href="#">
                                <figure >
                                    <img src="<?php echo $item['logo']; ?>" alt="partner">
                                </figure>
                            </a>
                            <?php endif; ?>
                            <div class="description">
                                <?php if (!empty($item['title'])): ?>
                                <div class="title">
                                    <a class="regular" href="#">
                                       <?php echo $item['title']; ?>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <?php if (!empty($item['sector'])): ?>
                                    <div class="sector">
                                        <p class="caption">
                                            <?php echo $item['sector']; ?>
                                        </p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>