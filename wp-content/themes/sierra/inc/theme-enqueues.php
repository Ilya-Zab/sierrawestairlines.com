<?php

function sierra_styles()
{
    wp_enqueue_style('sierra-theme', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('sierra-style', ASSETS_PATH . '/css/style.css', array(), time());
}
add_action('wp_enqueue_scripts', 'sierra_styles');

function sierra_scripts()
{
    wp_enqueue_script('sierra-main', ASSETS_PATH . '/js/main.js', array(), time(), true);
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js", array(), time(), true);
}
add_action('wp_enqueue_scripts', 'sierra_scripts');
