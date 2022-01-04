<?php
$number = isset($number) ? $number : '';
$price = isset($price) ? $price : '';
$btnText = isset($btnText) ? $btnText : '';

$items = isset($items) ? $items : [];
$sections = isset($sections) ? $sections : [];
$labels = isset($labels) ? $labels : [];
$checkBoxes = isset($checkBoxes) ? $checkBoxes : '';
$checkBox = isset($checkBox) ? $checkBox : '';
$text = isset($text) ? $text : '';
$headline = isset($headline) ? $headline : '';
$btnUp = isset($btnUp) ? $btnUp : '';
$btn = isset($btn) ? $btn : '';

?>

<div class="step-by-step">
  <div class="container-xl">
      <div class="stepwizard col-md-offset-3">
          <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                  <a href="#step-1" type="button" class="btn btn-primary btn-circle">SCHRITT 1</a>
                  </div>
              <div class="stepwizard-step">
                  <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">SCHRITT 2</a>
              </div>
              <div class="stepwizard-step">
                  <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">SCHRITT 3</a>
              </div>
          </div>
      </div>
      <div class="korb-header">
            <div class="title">
                <h1>Warenkorb</h1>
            </div>
            <div class="sub-title">
                <p class="big-regular">Pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada.</p>
            </div>
        </div>
      <form role="form" action="" method="post">
      <div class="row setup-content" id="step-1">
        <div class="col-xs-6 col-md-offset-3">
          <div class="col-md-12">
            <h3> Step 1</h3>
            <div class="form-group">
              <label class="control-label">First Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label class="control-label">Last Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label class="control-label">Address</label>
              <textarea required="required" class="form-control" placeholder="Enter your address"></textarea>
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
          </div>
        </div>
      </div>
      <div class="row setup-content" id="step-2">
          <div class="col-md-12 section-step-2">
              <h4  class="headline">Auswirkung der COVID-19-Pandemie auf die Immobilienbranche</h4>
              <form class="needs-validation" novalidate>
                  <div class="section ">
                      <div class="head">
                              <p class="bigger"> Teilnehmer 1</p>
                              <a class="outline" href="#">Entfernen</a>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="Vorname (Pflichtfeld)">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="Nachname" >
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="E-Mail (Pflichtfeld)" >
                              </div>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="section">
                      <div class="row">
                          <div class="col-md-4">
                              <select>
                                  <option value="v1">select</option>
                                  <option value="v2">Option 1</option>
                                  <option value="v3">Option 2</option>
                                  <option value="v4">Option 3</option>
                                  <option value="v5">Option 4</option>
                              </select>
                          </div>
                          <div class="col-md-6 btn">
                              <a class="button-link" href="#">Hinzufügen</a>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="section ">
                      <div class="row headline">
                          <div class="col-md-6">
                              <p class="bigger"> Teilnehmer 2</p>
                          </div>
                          <div class="col-md-6 ">
                              <a class="outline" href="#">Entfernen</a>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="Vorname (Pflichtfeld)">
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="Nachname" >
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                              <div class="special-input-wrapper">
                                  <input class="special-input" type="text" placeholder="E-Mail (Pflichtfeld)" >
                              </div>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="section">
                      <div class="row">
                          <div class="col-md-4">
                              <select>
                                  <option value="v1">select</option>
                                  <option value="v2">Option 1</option>
                                  <option value="v3">Option 2</option>
                                  <option value="v4">Option 3</option>
                                  <option value="v5">Option 4</option>
                              </select>
                          </div>
                          <div class="col-md-6 btn">
                              <a class="button-link" href="#">Hinzufügen</a>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="cd-input-wrapper  col-lg-6  col-md-12   px-0">
                      <input type="checkbox" id="checkbox1" >
                      <label class="checkbox-label" for="checkbox1">AGB zustimmen</label> <br>
                      <p class=" checkbox-text">
                          Ich erkläre mich damit einverstanden, dass die im Rahmen dieses Formulars erhobenen personenbezogenen Daten gespeichert und an die VDIV-Landesverbände für den Zweck der Kontaktaufnahme
                          sowie eventueller Anschlussfragen weitergeleitet werden. Diese Einwilligung kann jederzeit mit Wirkung für die Zukunft widerrufen werden.
                      </p>
                  </div>
                  <button type="button" class="nextBtn">Speichern und Weiter</button>
              </form>
          </div>
      </div>
      <div class="row setup-content" id="step-3">

          <div class=" col-md-12 section-step-3">
              <form class="needs-validation" novalidate>
                  <div class="section">
                      <h4 class="headline">Auswirkung der COVID-19-Pandemie auf die Immobilienbranche</h4>
                      <div class="col-md-8 px-0 ">
                          <div class="block">
                              <p class="bigger"> Teilnehmer 1</p>
                              <p class="text">Maxi Musterfrau</p>
                              <p class="text">musterfrau@vdiv.de</p>
                          </div>
                          <div class="block">
                              <p class="bigger"> Teilnehmer 2</p>
                              <p class="text">Maxi Musterfrau</p>
                              <p class="text">musterfrau@vdiv.de</p>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="section">
                      <h4  class="headline">Auswirkung der COVID-19-Pandemie auf die Immobilienbranche</h4>
                      <div class="col-md-8 px-0">
                          <div class="block">
                              <p class="bigger"> Teilnehmer 1</p>
                              <p class="text">Maxi Musterfrau</p>
                              <p class="text" >musterfrau@vdiv.de</p>
                          </div>
                          <div class="block">
                              <p class="bigger"> Teilnehmer 2</p>
                              <p class="text" >Maxi Musterfrau</p>
                              <p class="text">musterfrau@vdiv.de</p>
                          </div>
                      </div>
                      <hr class="divider">
                  </div>
                  <div class="cd-input-wrapper col-lg-6  col-md-12   px-0">
                      <input type="checkbox" id="checkbox1">
                      <label class="checkbox-label" for="checkbox1">AGB zustimmen</label> <br>
                      <p class=" checkbox-text">
                          Ich erkläre mich damit einverstanden, dass die im Rahmen dieses Formulars erhobenen personenbezogenen Daten gespeichert und an die VDIV-Landesverbände für den Zweck der Kontaktaufnahme
                          sowie eventueller Anschlussfragen weitergeleitet werden. Diese Einwilligung kann jederzeit mit Wirkung für die Zukunft widerrufen werden.
                      </p>
                  </div>
                  <div class="btn">
                      <button type="button" class="outline prevBtn" >Zurück und bearbeiten</button>
                      <button type="submit">Speichern und Weiter</button>
                  </div>
              </form>
          </div>
      </div>
    </form>
  </div>
  <div class="cart-bar">
    <div class="cart-options">
      <div class="info">
        <?php if(!empty($number)): ?>
          <p><?php echo $number; ?> Artikel</p>
        <?php endif ?>
        <?php if(!empty($price)): ?>
          <p><?php echo $price; ?> EUR</p>
        <?php endif ?>
      </div>
      <?php if(!empty($btnText)): ?>
        <button class="outline"><?php echo $btnText; ?></button>
      <?php endif ?>
    </div>
  </div>
</div>