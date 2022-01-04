<?php
//------------------------------------------------------------------------------
include 'Globals/head.php';
//------------------------------ START CONTENT ---------------------------------
?>
<div class="container-fluid style-guide">
    <div class="row my-20">
        <div class="col-2 position-fixed">
            <img class="style-logo" src="Img/logo/Logo_TYPO3.png" />
        </div>
        <div class="col-10 offset-2">
            <h1 style="text-align: center; color:#000; font-size: 45px; text-shadow: 3px 1px 2px #ff8700;">TYPO3 GOLDLAND - FORMATION</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-2 position-fixed mt-40">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                <ul class="first">
                    <li>
                        <a class="nav-link active" id="v-pills-introduction-tab" data-toggle="pill" href="#v-pills-introduction" role="tab" aria-controls="v-pills-introduction" aria-selected="true">Introduction</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-list-tab" data-toggle="collapse" data-target="#demo" role="tab" aria-controls="v-pills-list" aria-selected="false">Custom CE</a>
                        <ul class="second collapsing" id="demo">
                            <li><a class="nav-link nav-link-list" id="v-pills-simpleCE-tab" data-toggle="pill" href="#v-pills-simpleCE" role="tab" aria-controls="v-pills-simpleCE" aria-selected="false">Simple CE</a></li>
                            <li><a class="nav-link nav-link-list" id="v-pills-inlineCE-tab" data-toggle="pill" href="#v-pills-inlineCE" role="tab" aria-controls="v-pills-inlineCE" aria-selected="false">In Line CE</a></li>
                            <li> <a class="nav-link nav-link-list" id="v-pills-registerIcon-tab" data-toggle="pill" href="#v-pills-registerIcon" role="tab" aria-controls="v-pills-registerIcon" aria-selected="false">Register Icon</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-10 offset-2">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show" id="v-pills-simpleCE" role="tabpanel" aria-labelledby="v-pills-simpleCE-tab">
                    <?php include 'Partials/customCE/simpleCE.php'; ?>
                </div>

                <div class="tab-pane fade show" id="v-pills-inlineCE" role="tabpanel" aria-labelledby="v-pills-inlineCE-tab">
                    <?php include 'Partials/customCE/inlineCE.php'; ?>
                </div>

                <div class="tab-pane fade show " id="v-pills-registerIcon" role="tabpanel" aria-labelledby="v-pills-registerIcon-tab">
                    <?php include 'Partials/customCE/registerIcon.php'; ?>
                </div>

                <div class="tab-pane fade show active" id="v-pills-introduction" role="tabpanel" aria-labelledby="v-pills-introduction-tab">
                    <?php include 'Partials/introduction.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php
//----------------------------- END CONTENT ------------------------------------
include 'Globals/foot.php';
//------------------------------------------------------------------------------

?>