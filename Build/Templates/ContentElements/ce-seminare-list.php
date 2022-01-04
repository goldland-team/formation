<?php
$text = isset($text) ? $text : '';
$title = isset($title) ? $title : '';
$items = isset($items)?$items:[];
$link = isset($link) ? $link : '';

$next_date = isset($next_date) ? $next_date : '';
$time = isset($time) ? $time : '';
$place = isset($place) ? $place : '-';
$format = isset($format) ? $format : '';
$places = isset($places) ? $places : '';
$price = isset($price) ? $price : '';
?>

<div class="ce-seminare-list">
    <div class="headline">
        <h1>Seminare</h1>
    </div>
    <div class="subline">
        <p>Mehr wissen. Mehr können. Mehr erreichen.</p>
    </div>
    <form>
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10">
                    <div class="form">
                        <input class="form-control" type="text" placeholder="Suche">
                        <button class="button-search-small">
                            <div class="icon icon-search"></div>
                            <div class="button-placeholder">Suchen</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters ">
            <div class="container" id="accordion">
                <div class="icons">
                    <label class='mobile'>Filter (3)</label>
                    <div class="icons-links">
                        <a class="collapse-trigger" href="#">
                            <span class="icon icon-refresh  my-4"></span>
                        </a>
                        <a data-toggle="collapse" href="#collapseShare" aria-expanded="true"
                            aria-controls="collapseShare" class="collapse-trigger desktop collapsed ">
                            <span class="icon icon-collapse"></span>
                        </a>
                    </div>
                </div>
                <div class=" filters-collapse collapse show " id="collapseShare" data-parent="#accordion">
                    <div class="row">
                        <div class="   offset-md-1 col-md-10">
                            <div class=" filters-options ">
                                <div class="art ">
                                    <label>Art</label>
                                    <select class="form-control jcf-hidden">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="date">
                                    <label>Date</label>
                                    <div class="date-inputs">
                                        <input type="text" class="vdi-datepicker form-control"
                                            placeholder="von" autocomplete="off" id="von">
                                        <input type="text" class="vdi-datepicker form-control"
                                            placeholder="bis" autocomplete="off" id="bis">
                                    </div>
                                </div>
                                <div class="format-price">
                                    <div class="format">
                                        <label>Format</label>
                                        <div class="format-options">
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check1"
                                                    required=""">
                                    <label class=" form-check-label vdi-right-label" for="Check1">
                                                Präsenz
                                                </label>
                                            </div>
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check2"
                                                    required="">
                                                <label class="form-check-label vdi-right-label" for="Check2">
                                                    Hybrid
                                                </label>
                                            </div>
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check3"
                                                    required="">
                                                <label class="form-check-label vdi-right-label" for="Check3">
                                                    Online
                                                </label>
                                            </div>
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check4"
                                                    required="">
                                                <label class="form-check-label vdi-right-label" for="Check4">
                                                    Offline
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price">
                                        <label>Preis</label>
                                        <div class="price-options">
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check5"
                                                    required="">
                                                <label class="form-check-label vdi-right-label" for="Check5">
                                                    Early Bird
                                                </label>
                                            </div>
                                            <div class="checkbox-container pt-5">
                                                <input class="form-check-input" type="checkbox" value="1" id="Check6"
                                                    required=""></span>
                                                <label class="form-check-label vdi-right-label" for="Check6">
                                                    Last Minute
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tags ">
                                <div class="sg-list-wrapper ">
                                    <label class="offset-md-1 col-md-10 ">Seminarthema</label>
                                    <div class=" row">
                                        <div class="tags-options">
                                            <div class="check-element selected mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Management, Führung, Arbeitstechniken</div>
                                            </div>
                                            <div class="check-element mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Automatisierungstechnik</div>
                                            </div>
                                            <div class="check-element mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Einkauf - Vertrieb - Service</div>
                                            </div>
                                            <div class="check-element mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Automatisierungstechnik</div>
                                            </div>
                                            <div class="check-element selected mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Management, Führung, Arbeitstechniken</div>
                                            </div>
                                            <div class="check-element mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Einkauf - Vertrieb - Service</div>
                                            </div>
                                            <div class="check-element selected mb-7">
                                                <div class="icon-state icon"></div>
                                                <div class="check-content">Management, Führung, Arbeitstechniken</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filter-button mt-30 mb-15 mx-10 ">
                        <button>Filter anwenden
                        </button>
                    </div>
                </div>
                <div class="sort mobile ">
                    <div class="icons py-10">
                        <label class='mobile'>Anzeige und Sortierung</label>
                        <div class="icons-links">
                            <a class="collapse-trigger" href="#">
                                <span class="icon icon-refresh  my-4"></span>
                            </a>
                            <a data-toggle="collapse" href="#collapsesort" aria-expanded="true"
                                aria-controls="collapsesort" class="collapse-trigger collapsed seminare-sort-collapse">
                                <span class="icon icon-collapse"></span>
                            </a>

                        </div>
                    </div>
                    <div class=" filters-collapse collapse" id="collapsesort" data-parent="#accordion">
                        <div class="pagination mobile collapse" id="collapsesort">
                            <div class="left">
                                <label for="" class="tiny-title-gray ">Anzeigen</label>
                                <a class="vdi-number-text mr-15 " href="#">10</a>
                                <a class="vdi-number-text mr-15" href="#">30</a>
                                <a class="vdi-number-text mr-15" href="#">50</a>
                                <a class="vdi-number-text mr-15" href="#">ALLE</a>
                            </div>
                            <div class="right">
                                <label for="" class="tiny-title-gray ">Sortierung</label>
                                <select class="form-control jcf-hidden">
                                    <option>Preis aufsteigend</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="link">
                                <button>Einstellungen ändern</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <div class="container">
        <div class=" pagination offset-md-1 col-md-10">
            <div class="left desktop">
                <label for="" class="tiny-title-gray ">Anzeigen</label>
                <a class="vdi-number-text mr-15  " href="#">10</a>
                <a class="vdi-number-text mr-15 " href="#">30</a>
                <a class="vdi-number-text mr-15 " href="#">50</a>
                <a class="vdi-number-text mr-15" href="#">ALLE</a>
            </div>
            <div class="center mobile">
                <a class=" vdi-number-text " href="#">1</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text active  " href="#">2</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">3</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">4</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">5</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">6</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">...</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">35</a>
            </div>
            <div class="right desktop">
                <label for="" class="tiny-title-gray ">Sortierung</label>
                <select class="form-control jcf-hidden">
                    <option>Preis aufsteigend</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>

            </div>
        </div>
    </div>
    <?php foreach ($items as $item) { ?>
    <div class="seminare-elements">
        <div class='element offset-sm-1 col-sm-9 offset-md-2 col-md-8 px-0'>
            <div class="tags">
                <?php foreach ($item['tags'] as $key=>$tag) { ?>
                <?php if(!empty($tag)): ?>
                <?php if($key >= 1):?>
                <div class=" d-none d-md-inline-block vdi-tag">
                    <?php echo $tag['tag'] ; ?>
                </div>
                <?php else: ?>
                <div class="vdi-tag">
                    <?php echo $tag['tag'] ; ?>
                </div>
                <?php endif ?>
                <?php endif ?>
                <?php } ?>
                <?php if(count($item['tags']) > 1 ): ?>
                <a tabindex="0" class=" d-inline-block d-md-none three-dots-button vdi-tag" role="button"
                    data-toggle="popover" data-placement="bottom" data-html="true" data-content="
                    <?php for ($i= 1; $i < count($item['tags']) ; $i++) { echo  $item['tags'][$i]['tag'] ,"<br>";} ?>" >...</a>
                <?php endif ?>
            </div>
            <?php if(!empty($item['title'])): ?>
            <div class="title py-10">
                <div class="vdi-card-content-title">
                    <?php echo $item["title"]; ?>
                </div>
            </div>
            <?php endif ?>
            <?php if(!empty($item['text'])): ?>
            <div class="text">
                <div class="vdi-content-description">
                    <?php echo $item["text"]; ?>
                </div>
            </div>
            <?php endif ?>

            <div class="description">
                <div class="information">
                    <?php if(!empty($item['next_date'])): ?>
                    <div class="tiny-title-gray">Nächster Termin (3)
                        <div class="vdi-content-tiny-text"><?php echo $item['next_date'];?></div>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($item['time'])): ?>
                    <div class="tiny-title-gray">Uhrzeit
                        <div class="vdi-content-tiny-text"><?php echo $item['time'];?></div>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($item['place'])): ?>
                    <div class="tiny-title-gray">Veranstaltungsort
                        <div class="vdi-content-tiny-text"><?php echo $item['place'];?></div>
                    </div>
                    <?php endif ?>
                    <?php if(!empty($item['format'])): ?>
                    <div class="tiny-title-gray">Format
                        <div class="vdi-content-tiny-text"><?php echo $item['format'];?></div>
                    </div>
                    <?php endif ?>

                    <div class="tiny-title-gray">Plätze
                        <div class="state-wrapper  <?php echo $item['places'];?>">
                            <div class="state-bubble"></div>
                        </div>

                    </div>
                    <?php if(!empty($item['price'])): ?>
                    <div class="tiny-title-gray">Preis
                        <div class="vdi-content-tiny-text"><?php echo $item['price'];?></div>
                    </div>
                    <?php endif ?>
                </div>

                <?php if(!empty($item['link'])): ?>
                <div class="link">
                    <a class="button-link orange-bg" href="#"><?php echo $item["link"]; ?></a>
                </div>
                <?php endif ?>
            </div>

        </div>

    </div>
    <?php } ?>
    <div class="container">
        <div class=" pagination d-none d-md-flex bottom offset-md-1 col-md-10">
            <div class="left desktop">
                <label for="" class="tiny-title-gray ">Anzeigen</label>
                <a class="vdi-number-text mr-15  " href="#">10</a>
                <a class="vdi-number-text mr-15 " href="#">30</a>
                <a class="vdi-number-text mr-15 " href="#">50</a>
                <a class="vdi-number-text mr-15" href="#">ALLE</a>
            </div>
            <div class="center mobile">
                <a class=" vdi-number-text " href="#">1</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text active  " href="#">2</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">3</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">4</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">5</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">6</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">...</a>
                <div class=" pagination-seperator  "></div>
                <a class="vdi-number-text " href="#">35</a>
            </div>
            <div class="right desktop">
                <label for="" class="tiny-title-gray ">Sortierung</label>
                <select class="form-control jcf-hidden">
                    <option>Preis aufsteigend</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                </select>

            </div>
        </div>
    </div>
</div>
