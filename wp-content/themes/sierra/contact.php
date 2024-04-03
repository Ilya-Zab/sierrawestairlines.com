<?php

/**
 * Template name: Contact
 */

get_header();
?>

<section class="contacts pb-12 pt-5-c">
    <div class="container">
        <h2 class="h2 text-center"><?= __('Contact', 'sierra') ?></h2>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <div class="con-info">
                    <h3 class="h3 text-lg-start text-sm-center"><?= __('Contact Information', 'sierra') ?></h3>
                    <div class="con-info__wrap con-info__wrap_top text-lg-start text-sm-center">
                        <div class="con-info__item desc">
                            <?= nl2br(carbon_get_theme_option('contact_text')) ?>
                        </div>
                    </div>

                    <h3 class="h3 text-lg-start text-sm-center"><?= __('Locations', 'sierra') ?></h3>
                    <div class="con-info__bottom con-info__wrap_bottom">
                        <?php
                        foreach (carbon_get_theme_option('contact_locations') as $location) :
                        ?>
                            <div class="con-info__wrap">
                                <div class="con-info__item">
                                    <h4><?= $location['title'] ?></h4>
                                    <?= nl2br($location['text']) ?>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>



                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <?= do_shortcode(carbon_get_theme_option('contact_form_shortcode')) ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>