<?php
get_header();

if (!is_front_page()) {
    sierra_the_page_title();
}

sierra_the_page_content();

cf_output_the_sections();

get_footer();
