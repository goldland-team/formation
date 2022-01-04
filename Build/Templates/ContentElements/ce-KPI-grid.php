<div class="container ce-kpi-grid">
    <div class="header">
    <?php ce('header-centered',[
        'headline' => 'Überschrift der Hierarchie 2',
        'subline' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus 
        curae porttitor morbi, pharetra orci iaculis cubilia metus libero.',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit, dignissim arcu facilisi lacus faucibus curae porttitor morbi, pharetra orci iaculis cubilia metus libero. Gravida pharetra congue malesuada sed eu accumsan nunc elementum nibh per ut, ridiculus condimentum dictumst fringilla orci iaculis molestie turpis tellus cras posuere, lacinia ultricies aenean magnis fames facilisis volutpat dictum potenti facilisi. Taciti auctor ligula vitae sollicitudin mollis at aenean lectus, dictum porta lacinia cursus sem nullam sagittis interdum dignissim, senectus ullamcorper aptent placerat neque in montes.'
    ]); ?>
    </div>
    <div class="row">
        <div class="fact-grid offset-md-1 col-md-10">
            <div class="row row-element">
                <?php foreach ($items as $item) { ?>
                    <div class="col-lg-4 col-md-6 element">
                    <?php ce('KPI',[
                        'class' => 'grid-element',
                        'image' => 'Img/capture-facts.PNG',
                        'number' => '3000',
                        'text' => 'zählen zu unseren 
                        Mitgliedern',
                        'value' =>'Unternehmen',
            ]); ?>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
    
</div>