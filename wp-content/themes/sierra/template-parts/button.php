<<<<<<< HEAD
<div class="text-center text-lg-<?= $args['alignment'] ?> carbon-button <?= $args['reduce_offset'] ? 'reduce-offset' : '' ?>">
  <a href="<?= $args['button_url'] ?>" class="btn
    <?= $args['is_btn_light'] ? 'btn-light' : 'btn-danger' ?>">
    <?= $args['button_text'] ?>
  </a>
</div>
=======
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
>>>>>>> 05bddada42bdbf61e96df9434894ac9ba67e8a76
