<?php if ($args['is_btn_centered']) : ?>
  <div class="text-center">
  <?php else : ?>
    <div class="text-sm-center text-lg-start">
    <?php endif ?>
    <button class="btn
    <?= $args['is_btn_light'] ? 'btn-light' : 'btn-danger' ?>">
      <?= $args['btn_text'] ?>
    </button>
    </div>