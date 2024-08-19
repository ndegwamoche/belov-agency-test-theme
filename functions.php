<?php
function belov_agency_theme_enqueue_scripts()
{
    wp_register_script(
        'belov-agency-block-editor',
        get_template_directory_uri() . '/blocks/articles-section/index.js',
        array('wp-blocks', 'wp-element', 'wp-editor'),
        filemtime(get_template_directory() . '/blocks/articles-section/index.js')
    );

    $result = register_block_type(__DIR__ . '/blocks/articles-section');

    if (is_wp_error($result)) {
        error_log('Block registration failed: ' . $result->get_error_message());
    }
}

add_action('init', 'belov_agency_theme_enqueue_scripts');
