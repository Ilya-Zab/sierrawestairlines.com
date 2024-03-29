    <ul class="certificate-card__list row justify-content-center">
      <?php
      foreach ($args['logos'] as $card) :
        $image_url = wp_get_attachment_image_url($card['image'], 'medium');
      ?>
        <li class="certificate-card__item text-center d-flex flex-column justify-content-center">
          <div class="certificate-card__img-wrap d-flex justify-content-center">
            <img src=<?= $image_url ?> alt=<?= $card['text'] ?>>
          </div>
          <h3 class="certificate-card__title text-uppercase">
            <?= $card['text'] ?>
          </h3>
        </li>
      <?php endforeach ?>
    </ul>