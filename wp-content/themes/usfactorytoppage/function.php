<?php

function usf_theme_support() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'usf_theme_support');

function usf_enqueue_scripts() {
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'usf_enqueue_scripts');
?>
