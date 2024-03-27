<div class="accordion" id="accordion">
    <?php for ($i = 0; $i < count($args['items']); $i++) : ?>
        <div class="accordion-item accordion__item">
            <h2 class="accordion-header">
                <button class="accordion-button accordion__button h3 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $i ?>" aria-expanded="true" aria-controls=<?= $i ?>>
                    <?= $args['items'][$i]['title'] ?>
                </button>
            </h2>
            <div id="<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
                <?= $args['items'][$i]['content'] ?>
            </div>
        </div>
    <?php endfor ?>
</div>