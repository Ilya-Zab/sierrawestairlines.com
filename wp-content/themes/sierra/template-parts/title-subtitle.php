<div class="titles <?= $args['is_centered'] ? 'text-center' : '' ?>">
  <?php if ($args['use_h1']) : ?>
    <h1 class="h1"><?= $args['use_h1'] ?></h1>
  <?php endif ?>
  <h2 class="<?= $args['is_main'] ? 'h2' : 'h2-sub' ?> mb-sm-3 mb-xs-1">
    <?= $args['title'] ?>
  </h2>
  <?php if ($args['subtitle']) : ?>
    <h3 class="h3">
      <?= $args['subtitle'] ?>
    </h3>
  <?php endif ?>
</div>