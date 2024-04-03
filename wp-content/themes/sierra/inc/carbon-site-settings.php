<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_theme_options_setup');
function crb_theme_options_setup()
{

    Container::make('theme_options', __('Theme Options', 'sierra'))
        ->add_fields(array(
            Field::make('rich_text', 'contact_text', __('Contact information', 'sierra')),
            Field::make('complex', 'contact_locations', __('Locations', 'sierra'))
                ->set_layout('tabbed-horizontal')
                ->setup_labels(array(
                    'plural_name' => __('Locations', 'sierra'),
                    'singular_name' => __('location', 'sierra')
                ))
                ->add_fields(array(
                    Field::make('text', 'title', __('Title', 'sierra')),
                    Field::make('textarea', 'text', __('Text', 'sierra'))
                ))
                ->set_header_template('
                <% if (title) { %>
                    <%- title %>
                <% } %>
            '),
            Field::make('text', 'contact_form_shortcode', __('CF7 shortcode', 'sierra'))
        ));
}
