<section class="hero">
    <video class="hero__video" src="<?= ASSETS_PATH ?>/img/main.mp4" autoplay muted loop></video>

    <div class="container hero__container">
        <div class="row h-100">
            <div class="col-md-12 align-items-center d-flex justify-content-center">
                <div class="hero__content text-center">
                    <h1 class="h1 hero__h1">
                        <?= $args['title'] ?>
                    </h1>
                    <a href="/" class="btn big-btn btn-light">Book Now</a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- get_template_part('template-parts/video-hero', null, array(
    'video_url' => ASSETS_PATH . '/img/main.mp4',
    'title' => 'Take Flight Today',
    'btn_link' => '/',
    'btn_text' => 'Book Now'
)); -->