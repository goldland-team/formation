<?php
$items = isset($items) ? $items : [];
$class = isset($class) ? $class : '';
$text = isset($text) ? $text:'';
$image = isset($image) ? $image:'';
$header = isset($header) ? $header:'';
$video = isset($video) ? $video:'';
$notification = isset($notification) ? $notification:'';
$duration = isset($duration) ? $duration:'';
?>
<div class="ce-mediathek-videos">
    <div class="container-xl">
        <div class="row mediathek-items">
            <?php foreach ($items as $item) { ?>
                <div class="col-md-6 ">
                    <div  class="mediathek-item">
                        <div class="video-thumbnail videoWrapper js-videoWrapper">
                            <?php if( !empty( $item['image'] ) ): ?>
                                <figure class="video-poster-image">
                                    <img src="<?php echo $item['image']; ?>" alt="mediathek">
                                </figure>
                            <?php endif; ?>
                            <?php if( !empty( $item['notification'] ) ): ?>
                                <div class="notification"> <p class="small"><?php echo $item['notification']; ?></p></div>
                            <?php endif; ?>
                            <button class="overlay videoPoster js-videoPoster">
                                <div href="#" class="play-icon" title="Video Play">
                                    <img src="<?php echo $item['icon']; ?>" alt="mediathek">
                                </div>
                            </button>
                            <iframe src="<?php echo $item['video']; ?>" class="videoIframe check_video" width="420" height="345" allow="autoplay" allowfullscreen></iframe>
                        </div>

                        <?php if( !empty( $item['header'] ) ): ?>
                            <h4>
                                <?php echo $item['header']; ?>
                            </h4>
                        <?php endif; ?>

                        <?php if( !empty( $item['text'] ) ): ?>
                            <p class="primary">
                                <?php echo $item['text']; ?>
                            </p>
                        <?php endif; ?>

                        <?php if( !empty( $item['duration'] ) ): ?>
                            <p class="small">
                                <?php echo $item['duration']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>