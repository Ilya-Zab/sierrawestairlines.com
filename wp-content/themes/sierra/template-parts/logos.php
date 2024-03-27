<div class="container">
  <div class="certificate-card">
    <ul class="certificate-card__list row justify-content-center">
      <?php foreach ($args['items_array'] as $card) : ?>
        <li class="certificate-card__item text-center d-flex flex-column justify-content-center">
          <div class="certificate-card__img-wrap d-flex justify-content-center">
            <img src=<?= $card['path'] ?> alt=<?= $card['title'] ?>>
          </div>
          <h3 class="certificate-card__title text-uppercase">
            <?= $card['title'] ?>
          </h3>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>