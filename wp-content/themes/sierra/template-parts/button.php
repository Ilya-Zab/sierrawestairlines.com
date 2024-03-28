<?php if ($args['is_center']) : ?>
  <div class="text-center">
  <?php else : ?>
    <div class="text-sm-center text-lg-start">
    <?php endif ?>

    <a href="<?= $args['button_url'] ?>" class="btn
    <?= $args['is_btn_light'] ? 'btn-light' : 'btn-danger' ?>">
      <?= $args['button_text'] ?>
    </a>

    </div>