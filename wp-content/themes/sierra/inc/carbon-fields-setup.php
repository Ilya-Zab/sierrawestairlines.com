<?php

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
    require_once('carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_post_options');
function crb_attach_post_options()
{
    Container::make('post_meta', __('Section Options'))
        ->where('post_type', '=', 'page')
        ->add_fields(array(
            Field::make('complex', 'crb_sections', 'Sections')
                // Our first group will be a simple rich text field
                ->add_fields('text', 'Text', array(
                    Field::make('rich_text', 'text', 'Text'),
                ))

                // Second group will be a list of files for users to download
                ->add_fields('file_list', 'File List', array(
                    Field::make('complex', 'files', 'Files')
                        ->add_fields('file', 'File', array(
                            Field::make('file', 'file', 'File'),
                        ))
                        ->add_fields('text', 'Text', array(
                            Field::make('rich_text', 'text', 'Text'),
                        ))
                ))

                // Third group will be a list of manually selected posts
                // used as a simple curated "Related posts" listing
                ->add_fields('related_posts', 'Related Posts', array(
                    Field::make('association', 'posts', 'Posts')
                        ->set_types(array(
                            array(
                                'type' => 'post',
                                'post_type' => 'post',
                            ),
                        )),
                )),
        ));
}
