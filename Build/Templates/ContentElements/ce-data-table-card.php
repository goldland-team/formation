<?php
$items = isset($items) ? $items : [];
?>


<div class="container">
    <div class="container-data-table">
        <?php foreach ($items as $item) { ?>
            <div class="data-table-card <?php echo $item["class"]; ?>">
                <div class="row no-gutters data-card-wrapper">
                    <div class="col-md-10">
                        <div class="row">
                            <h4 class="data-table-title">
                                <?php echo $item["title"]; ?>
                            </h4>
                            <div class="col-md-11 col-lg-10 col-xl-9   ">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="table-responsive">
                                            <table class="data-card-table">
                                                <tr>
                                                    <td class="small">
                                                        Format
                                                    </td>
                                                    <td class="small">
                                                        <?php echo $item["format"]; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="small">Referent</td>
                                                    <td class="small"><?php echo $item["speaker"]; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="small">Zeit</td>
                                                    <td class="small"><?php echo $item["time"]; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="small">Ort</td>
                                                    <td class="small"><?php echo $item["place"]; ?></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-4 d-none d-md-block">
                                        <div class="table-responsive">
                                            <table class="data-card-table">
                                                <?php foreach ($item["prices"] as $key=>$price) { ?>
                                                    <tr>
                                                        <td class="small">
                                                            Preis <?php echo $key + 1; ?>
                                                        </td>
                                                        <td class="small">
                                                            <?php echo $price; ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-wrapper">
                                    <a href="#" class="outline">Zur Veranstaltung</a>
                                    <a href="#" class="outline d-none d-md-block">In den Warenkorb</a>
                                    <span class="small d-none d-md-block">(Sie müssen eingeloggt sein)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 type-wrapper d-none d-md-block">
                        <?php if (!empty($item['badge'])): ?>
                        <div class="type-badge news-category-badge"><?php echo $item["badge"]; ?></div>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</div>
