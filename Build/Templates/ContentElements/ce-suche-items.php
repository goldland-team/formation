<?php
$items = isset($items)?$items:[];


?>

<div class="suche-items-wrapper">
    <div class="container">
        <div class="row ">
            <div class="col-md-8 offset-md-2 mt-md-67 mt-37 suche-items border-bottom">
                <?php foreach ($items as $item) { ?>
                    <div class="vdi-suche-item pb-20 pt-15">
                        <div class="tiny-tag gray text-uppercase mb-5"><?php echo $item['tag'] ; ?></div>
                        <div class="vdi-search-headline mb-5"><?php echo $item['headline'] ; ?></div>
                        <p class="mb-0"><?php echo $item['text'] ; ?></p>
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
