<div class="card">
    <article class="card__item">
        <div class="card__img card__img_bt">
            <img src=<?= $args['path'] ?> alt=<?= $args['title'] ?>>
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
        <?php if ($args['btn']) : ?>
            <a href=<?= $args['btn_link'] ?> class="btn btn-danger card__btn">
                <?= $args['btn'] ?>
            </a>
        <?php endif ?>
    </article>
</div>