<?php

/**
 * Plugin Name:       Belov Test ACF Block Test
 * Description:       I developed this plugin as part of my participation in the recruitment process at Belov Agency.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.0.1 
 * Author:            Martin Ndegwa Moche
 * Licence:           GPL-2.0-or-later
 * Licence URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function belov_test_acf_block_test()
{
    register_block_type(__DIR__ . '/blocks');
}
add_action('init', 'belov_test_acf_block_test');

/**
 * Registers the block's assets for the editor and the frontend.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#editor-scripts
 */

function belov_test_register_styles_and_scripts()
{
    //Archivo google font
    wp_register_style('archivo-google-fonts', '//fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap');
    //Lora google font
    wp_register_style('lora-google-fonts', '//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');
}

add_action('wp_enqueue_scripts', 'belov_test_register_styles_and_scripts');
add_action('admin_enqueue_scripts', 'belov_test_register_styles_and_scripts');
