<div class="features-list carbon-features-list">
  <ul class="d-flex align-content-center justify-content-center features-list__list flex-sm-wrap">
    <?php
    foreach ($args['features'] as $item) :
      $image_url = wp_get_attachment_image_url($item['image'], 'medium');
    ?>
      <li class="d-flex flex-column align-items-center">
        <img src="<?= $image_url ?>" alt=<?= $item['text'] ?>>
        <h3 class="accordion__title text-uppercase">
          <?= $item['text'] ?>
        </h3>
      </li>
    <?php endforeach ?>
  </ul>
</div>