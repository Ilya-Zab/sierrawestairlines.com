<div class="text-center text-lg-<?= $args['alignment'] ?> carbon-button <?= $args['reduce_offset'] ? 'reduce-offset' : '' ?>">
  <a <?= $args['is_blank'] ? 'target="_blank"' : '' ?> href="<?= $args['button_url'] ?>" class="btn 
    <?= $args['is_btn_light'] ? 'btn-light' : 'btn-danger' ?>">
    <?= $args['button_text'] ?>
  </a>
</div>