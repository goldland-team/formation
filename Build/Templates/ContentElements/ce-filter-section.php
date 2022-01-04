<?php
$class = isset($class) ? $class : '';
$filter1 = isset($filter1) ? $filter1:'Referent';
$filter2 = isset($filter2) ? $filter2:'';
$filter3 = isset($filter3) ? $filter3:'';
$filter4 = isset($filter4) ? $filter4:'';
$filter5 = isset($filter5) ? $filter5:'';
$filter_date_von = isset($filter_date_von) ? $filter_date_von:'';
$filter_date_bis = isset($filter_date_bis) ? $filter_date_bis:'';
$link_desk = isset($link_desk) ? $link_desk:'';
$link_mob1 = isset($link_mob1) ? $link_mob1:'';
$link_mob2 = isset($link_mob2) ? $link_mob2:'';
?>
<div class="filter-section">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="filter-reset">
                    <a class="underlined desktop " href="#"> <?php echo $link_desk ;?> </a>
                    <a data-toggle="collapse" class="underlined mobile  filter-close" href="#collapseSection">
                        <?php echo $link_mob1 ;?> </a>
                    <div class="right">
                        <a class="underlined mobile  reset-btn " href="#"> <?php echo $link_mob2 ;?> </a>
                        <a data-toggle="collapse" class=" mobile  filter-arrow" href="#collapseSection">
                        </a>
                    </div>

                </div>
                <div class="filters collapse show " id="collapseSection">
                    <select class="special-select" placeholder="<?php echo $filter1;?>" name="<?php echo $filter1;?>"
                        id="">
                        <option value="1" class="placeholder"><?php echo $filter1;?></option>
                        <option value="2">option1</option>
                        <option value="3">option2</option>
                    </select>
                    <select class="special-select" placeholder="<?php echo $filter2;?> " name="<?php echo $filter2;?>"
                        id="">
                        <option value="1" class="placeholder"><?php echo $filter2;?></option>
                        <option value="2">option1</option>
                        <option value="3">option2</option>
                    </select>
                    <select class="special-select" placeholder="<?php echo $filter3;?>" name="<?php echo $filter3;?>"
                        id="">
                        <option value="1" class="placeholder"><?php echo $filter3;?></option>
                        <option value="2">option1</option>
                        <option value="3">option2</option>
                    </select>
                    <select class="special-select" placeholder="<?php echo $filter4;?>" name="<?php echo $filter4;?>"
                        id="">
                        <option value="1" class="placeholder"><?php echo $filter4;?></option>
                        <option value="2">option1</option>
                        <option value="3">option2</option>
                    </select>

                    <select class="special-select" placeholder="<?php echo $filter5;?>" name="<?php echo $filter5;?>"
                        id="">
                        <option value="1" class="placeholder"><?php echo $filter5;?></option>
                        <option value="2">option1</option>
                        <option value="3">option2</option>
                    </select>
                    <div class="selectors">
                        <div class=" special-input-wrapper datepicker-filter">
                            <input class='datepicker-filter-input' type="text" id="datepicker-presse-filter-von"
                                placeholder="<?php echo $filter_date_von;?> "></input>
                        </div>
                        <div class="special-input-wrapper datepicker-filter">
                            <input class='datepicker-filter-input' type="text" id="datepicker-presse-filter-bis"
                                placeholder="<?php echo $filter_date_bis;?> "></input>
                        </div>
                    </div>

                    <div class="button-mobile">
                        <button class="outline">Filter anwenden</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>