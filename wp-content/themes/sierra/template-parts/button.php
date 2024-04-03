<?php if ($args['is_center']) : ?>
  <div class="text-center carbon-button <?= $args['reduce_offset'] ? 'reduce-offset' : '' ?>">
  <?php else : ?>
    <div class="text-sm-center text-lg-start carbon-button <?= $args['reduce_offset'] ? 'reduce-offset' : '' ?>">
    <?php endif ?>

    <a href="<?= $args['button_url'] ?>" class="btn
    <?= $args['is_btn_light'] ? 'btn-light' : 'btn-danger' ?>" target="_blank">
      <?= $args['button_text'] ?>
    </a>

    </div>