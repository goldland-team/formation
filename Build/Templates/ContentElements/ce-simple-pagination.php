<?php
$hide_number_in_mobile = isset($hide_number_in_mobile)?$hide_number_in_mobile:false;

?>


<div class="container mt-20">
    <div class="row vdi-suche-wrapper">
        <div class="col-md-3 offset-md-5 vdi-suche-pagination pb-md-20 align-items-center  d-flex justify-content-center">
            <a href="#" class="vdi-number-text active">1</a>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">2</a>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">3</a>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">4</a>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">5</a>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">6</a>
            <div class=" pagination-seperator  "></div>
            <span class="vdi-number-text">...</span>
            <div class=" pagination-seperator  "></div>
            <a href="#" class="vdi-number-text">11</a>
        </div>
        <div class="offset-md-2 col-md-2 pb-md-20  align-items-center
        justify-content-center vdi-suche-total-items vdi-suche-pagination <?php if($hide_number_in_mobile): echo("d-none d-md-flex"); else: echo("d-flex"); endif?>">
            <div class="tiny-title-gray">Ergebnisse <span class="vdi-number-text blue-color ml-10">32</span> </div>
        </div>
    </div>
</div>
