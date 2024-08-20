<?php
function belov_agency_theme_enqueue_scripts() {
    $result = register_block_type(__DIR__ . '/blocks/articles-section');

    if (is_wp_error($result)) {
        error_log('Block registration failed: ' . $result->get_error_message());
    }
}

add_action('init', 'belov_agency_theme_enqueue_scripts');
