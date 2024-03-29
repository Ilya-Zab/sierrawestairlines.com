<?php
$image_url = wp_get_attachment_image_url($args['image'], 'large');
?>
<div class="block-img mx-auto" style="max-width: <?= $args['is_wide'] ? '1000px' : '700px' ?>">
  <div class="block-img__img-wrap">
    <img src=<?= $image_url ?> alt="<?= $args['title'] ?>">
  </div>
</div>