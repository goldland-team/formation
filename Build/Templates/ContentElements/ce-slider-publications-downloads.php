<?php
$headline = isset($headline) ? $headline : '';
$button = isset($button) ? $button : '';
$items = isset($items)?$items:[];
?>

<div class="ce-slider-publications-downloads">
    <div class="row header justify-content-end">
        <?php if(!empty($headline)): ?>
        <div class="headline col-lg-4">
            <h2><?php echo $headline; ?></h2>
        </div>
        <?php endif ?>
        <?php if(!empty($button)): ?>
        <div class="button col-lg-4">
            <a class="button-link" href="#"><?php echo $button; ?></a>
        </div>
        <?php endif ?>
    </div>
    <div class="row under-header">
        <div class="slider col-md-12">
            <?php foreach ($items as $item) { ?>
            <div class="slider-elements">
                <?php if(!empty($item['image'])): ?>
                <div class="image">
                    <figure>
                        <img src="<?php echo $item["image"]; ?>" alt="image-event-content" ?>
                    </figure>
                </div>
                <?php endif ?>
                <div class="text">
                    <?php if(!empty($item['headline'])): ?>
                    <div class="headline">
                        <?php echo $item["headline"]; ?>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($item['link'])): ?>
                    <div class="link">
                        <a class="small active" href="#"><?php echo $item["link"]; ?></a>
                    </div>
                    <?php endif ?>
                </div>

            </div>
            <?php } ?>
        </div>
    </div>


</div>

<div class="ce-interner-bereich">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10">
                <div class="headline pl-19 pt-md-50 pb-md-30">
                    <h2>Aktuelle Abonnements</h2>
                </div>
                <div class="accordion-element mb-10 py-30 pl-30">
                    <div class="title d-flex col-md-12">
                        <h4>VDIVnewsletter</h4>
                        <button class=" arrow-collapse col-md-1" data-toggle="collapse" data-target="#collapse2"
                            aria-expanded="false"></button>
                    </div>
                    <div class="collapse " id="collapse2">
                        <div class="content-collapse">

                            <div class=" content ">
                                <div class=" left-text col-md-6">
                                    <p class="primary mb-12">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi
                                        lacus
                                        faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero.
                                        Gravida
                                        pharetra
                                        congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus
                                        condimentum
                                        dictumst
                                        fringilla os, dictum porta lacinia cursus sem nullam sagittis interdum
                                        dignissim,
                                        senectus
                                        ullam.
                                    </p>
                                </div>
                                <div class="right-text col-md-5 ">
                                    <p class="primary mb-0">
                                        E-Mail:
                                    </p>
                                    <p class="primary mb-18">
                                        maximusterfrau@goldland-media.com
                                    </p>
                                    <button class="outline">
                                        Abbestellen
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
                <div class="accordion-element mb-10 py-30 pl-30">
                    <div class="title d-flex col-md-12">
                        <h4>VDIVnewsletter</h4>
                        <button class=" arrow-collapse col-md-1" data-toggle="collapse" data-target="#collapse3"
                            aria-expanded="false"></button>
                    </div>
                    <div class="collapse " id="collapse3">
                        <div class="content-collapse">

                            <div class=" content ">
                                <div class=" left-text col-md-6">
                                    <p class="primary mb-12">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi
                                        lacus
                                        faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero.
                                        Gravida
                                        pharetra
                                        congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus
                                        condimentum
                                        dictumst
                                        fringilla os, dictum porta lacinia cursus sem nullam sagittis interdum
                                        dignissim,
                                        senectus
                                        ullam.
                                    </p>
                                </div>
                                <div class="right-text col-md-5 ">
                                    <p class="primary mb-0">
                                        E-Mail:
                                    </p>
                                    <p class="primary mb-18">
                                        maximusterfrau@goldland-media.com
                                    </p>
                                    <button class="outline">
                                        Abbestellen
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
               



            </div>
        </div>

    </div>
</div>