<div class="grid-images carbon-images">
  <div class="pop-img">
    <img src="<?= ASSETS_PATH ?>/img/close.svg" class="pop-img__close" alt="Close">
    <div class="pop-img__wrap">
      <img src="" class="pop-img__img" alt="wife">
    </div>
  </div>
  <ul class="grid-images__list-img">
    <?php
    foreach ($args['gallery'] as $item) :
      $image_url = wp_get_attachment_image_url($item, 'large');

    ?>
      <li>
        <div class="grid-images__img-wrap">
          <img src="<?= $image_url ?>" alt="">
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>