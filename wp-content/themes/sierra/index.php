<?php
get_header();

get_template_part('template-parts/video-hero', null, array(
    'video_url' => ASSETS_PATH . '/img/main.mp4',
    'title' => 'Take Flight Today',
    'btn_link' => '/',
    'btn_text' => 'Book Now'
));

get_template_part('template-parts/hero', null, array(
    'is_img_wide' => true,
    'is_block_reverse' => false,
    'bottom_btn' => false,
    'btn_link' => '/',
    'bottom_btn_link' => '/',
    'btn_text' => 'Get a Quote',
    'image_url' => ASSETS_PATH . '/img/exec-fleet.webp',
    'main_title' => 'Executive Fleet',
    'is_title_bold' => false,
    'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
));

get_template_part('template-parts/features', null, array(

    'items_array' => [
        [
            'path' =>  ASSETS_PATH . '/img/wife.svg',
            'title' =>  'WI-FI',
        ],
        [
            'path' =>  ASSETS_PATH . '/img/lock.svg',
            'title' =>  'Enclosed Lavatory',
        ],
        [
            'path' =>  ASSETS_PATH . '/img/sofa.svg',
            'title' =>  'Movable/Reclining',
        ],
        [
            'path' =>  ASSETS_PATH . '/img/mug.svg',
            'title' =>  'Hot & Cold Drink Station',
        ],
        [
            'path' =>  ASSETS_PATH . '/img/bowl.svg',
            'title' =>  'Microwave',
        ]
    ],
));

get_template_part('template-parts/table', null, array(
    [
        "Takeoff location; Landing location; Days;\n
        El Paso (ELP); Toledo (TOL); M - F;\n
        Toledo (TOL); El Paso (ELP); M - F;\n
        Laredo (LRD); El Paso (ELP); M - F;"
    ]
));

?>
<section class="main-blog section-offset">
    <div class="container">
        <div class="main-blog__titles sub-title-offset">
            <h2 class="h2 text-center mb-sm-3 mb-xs-1">Sierra West Airlines</h2>
            <h3 class="h3 text-center main-blog__sub-title">Elevating Your Private Jet Experience</h3>
        </div>
        <div class="blog-grid">
            <div>
                <article class="blog-grid__item">
                    <div class="blog-grid__img">
                        <img src="<?= ASSETS_PATH ?>/img/blog-test_1.jpg" alt="">
                    </div>
                    <div class="blog-grid__content">
                        <h3 class="h3 mb-sm-3 mb-xs-2">
                            Customized Flight Experiences
                        </h3>
                        <p class="desc">
                            With our private jet offerings, we adapt every facet of your flight to suit your unique tastes and
                            necessities. Enjoy a travel experience that’s designed exclusively around your individual preferences and
                            demands whilst still being affordable.
                        </p>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-grid__item">
                    <div class="blog-grid__img">
                        <img src="<?= ASSETS_PATH ?>/img/blog-grid_2.jpg" alt="">
                    </div>
                    <div class="blog-grid__content">
                        <h3 class="h3 mb-3">
                            Fast & Flexible Cargo Services
                        </h3>
                        <p class="desc">
                            Whether it’s a large shipment or a small parcel, Sierra West excels in providing tailored cargo services. Our
                            skilled team efficiently determines the best aircraft for your needs, balancing speed, cost, and overall value
                            to ensure your cargo reaches its destination promptly and economically.
                        </p>
                    </div>
                </article>
            </div>
            <div>
                <article class="blog-grid__item">
                    <div class="blog-grid__img">
                        <img src="<?= ASSETS_PATH ?>/img/blog-test_3.jpg" alt="">
                    </div>
                    <div class="blog-grid__content">
                        <h3 class="h3 mb-3">
                            Instant Flight Readiness
                        </h3>
                        <p class="desc">
                            In a world where time equates to value, Sierra West Airlines specializes in rapid transportation of
                            passengers, cargo, and animals. Our commitment to on-demand service means we aim to be airborne within an hour
                            of your call to action.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="main-experience section-offset">
    <div class="container">
        <h2 class="h2 text-center mb-3 h2-sub ">
            Experience the Ultimate in Air Travel
        </h2>
        <div class="desc main-experience__desc sub-title-offset mx-auto">
            We offer the ultimate in air travel with our state of the art Learjet and Metro cargo fleet. Designed for comfort,
            speed, and versatility.
        </div>
        <div class="media-flex">
            <div class="row sub-title-offset justify-content-between">
                <div class="col-xl-8 col-lg-8 col-sm-12 mb-lg-4 mb-sm-4 mb-mob-2">
                    <div class="media-flex__img-wrap">
                        <img src="<?= ASSETS_PATH ?>/img/plane-1.jpg" alt="" class="media-flex__img">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
                    <h3 class="h3 text-uppercase mb-lg-3 mb-sm-3 mb-mob-1">
                        Executive fleet
                    </h3>
                    <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>

            <div class="row sub-title-offset flex-row-reverse justify-content-between">
                <div class="col-xl-8 col-lg-8 col-sm-12 mb-lg-4 mb-sm-4 mb-mob-2">
                    <div class="media-flex__img-wrap">
                        <img src="<?= ASSETS_PATH ?>/img/plane-2.jpg" alt="" class="media-flex__img">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 d-flex flex-column justify-content-center media-flex__text">
                    <h3 class="h3 text-uppercase mb-lg-3 mb-sm-3 mb-mob-1">
                        Executive fleet
                    </h3>
                    <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                    </p>
                </div>
            </div>


        </div>
        <div class="main-experience__bottom text-center">
            <a href="/" class="btn btn-danger">Get a Quote</a>
        </div>
    </div>



</section>

<section class="main-talk section-offset">
    <div class="container">
        <h2 class="h2 text-center mb-3 h2-sub">
            Let’s Take an Adventure!
        </h2>
        <div class="desc main-talk__desc sub-title-offset mx-auto text-center">
            Whether you’re flying for business, pleasure, or need to transport essential items, we’re here to make your
            journey seamless. Connect with us today!
        </div>
        <div class="main-talk__bottom row">
            <div class="col-xl-6 col-lg-6 col-sm-12 mb-sm-4 mob-hidden">
                <img src="<?= ASSETS_PATH ?>/img/main-bottom.jpg" alt="" class="main-talk__img">
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 mb-sm-4">
                <form action="#" class="small-form">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingText" placeholder="Name">
                        <label for="floatingText">Name*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email*</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingPhone" placeholder="Phone*">
                        <label for="floatingPhone">Phone*</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Message (optional)" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Message (optional)</label>
                    </div>
                    <div class="text-sm-center text-lg-start">
                        <button type="submit" class="btn btn-danger">Let’s talk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php

get_footer();
