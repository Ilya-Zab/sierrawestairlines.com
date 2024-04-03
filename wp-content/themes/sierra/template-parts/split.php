<section class="split-section pb-12">
  <div class="container">
    <div class="row align-items-center <?= $args['is_reversible'] ? "flex-lg-row flex-column-reverse" : "" ?>">
      <div class="col-12 col-lg-6 <?= !$args['is_reversible'] ? "split-section__img-bot" : "" ?>">
        <?= $args['split'][0] ?>
      </div>
      <div class="col-12 col-lg-6 <?= $args['is_reversible'] ? "split-section__img-bot" : "" ?>">
        <?= $args['split'][1] ?>
      </div>
    </div>
  </div>
</section>