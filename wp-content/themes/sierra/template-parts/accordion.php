<section class="pb-12">
    <div class="container">
        <div class="accordion" id="accordion">
            <?php foreach ($args['accordion'] as $i => $item) : ?>
                <div class="accordion-item accordion__item">
                    <h2 class="accordion-header">
                        <button class="accordion-button accordion__button h3 text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $i ?>" aria-expanded="true" aria-controls=<?= $i ?>>
                            <?= $item['title'] ?>
                        </button>
                    </h2>
                    <div id="<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#accordion">
                        <div class="accordion__body accordion-body">
                            <?= $item['content'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>