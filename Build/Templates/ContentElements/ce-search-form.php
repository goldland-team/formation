<?php
$class = isset($class) ? $class : '';
$placeholder = isset($placeholder) ? $placeholder:'';
$btn = isset($btn) ? $btn:'';
?>

<form method="get" action="">
    <div class="ce-search-form">
    <div class="container">
    <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class=" search-form">
                    <input type="search" placeholder="<?php echo $placeholder;?>">
                    <button type="submit"> <?php echo $btn; ?></button>
                </div>
            </div>
        </div>
    </div>
        
    </div>
</form>