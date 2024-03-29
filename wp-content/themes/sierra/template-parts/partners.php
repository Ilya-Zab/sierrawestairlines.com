<div class="row partners">
    <div class="partners__icons">
        <ul class="d-flex justify-content-lg-around justify-content-sm-between justify-content-between align-items-center partners__list">

            <?php
            foreach ($args['partners'] as $item) :
                $image_url = wp_get_attachment_image_url($item['image'], 'medium');

            ?>
                <li class="d-flex flex-column justify-content-center">
                    <div class="partners__icon">
                        <img src=<?= $image_url ?> alt=<?= $item['text'] ?>>
                    </div>
                    <div class="partners__text text-center">
                        <h3 class="h3">
                            <?= $item['text'] ?>
                        </h3>
                        <a href=<?= $item['button_url'] ?> class="text-uppercase btn btn-danger">
                            <?= $item['button_text'] ?>
                        </a>
                    </div>
                </li>
            <?php endforeach ?>

        </ul>
    </div>
</div>