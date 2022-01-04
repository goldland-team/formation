<?php
$items = isset($items) ? $items : [];
?>

<div class="ce-publication-list" data-max-crop="250">
    <div class="container">
        <?php foreach ($items as $item) { ?>
            <div class="publication-item  ">
                <div class="image">
                    <figure>
                        <img src="<?php echo $item["image"]; ?>" alt="image-event-content">
                    </figure>
                </div>
                <div class="info col-md-8">
                    <h4 class="data-item-title">
                        <?php echo $item["title"]; ?>
                    </h4>

                    <div class="content" data-max-crop="250">
                        <p class="data-item-description">
                            <?php echo $item["description"]; ?>
                        </p>
                        <div class="read-more">
                            <a  class="underlined btn-more"  href="#" title="read more">mehr anzeigen</a>
                            <a  class="underlined btn-less" href="#" title="read less">Lese weniger</a>
                        </div>
                    </div>

                    <div class="btn">
                        <button class="outline">In den Warenkorb</button>
                    </div>
                </div>
            </div>
        <?php } ?>
     </div>
</div>
