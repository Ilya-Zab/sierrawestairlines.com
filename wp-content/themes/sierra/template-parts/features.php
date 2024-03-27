<div class="features-list">
  <ul class="d-flex align-content-center justify-content-center features-list__list flex-sm-wrap">
    <?php foreach ($args['items_array'] as $item) : ?>
      <li class="d-flex flex-column align-items-center">
        <img src="<?= $item['path'] ?>" alt=<?= $item['title'] ?>>
        <h3 class="accordion__title text-uppercase">
          <?= $item['title'] ?>
        </h3>
      </li>
    <?php endforeach ?>
  </ul>
</div>