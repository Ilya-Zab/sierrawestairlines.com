<section class="hero">
    <video class="hero__video" src=<?= $args['video_url'] ?> autoplay muted loop></video>

    <div class="container hero__container">
        <div class="row h-100">
            <div class="col-md-12 align-items-center d-flex justify-content-center">
                <div class="hero__content text-center">
                    <h1 class="h1 hero__h1">
                        <?= $args['title'] ?>
                    </h1>
                    <a href=<?= $args['btn_link'] ?> class="btn big-btn btn-light"><?= $args['btn_text'] ?></a>
                </div>
            </div>
        </div>
    </div>

</section>