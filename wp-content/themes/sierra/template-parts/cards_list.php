<section class="main-blog">
    <div class="container">
        <div class="blog-grid">
            <?php
            $cards = $args['cards'];
            foreach ($cards as $card) {
                get_template_part('template-parts/card', null, $card);
            }
            ?>
        </div>
    </div>
</section>