<div class="container">
  <div class="media-flex">
    <div class="row sub-title-offset flex-row-reverse justify-content-between">
      <div class="col-xl-8 col-lg-8 col-sm-12 mb-lg-0 mb-sm-4 mb-mob-2">
        <div class="media-flex__img-wrap">
          <img src='<?= $args['image_url'] ?>' alt="" class="media-flex__img">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
        <h3 class="h2-sub text-capitalize mb-lg-3 mb-sm-3 text-lg-start text-sm-center">
          Executive Fleet
        </h3>
        <p class="desc mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
        <?php if (!empty($args['btn_text'])) : ?>
          <a class="btn btn-danger">
            Learn more
          </a>
        <?php endif ?>
      </div>
    </div>
  </div>
</div>


<!-- <div class="row justify-content-between">
      <div class="col-xl-8 col-lg-8 col-sm-12 mb-lg-0 mb-sm-4 mb-mob-2">
        <div class="media-flex__img-wrap">
          <img src="../img/cargo-fleet.webp" alt="" class="media-flex__img">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
        <h3 class="h2-sub text-capitalize mb-lg-3 mb-sm-3 text-lg-start text-sm-center">
          Cargo Fleet
        </h3>
        <p class="desc mb-4">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.
        </p>
        <a class="btn btn-danger">
          Learn more
        </a>
      </div>
    </div> -->