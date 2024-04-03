<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use ParagonIE\Sodium\File;

add_action('carbon_fields_register_fields', 'crb_post_meta_setup');
function crb_post_meta_setup()
{
    // Create sections
    $sections_field = Field::make('complex', 'sierra_sections', __('Sections', 'sierra'));
    $sections_field->setup_labels(array(
        'plural_name' => 'Sections',
        'singular_name' => 'section'
    ));

    // Add sections
    cf_add_title_subtitle($sections_field);
    cf_add_rich_text($sections_field);
    cf_add_image($sections_field);
    cf_add_video($sections_field);
    cf_add_button($sections_field);
    cf_add_spacer($sections_field);
    cf_add_table($sections_field);
    cf_add_hero($sections_field);
    cf_add_cards($sections_field);
    cf_add_accordion($sections_field);
    cf_add_split($sections_field);
    cf_add_split_reversible($sections_field);
    cf_add_logos($sections_field);
    cf_add_partners($sections_field);
    cf_add_features($sections_field);
    cf_add_gallery($sections_field);
    cf_add_shortcode($sections_field);
    cf_add_video_hero($sections_field);

    // Put into container
    $sections_container = Container::make('post_meta', __('Sections', 'sierra'));
    $sections_container->where('post_type', '=', 'page');
    $sections_container->add_fields(array($sections_field));
}

// Rich text
function cf_add_rich_text($field)
{
    $field->add_fields('rich_text', __('Rich text', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('rich_text', 'text', __('Rich text', 'sierra')),
    ));
}

// Image
function cf_add_image($field)
{
    $field->add_fields('image', __('Image', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('image', 'image', __('Image', 'sierra')),
        Field::make('checkbox', 'is_wide', __('Wide image', 'sierra')),
    ));
}

// Video
function cf_add_video($field)
{
    $field->add_fields('video', __('Video', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('file', 'video', __('Video', 'sierra'))
    ));
}

// Table
function cf_add_table($field)
{
    $field->add_fields('table', __('Table', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('textarea', 'content', __('Table content', 'sierra')),
    ));
}

// Cards
function cf_add_cards($field)
{
    $cards = Field::make('complex', 'cards', __('Cards', 'sierra'));
    $cards->set_layout('tabbed-horizontal');
    $cards->setup_labels(array(
        'plural_name' => 'Cards',
        'singular_name' => 'card'
    ));

    cf_add_card($cards);

    $field->add_fields('cards', __('Cards', 'sierra'), array($cards));

    $cards->set_header_template('
        <% if (title) { %>
            <%- title %>
        <% } %>
    ');
}

// Card
function cf_add_card($field)
{
    $field->add_fields('card', __('Card', 'sierra'), array(
        Field::make('image', 'image', __('Image', 'sierra')),
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('text', 'author', __('Author', 'sierra')),
        Field::make('textarea', 'text', __('Text', 'sierra')),
        Field::make('text', 'link_url', __('Card link url', 'sierra')),
        Field::make('checkbox', 'centered', __('Align center', 'sierra')),
        Field::make('text', 'button_text', __('Button text', 'sierra'))
            ->set_width(50),
        Field::make('text', 'button_url', __('Button url', 'sierra'))
            ->set_width(50),
    ));
}

// Split
function cf_add_split($field)
{
    $split = Field::make('complex', 'split', __('Split section', 'sierra'));
    $split->setup_labels(array(
        'plural_name' => 'Sides',
        'singular_name' => 'side'
    ));
    $split->set_layout('tabbed-horizontal');
    $split->set_max(2);
    $split->set_min(2);

    cf_add_inner_section($split);

    $field->add_fields('split', __('Split section', 'sierra'), array($split));
}

// Split reversible
function cf_add_split_reversible($field)
{
    $split = Field::make('complex', 'split_reversible', __('Split section (reversible)', 'sierra'));
    $split->setup_labels(array(
        'plural_name' => 'Sides',
        'singular_name' => 'side'
    ));
    $split->set_layout('tabbed-horizontal');
    $split->set_max(2);
    $split->set_min(2);

    cf_add_inner_section($split);

    $field->add_fields('split_reversible', __('Split section (reversible)', 'sierra'), array($split));
}

// Inner section
function cf_add_inner_section($field)
{
    $inner_section = Field::make('complex', 'inner_section', __('Inner section', 'sierra'));
    $inner_section->setup_labels(array(
        'plural_name' => 'Blocks',
        'singular_name' => 'block'
    ));

    cf_add_title_subtitle($inner_section);
    cf_add_rich_text($inner_section);
    cf_add_image($inner_section);
    cf_add_video($inner_section);
    cf_add_button($inner_section);
    cf_add_table($inner_section);
    cf_add_logos($inner_section);
    cf_add_partners($inner_section);
    cf_add_features($inner_section);
    cf_add_gallery($inner_section);
    cf_add_shortcode($inner_section);

    $field->add_fields('inner_section', __('Inner section', 'sierra'), array($inner_section));
}

// Logos
function cf_add_logos($field)
{
    $logos = Field::make('complex', 'logos', __('Logotypes', 'sierra'));
    $logos->setup_labels(array(
        'plural_name' => 'Logos',
        'singular_name' => 'logo'
    ));
    $logos->set_layout('tabbed-horizontal');
    $logos->add_fields(array(
        Field::make('image', 'image', __('Logo', 'sierra')),
        Field::make('text', 'text', __('Capture', 'sierra')),
    ));

    $field->add_fields('logos', __('Logotypes', 'sierra'), array($logos));
}

// Partners
function cf_add_partners($field)
{
    $partners = Field::make('complex', 'partners', __('Partners', 'sierra'));
    $partners->setup_labels(array(
        'plural_name' => 'Partners',
        'singular_name' => 'partner'
    ));
    $partners->set_layout('tabbed-horizontal');
    $partners->add_fields(array(
        Field::make('image', 'image', __('Logo', 'sierra')),
        Field::make('text', 'text', __('Capture', 'sierra')),
        Field::make('text', 'button_text', __('Button text', 'sierra'))
            ->set_width(50),
        Field::make('text', 'button_url', __('Button url', 'sierra'))
            ->set_width(50),
    ));

    $field->add_fields('partners', __('Partners', 'sierra'), array($partners));
}

// Hero
function cf_add_hero($field)
{
    $field->add_fields('hero', __('Hero', 'sierra'), array(
        Field::make('checkbox', 'is_reverse', __('Reverse', 'sierra')),
        Field::make('image', 'image', __('Image', 'sierra')),
        Field::make('checkbox', 'is_wide', __('Wide image', 'sierra'))
            ->set_default_value(true),
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('checkbox', 'is_bold', __('Bold title', 'sierra')),
        Field::make('rich_text', 'text', __('Text', 'sierra')),
        Field::make('text', 'button_text', __('Button text', 'sierra'))
            ->set_width(50),
        Field::make('text', 'button_url', __('Button url', 'sierra'))
            ->set_width(50),
        Field::make('checkbox', 'is_button_below', __('Display the button below the section', 'sierra')),
    ));
}

// Video Hero
function cf_add_video_hero($field)
{
    $field->add_fields('video_hero', __('Video Hero', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('file', 'video', __('Video', 'sierra')),
        Field::make('text', 'button_text', __('Button text', 'sierra'))
            ->set_width(50),
        Field::make('text', 'button_url', __('Button url', 'sierra'))
            ->set_width(50)
    ));
}

// Accordion
function cf_add_accordion($field)
{
    $accordion = Field::make('complex', 'accordion', __('Accordion', 'sierra'));
    $accordion->setup_labels(array(
        'plural_name' => 'Items',
        'singular_name' => 'accordion part'
    ));

    cf_add_inner_section($accordion);

    $field->add_fields('accordion', __('Accordion', 'sierra'), array($accordion));
}

// Shortcode
function cf_add_shortcode($field)
{
    $field->add_fields('shortcode', __('Shortcode', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('text', 'shortcode', __('Shortcode', 'sierra'))
    ));
}

// Title and subtitle
function cf_add_title_subtitle($field)
{
    $field->add_fields('title_subtitle', __('Title and subtitle', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('textarea', 'subtitle', __('Subtitle', 'sierra')),
        Field::make('checkbox', 'is_main', __('Big title', 'sierra')),
        Field::make('checkbox', 'is_center', __('Centered', 'sierra')),
        Field::make('checkbox', 'use_h1', __('Use H1', 'sierra'))
    ));
}

// Button
function cf_add_button($field)
{
    $field->add_fields('button', __('Button', 'sierra'), array(
        Field::make('text', 'button_text', __('Button text', 'sierra'))
            ->set_width(50),
        Field::make('text', 'button_url', __('Button url', 'sierra'))
            ->set_width(50),
        Field::make('checkbox', 'is_center', __('Centered', 'sierra')),
        Field::make('checkbox', 'reduce_offset', __('Reduce an offset with a previous section', 'sierra')),
    ));
}

// Features
function cf_add_features($field)
{
    $features = Field::make('complex', 'features', __('Features', 'sierra'));
    $features->setup_labels(array(
        'plural_name' => 'Features',
        'singular_name' => 'feature'
    ));
    $features->set_layout('tabbed-horizontal');
    $features->add_fields(array(
        Field::make('image', 'image', __('Icon', 'sierra')),
        Field::make('text', 'text', __('Capture', 'sierra'))
    ));

    $field->add_fields('features', __('Features', 'sierra'), array($features));
}

// Gallery
function cf_add_gallery($field)
{
    $field->add_fields('gallery', __('Gallery', 'sierra'), array(
        Field::make('text', 'title', __('Title', 'sierra')),
        Field::make('media_gallery', 'gallery', __('Gallery', 'sierra'))
    ));
}

// Spacer
function cf_add_spacer($field)
{
    $field->add_fields('spacer', __('Spacer', 'sierra'), array(
        Field::make('text', 'size', __('Space size', 'sierra'))
            ->set_attribute('type', 'number')
            ->set_default_value(10)
    ));
}
