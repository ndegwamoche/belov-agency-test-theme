<?php

/**
 * Plugin Name:       Belov Agency Test ACF Block
 * Description:       Developed as part of the recruitment process at Belov Agency.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.0.1
 * Author:            Martin Ndegwa Moche
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Registers the block using metadata from the `block.json` file.
 *
 * Automatically handles registration of all necessary assets, including scripts, styles, and editor scripts.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function belov_test_acf_block()
{
    // Register the block using its metadata.
    register_block_type(__DIR__ . '/blocks');
}
add_action('init', 'belov_test_acf_block');

/**
 * Registers custom styles and scripts for the block's editor and frontend display.
 *
 * This function registers two Google Fonts (Archivo and Lora) for use in the block.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#editor-scripts
 */
function belov_test_register_styles_and_scripts()
{
    // Register the Archivo Google Font.
    wp_register_style(
        'archivo-google-fonts',
        'https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    // Register the Lora Google Font.
    wp_register_style(
        'lora-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap',
        array(),
        null
    );
}
add_action('admin_enqueue_scripts', 'belov_test_register_styles_and_scripts');
