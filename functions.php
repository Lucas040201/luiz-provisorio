<?php

function stylescss() {
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/assets/css/style.css',array(),false);
}
add_action('wp_head', 'stylescss', 1);

function scripts() {

    wp_enqueue_script('unpkg', 'https://unpkg.com/aos@2.3.1/dist/aos.js"',array(),false);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/assets/js/main.js?'.date('His'),array(),false);
}
add_action('wp_footer', 'scripts');