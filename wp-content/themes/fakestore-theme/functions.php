<?php
function fakestore_enqueue_scripts() {
    wp_enqueue_style('fakestore-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'fakestore_enqueue_scripts');
