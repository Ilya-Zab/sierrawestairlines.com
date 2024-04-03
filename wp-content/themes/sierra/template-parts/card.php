<?php
$image_url = wp_get_attachment_image_url($args['image'], 'large');
?>

<?php if ($args['link_url']) : ?>
    <a href="<?= $args['link_url'] ?>" class="card">
    <?php else : ?>
        <div class="card">
        <?php endif; ?>
        <article class="card__item <?= $args['centered'] ? 'text-center' : '' ?>">
            <div class="card__img <?= ($args['author'] !== '') ? 'card__img_bt' : '' ?>">
                <img src=<?= $image_url ?> alt=<?= $args['title'] ?>>
            </div>
            <div class="card__content">
                <?php if ($args['author'] !== '') : ?>
                    <span class="desc card__desc card__desc_auth d-inline-block">
                        <?= $args['author'] ?>
                    </span>
                <?php endif ?>
                <h3 class="h3 mb-sm-3 mb-xs-2">
                    <?= $args['title'] ?>
                </h3>
                <p class="desc card__desc">
                    <?= nl2br($args['text']) ?>
                </p>
            </div>
            <?php if ($args['button_text']) : ?>
                <a href=<?= $args['button_url'] ?> class="btn btn-danger card__btn">
                    <?= $args['button_text'] ?>
                </a>
            <?php endif ?>
        </article>
        <?php if ($args['link_url']) : ?>
    </a>
<?php else : ?>
    </div>
<?php endif; ?>