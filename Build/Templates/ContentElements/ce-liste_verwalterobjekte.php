<?php
$items = isset($items) ? $items : [];
?>
<div class="liste-verwalterobjekte mt-md-30 ">
    <div class="container">
        <div class="row">
            <table class=" col-12 offset-md-1 col-md-10 mb-md-10 collapse-table only-desk" class="panel-group" id="accordion">
                <tr class="arrow">
                    <th class="col-1 col-md-1">Einheiten</th>
                    <th class="col-1 col-xls-1 col-md-2">Objekt-PLZ</th>
                    <th class="col-1 col-xls-1  col-md-2">Objekt-Ort</th>
                    <th class="col-1 col-md-6">Bundesland</th>
                    <th class="col-1 col-md-1">Beginn</th>
                    <th class="col-1 col-md-2 entry6">Erstellungsdatum</th>
                    <th class="arrow"></th>
                </tr>

                <?php 
                $i = 0;
                foreach ($items as $item) { 
                    $i= $i + 1;?>
                <tr data-toggle="collapse" data-target="#collapse<?php echo $i ?>" class="action" data-parent="#accordion" href="#collapse<?php echo $i ?>">
                    <?php if(!empty($item['entry1'])): ?>
                    <td class="col-md-1"><?php echo $item['entry1'];?> </td>
                    <?php endif ?>
                    <?php if(!empty($item['entry2'])): ?>
                    <td class="col-md-1"><?php echo $item['entry2'];?> </td>
                    <?php endif ?>
                    <?php if(!empty($item['entry3'])): ?>
                    <td class="col-md-1"><?php echo $item['entry3'];?> </td>
                    <?php endif ?>
                    <?php if(!empty($item['entry4'])): ?>
                    <td class="col-md-6"><?php echo $item['entry4'];?> </td>
                    <?php endif ?>
                    <?php if(!empty($item['entry5'])): ?>
                    <td class="col-md-1 "><?php echo $item['entry5'];?> </td>
                    <?php endif ?>
                    <?php if(!empty($item['entry6'])): ?>
                    <td class="col-md-2 entry6"><?php echo $item['entry6'];?> </td>
                    <?php endif ?>
                    <td><button class="arrow"></button></td>
                </tr>
                <tr id="collapse<?php echo $i ?>" class=" info-container collapse">
                    <td class="infos">
                        <div class="personal-infos mb-20">
                            <p class="primary bold mb-5 pl-9">
                                Persönliche Angaben
                            </p>
                            <table class="  col-md-12">
                                <tr class="border-0">
                                    <td class="col-md-6">
                                        <p class="primary mb-0">
                                            Name:<br>
                                            Tel.:<br>
                                            E-Mail:<br>
                                        </p>
                                    </td>
                                    <td class="col-md-6">
                                        <p class="primary mb-0">
                                            Herr Andreas Kuhn<br>
                                            +49 173 9940438<br>
                                            Andreas_Kuuuhn@gmail.de<br>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="property-infos mb-20">
                            <p class="primary bold mb-5 pl-9">
                                Angaben zum Objekt
                            </p>
                            <table class="  col-md-12">
                                <tr class="border-0">
                                    <td class="col-md-6">
                                        <p class="primary mb-3">Verwaltungsart:</p>
                                        <p class="primary mb-3">Anzahl d. Einheiten:</p>
                                        <p class="primary mb-3">Überwiegende Eigentümerstruktur: </p>
                                        <p class="primary mb-3">Objekt-PLZ:</p>
                                        <p class="primary mb-3">Objektort:</p>
                                        <p class="primary mb-3">Bundesland</p>
                                        <p class="primary mb-3">Gewünschter Verwaltungsbeginn:</p>

                                    </td>
                                    <td class="col-md-6">
                                        <p class="primary mb-3">Wohneigentumsverwaltung</p>
                                        <p class="primary mb-3">5</p>
                                        <p class="primary mb-3">Selbstnutzer</p>
                                        <p class="primary mb-3">30175</p>
                                        <p class="primary mb-3">Hannover</p>
                                        <p class="primary mb-3">Niedersachsen</p>
                                        <p class="primary mb-3">1.1.2022</p>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="description mb-20">
                            <p class="primary bold mb-5 pl-9">
                                Objektbezeichnung
                            </p>
                            <p class="primary mb-3 col-md-6">WEG Gellertstraße 26, 30175 Hannover</p>
                        </div>
                        <div class="description mb-20">
                            <p class="primary bold mb-5 pl-9">
                                Besonderheiten des Objekts
                            </p>
                            <p class="primary mb-3 col-md-6">Denkmalschutz</p>
                        </div>
                        <div class="description">
                            <p class="primary bold mb-5 pl-9">
                                Besonderheiten des Objekts
                            </p>
                            <p class="primary mb-3 col-md-6">-</p>
                        </div>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <table class="only-mobile mx-15">
                <?php
                $i = 0;
                foreach ($items as $item) {
                $i= $i + 1;?>
                    <tr data-toggle="collapse" data-target="#collapse<?php echo $i ?>" class="action" data-parent="#accordion" href="#collapse<?php echo $i ?>">
                        <td class="title">
                            <p class="small ">Einheiten</p>
                            <p class="small">Objekt-PLZ</p>
                            <p class="small" >Objekt-Ort</p>
                            <p class="small">Bundesland</p>
                            <p class="small">Beginn</p>
                            <p class="small">Erstellungsdatum</p>
                        </td>
                        <td >
                            <?php if(!empty($item['entry1'])): ?>
                                <p  class="small"><?php echo $item['entry1'];?> </p>
                            <?php endif ?>
                            <?php if(!empty($item['entry2'])): ?>
                                <p  class="small"><?php echo $item['entry2'];?> </p>
                            <?php endif ?>
                            <?php if(!empty($item['entry3'])): ?>
                                <p  class="small"><?php echo $item['entry3'];?> </p>
                            <?php endif ?>
                            <?php if(!empty($item['entry4'])): ?>
                                <p  class="small"><?php echo $item['entry4'];?> </p>
                            <?php endif ?>
                            <?php if(!empty($item['entry5'])): ?>
                                <p  class="small"><?php echo $item['entry5'];?> </p>
                            <?php endif ?>
                            <?php if(!empty($item['entry6'])): ?>
                                <p  class="small"><?php echo $item['entry6'];?> </p>
                            <?php endif ?>
                        </td>
                        <td class="btn-arrow">
                            <button class="arrow"></button>
                        </td>
                    </tr>
                    <tr id="collapse<?php echo $i ?>" class=" info-container collapse">
                        <td class="infos">
                            <div class="personal-infos mb-20">
                                <p class="primary bold mb-5">
                                    Persönliche Angaben
                                </p>
                                <table class=" sub-table ">
                                    <tr class="border-0 ">
                                        <td class="col-6 title">
                                            <p class="primary mb-0">Name:</p>
                                            <p class="primary mb-0"> Tel.:</p>
                                            <p class="primary mb-0">  E-Mail:</p>
                                        </td>
                                        <td class="col-6">
                                            <p class="primary mb-0"> Herr Andreas Kuhn</p>
                                            <p class="primary mb-0"> +49 173 9940438</p>
                                            <p class="primary mb-0">Andreas_Kuuuhn@gmail.de</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="property-infos mb-20">
                                <p class="primary bold mb-5 ">
                                    Angaben zum Objekt
                                </p>
                                <table class=" sub-table ">
                                    <tr class="border-0">
                                        <td class="col-6">
                                            <p class="primary mb-3">Verwaltungsart:</p>
                                            <p class="primary mb-3">Anzahl d. Einheiten:</p>
                                            <p class="primary mb-3">Überwiegende Eigentümerstruktur: </p>
                                            <p class="primary mb-3">Objekt-PLZ:</p>
                                            <p class="primary mb-3">Objektort:</p>
                                            <p class="primary mb-3">Bundesland</p>
                                            <p class="primary mb-3">Gewünschter Verwaltungsbeginn:</p>
                                        </td>
                                        <td class="col-6">
                                            <p class="primary mb-3">Wohneigentumsverwaltung</p>
                                            <p class="primary mb-3">5</p>
                                            <p class="primary mb-3">Selbstnutzer</p>
                                            <p class="primary mb-3">30175</p>
                                            <p class="primary mb-3">Hannover</p>
                                            <p class="primary mb-3">Niedersachsen</p>
                                            <p class="primary mb-3">1.1.2022</p>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="description mb-20">
                                <p class="primary bold mb-5 px-0 ">
                                    Objektbezeichnung
                                </p>
                                <p class="primary mb-3 col-12 px-0 ">WEG Gellertstraße 26, 30175 Hannover</p>
                            </div>
                            <div class="description mb-20">
                                <p class="primary bold mb-5 px-0 ">
                                    Besonderheiten des Objekts
                                </p>
                                <p class="primary mb-3 col-12 px-0 ">Denkmalschutz</p>
                            </div>
                            <div class="description">
                                <p class="primary bold mb-5 px-0 ">
                                    Besonderheiten des Objekts
                                </p>
                                <p class="primary mb-3 col-12 px-0 ">-</p>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="page-navigation  w-100">
                <ul class=" page-navigation">
                    <li class="previous">
                        <a href="#">
                            <div class="left"></div>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li class="current">2</li>
                    <li><a href="#">3</a> </li>
                    <li> - </li>
                    <li class="last"><a href="#">29</a></li>
                    <li class="last next"><a href="#">
                            <div class="right"></div>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</div>