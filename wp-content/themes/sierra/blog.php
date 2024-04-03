<?php

/**
 * Template name: Blog
 */

get_header();
?>
<section class="blog pt-5-c pb-12">
    <div class="container">
        <h2 class="h2 text-center">
            <?= __('Blog', 'sierra') ?>
        </h2>
        <div class="blog-grid">
            <?php
            $blog_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1
            ));
            while ($blog_query->have_posts()) :
                $blog_query->the_post();
            ?>
                <div class="card">
                    <article class="card__item">
                        <div class="card__img card__img_bt">
                            <?php the_post_thumbnail('medium') ?>

                        </div>
                        <div class="card__content">
                            <span class="desc card__desc card__desc_auth d-inline-block">
                                <?= get_the_author_meta('display_name', get_post_field('post_author', get_the_ID())); ?> | <?= get_the_date('j F Y'); ?>
                            </span>
                            <h3 class="h3 mb-sm-3 mb-xs-2">
                                <?php the_title(); ?>
                            </h3>
                            <p class="desc card__desc">
                                <?php the_excerpt() ?>
                            </p>
                        </div>
                        <a href="<?php the_permalink() ?>" class="btn btn-danger card__btn"><?= __('Read more', 'sierra') ?></a>
                    </article>
                </div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>

</section>
<?php
get_footer();
