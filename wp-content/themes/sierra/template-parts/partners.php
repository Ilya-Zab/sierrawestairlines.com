<div class="row partners">
    <div class="partners__icons">
        <ul class="d-flex justify-content-lg-around justify-content-sm-between justify-content-between align-items-center partners__list">

            <?php foreach ($args['items'] as $item) : ?>
                <li class="d-flex flex-column justify-content-center">
                    <div class="partners__icon">
                        <img src=<?= $item['img_path'] ?> alt=<?= $item['title'] ?>>
                    </div>
                    <div class="partners__text text-center">
                        <h3 class="h3">
                            <?= $item['title'] ?>
                        </h3>
                        <a href=<?= $item['btn_link'] ?> class="text-uppercase btn btn-danger">
                            <?= $item['btn'] ?>
                        </a>
                    </div>
                </li>
            <?php endforeach ?>

        </ul>
    </div>
</div>