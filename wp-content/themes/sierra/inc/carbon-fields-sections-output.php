<?php
function cf_output_sections($sections)
{
    /**
     * Sections to be used
     * 
     * cf_add_rich_text
     * cf_add_video
     * cf_add_button
     * cf_add_spacer
     * cf_add_table
     * cf_add_accordion
     * cf_add_logos
     * cf_add_partners
     * cf_add_features
     * cf_add_gallery
     */

    foreach ($sections as $section) {
        switch ($section['_type']) {
            case 'video_hero':
                cf_video_hero($section);
                break;
            case 'title_subtitle':
                wrap_as_section('cf_title_subtitle', $section);
                break;
            case 'cards':
                cf_cards($section);
                break;
            case 'hero':
                cf_hero($section);
                break;
            case 'button':
                wrap_as_section('cf_button', $section);
                break;
            case 'split_reversible':
                cf_split($section, true);
                break;
            case 'split':
                cf_split($section);
                break;
            case 'image':
                wrap_as_section('cf_image', $section);
                break;
            case 'shortcode':
                wrap_as_section('cf_shortcode', $section);
                break;
            default:
                echo "The section <b>" . $section['_type'] . "</b> is not found<br>";
        }
    }
    // echo '<pre>';
    // print_r($sections);
    // echo '</pre>';
}

function cf_inner_section($sections)
{
    /**
     * Blocks to be used
     * 
     * cf_add_title_subtitle
     * cf_add_rich_text
     * cf_add_video
     * cf_add_button
     * cf_add_table
     * cf_add_logos
     * cf_add_partners
     * cf_add_features
     * cf_add_gallery
     */

    ob_start();
    foreach ($sections as $section) {
        switch ($section['_type']) {
            case 'title_subtitle':
                cf_title_subtitle($section);
                break;
            case 'button':
                cf_button($section);
                break;
            case 'image':
                cf_image($section);
                break;
            case 'shortcode':
                cf_shortcode($section);
                break;
            default:
                echo "The block <b>" . $section['_type'] . "</b> is not found<br>";
        }
    }

    $inner_section = ob_get_contents();
    ob_clean();

    // echo '<pre>';
    // print_r($sections);
    // echo '</pre>';

    return $inner_section;
}

function cf_output_the_sections()
{
    $sections = carbon_get_the_post_meta('sierra_sections');
    if ($sections) {
        cf_output_sections($sections);
    }
}

function cf_video_hero($data)
{
    get_template_part('template-parts/video-hero', null, $data);
}

function cf_title_subtitle($data)
{
    get_template_part('template-parts/title-subtitle', null, $data);
}

function cf_cards($data)
{
    get_template_part('template-parts/cards_list', null, $data);
}

function cf_hero($data)
{
    get_template_part('template-parts/hero', null, $data);
}

function cf_button($data)
{
    get_template_part('template-parts/button', null, $data);
}

function cf_split($split, $is_reversible = false)
{
    $sides = $split['split'];

    foreach ($sides as &$side) {
        $side = isset($side['inner_section']) ? cf_inner_section($side['inner_section']) : '';
    }

    $data = array(
        'is_reversible' => $is_reversible,
        'split' => $sides
    );

    get_template_part('template-parts/split', null, $data);
}

function cf_image($data)
{
    get_template_part('template-parts/image', null, $data);
}

function cf_shortcode($data)
{
    echo do_shortcode($data['shortcode']);
}
