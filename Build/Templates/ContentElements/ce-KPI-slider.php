<?php
$headline = isset($headline) ? $headline : '';
$button = isset($button) ? $button : '';
$items = isset($items)?$items:[];
?>

<div class="container-xl">
    <div class="ce-kpi-slider">
        <?php if(!empty($headline)): ?>
            <div class="offset-lg-4 col-lg-4">
               <div class="headline">
               <h2><?php echo $headline; ?></h2>
               </div>
            </div>
        <?php endif ?>
        <div class="fact-slider">
            <?php foreach ($items as $item) { ?>
            <?php ce('KPI',[
                 'class' => 'slider-element',
                 'image' => 'Img/capture-facts.PNG',
                 'number' => '3000',
                 'text' => 'Bewirtschaftete Wohn- und Nutzfläche',
                 'value' =>'Mio qm',                
                        ]); ?>
            <?php } ?>
        </div>
        <?php if( !empty( $button ) ): ?>
            <div class="link ">
                <div class="offset-lg-10 col-lg-2 ">
                    <a class="button-link" href="#" ><?php echo  $button;?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>