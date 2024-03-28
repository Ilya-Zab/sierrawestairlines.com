<div class="grid-images">
  <div class="pop-img">
    <img src="../img/close.svg" class="pop-img__close" alt="Close">
    <div class="pop-img__wrap">
      <img src="" class="pop-img__img" alt="wife">
    </div>
  </div>
  <ul class="grid-images__list-img">
    <?php foreach ($args['items'] as $item) : ?>
      <li>
        <div class="grid-images__img-wrap">
          <img src="<?= $item['path'] ?>" alt="">
        </div>
      </li>
    <?php endforeach; ?>
  </ul>
</div>