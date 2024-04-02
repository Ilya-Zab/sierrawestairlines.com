<div class="titles sub-title-offset <?= $args['is_center'] ? 'text-center' : '' ?>">

  <?php if ($args['use_h1']) : ?>
    <h1 class="h2 pt-5-c"><?= $args['title'] ?></h1>
  <?php else : ?>

    <h2 class="<?= $args['is_main'] ? 'h2' : 'h2-sub' ?>">
      <?= $args['title'] ?>
    </h2>

  <?php endif ?>

  <?php if ($args['subtitle']) : ?>
    <h3 class="<?= $args['is_main'] ? 'h3 main-blog__sub-title' : 'desc main-experience__desc mx-auto' ?>">
      <?= nl2br($args['subtitle']) ?>
    </h3>
  <?php endif ?>

</div>