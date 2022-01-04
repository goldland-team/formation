<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$headline = isset($headline) ? $headline:[];
$text = isset($text) ? $text:[];
$image = isset($image) ? $image:'';
$name = isset($name) ? $name:'';
$position = isset($position) ? $position:'';
$title = isset($title) ? $title:'';
$adr = isset($adr) ? $adr:'';
$adr1 = isset($adr1) ? $adr1:'';
$tel = isset($tel) ? $tel:'';
$fax = isset($fax) ? $fax:'';
$email = isset($email) ? $email:'';
$web = isset($web) ? $web:'';
?>
<div class="ce-contact">
    <div class="container">
        <div class="header-centered">
            <div class="offset-md-2 col-md-8 ">
                <?php if( !empty( $headline ) ): ?>
                    <div class="headline">
                        <h2> <?php echo $headline; ?></h2>
                    </div>
                <?php endif; ?>
                <?php if( !empty( $text) ): ?>
                    <p class="subline"><?php echo $text; ?></p>
               <?php endif; ?>
            </div>
        </div>
            <div class="row contact-items">
                <?php foreach ($items as $item) { ?>
                    <div class="col-12 col-md-6 col-lg-4 contact-col">
                        <div  class="contact-item">
                            <div class="contact-img">
                                <figure >
                                    <?php if( !empty( $item['image'] ) ): ?>
                                        <img src="<?php echo $item['image']; ?>" alt="contact">
                                    <?php endif; ?>
                                </figure>
                                <div class="name">
                                    <?php if( !empty( $item['name'] ) ): ?>
                                        <p class="medium"><?php echo $item['name']; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="position">
                                    <?php if( !empty( $item['position'] ) ): ?>
                                        <p class="small"><?php echo $item['position']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="description">
                                <div class="title">
                                    <?php if( !empty( $item['title'] ) ): ?>
                                        <p class="secondary"><?php echo $item['title']; ?></p>
                                    <?php endif; ?>
                                </div>
                                <p>
                                    <?php if( !empty( $item['adr'] ) ): ?>
                                        <?php echo $item['adr']; ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    <?php if( !empty( $item['adr1'] ) ): ?>
                                        <?php echo $item['adr1']; ?>
                                    <?php endif; ?>
                                </p>
                                <br>
                                <p>
                                    Tel. : <?php if( !empty( $item['tel'] ) ): ?>
                                        <?php echo $item['tel']; ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    Fax : <?php if( !empty( $item['fax'] ) ): ?>
                                        <?php echo $item['fax']; ?>
                                    <?php endif; ?>
                                </p>
                                <p>
                                    E-mail :
                                    <a href="#">
                                        <?php if( !empty( $item['email'] ) ): ?>
                                            <?php echo $item['email']; ?>
                                        <?php endif; ?>
                                    </a>
                                </p>
                                <p >
                                    Web :
                                    <a href="#">
                                        <?php if( !empty( $item['web'] ) ): ?>
                                            <?php echo $item['web']; ?>
                                        <?php endif; ?>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
