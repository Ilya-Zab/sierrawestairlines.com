<?php
$image_url = wp_get_attachment_image_url($args['image'], 'large');
?>
<div class="card">
    <article class="card__item <?= $args['centered'] ? 'text-center' : '' ?>">
        <div class="card__img card__img_bt">
            <img src=<?= $image_url ?> alt=<?= $args['title'] ?>>
        </div>
        <div class="card__content">
            <span class="desc card__desc card__desc_auth d-inline-block">
                <?= $args['author'] ?>
            </span>
            <h3 class="h3 mb-sm-3 mb-xs-2">
                <?= $args['title'] ?>
            </h3>
            <p class="desc card__desc">
                <?= $args['text'] ?>
            </p>
        </div>
        <?php if ($args['button_text']) : ?>
            <a href=<?= $args['button_url'] ?> class="btn btn-danger card__btn">
                <?= $args['button_text'] ?>
            </a>
        <?php endif ?>
    </article>
</div>