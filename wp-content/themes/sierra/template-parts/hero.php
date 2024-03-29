<?php
$image_url = wp_get_attachment_image_url($args['image'], 'large');
?>
<section>
    <div class="container">
        <div class="media-flex">
            <div class="row <?php echo $args['is_reverse'] ? 'flex-row-reverse' : ''; ?> justify-content-between">
                <?php if ($args['is_wide']) : ?>
                    <div class="col-xl-8 col-lg-8 col-sm-12 mb-lg-0 mb-sm-4 mb-mob-2">
                    <?php else : ?>
                        <div class="col-xl-6 col-lg-6 col-sm-12 mb-lg-0 mb-sm-4 mb-mob-2">
                        <?php endif ?>
                        <div class="media-flex__img-wrap">
                            <img src='<?= $image_url ?>' alt="" class="media-flex__img">
                        </div>
                        </div>
                        <?php if ($args['is_wide']) : ?>
                            <div class="col-xl-4 col-lg-4 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
                            <?php else : ?>
                                <div class="col-xl-6 col-lg-6 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
                                <?php endif ?>
                                <h3 class="<?= $args['is_bold'] ? 'h2-sub' : 'h3' ?> text-capitalize mb-lg-3 mb-sm-3 text-lg-start text-sm-center">
                                    <?= $args['title'] ?>
                                </h3>
                                <div class="desc mb-4">
                                    <?= nl2br($args['text']) ?>
                                </div>
                                <?php if (!empty($args['button_text'])) : ?>
                                    <div class="media-flex__btn-wrap text-lg-start text-sm-center">
                                        <a class="btn btn-danger" href=<?= $args['button_url'] ?>>
                                            <?= $args['button_text'] ?>
                                        </a>
                                    </div>
                                <?php endif ?>
                                </div>
                            </div>
                    </div>
                    <?php if ($args['is_button_below']) : ?>
                        <div class="main-experience__bottom text-center">
                            <a href=<?= $args['button_url'] ?> class="btn btn-danger">
                                <?= $args['button_text'] ?>
                            </a>
                        </div>
                    <?php endif ?>
            </div>
</section>