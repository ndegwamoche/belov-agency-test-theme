<?php

/**
 * Plugin Name:       Belov Agency Test ACF Block
 * Description:       Developed as part of the recruitment process at Belov Agency.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.0.1
 * Author:            Martin Ndegwa Moche <ndegwamoche@gmail.com>
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       belov-acf-block
 * 
 * @category Plugin
 * @package  BelovAgencyTestACFBlock
 * @author   Martin Ndegwa Moche <ndegwamoche@gmail.com>
 * @license  GPL-2.0-or-later https://www.gnu.org/licenses/gpl-2.0.html
 * @link     https://github.com/ndegwamoche/belov-test-block-theme
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

/**
 * Registers the custom block using metadata from the `block.json` file.
 *
 * This function handles registration of all necessary assets, including
 * scripts, styles, and editor scripts.
 *
 * @return void
 */
function Belov_Test_Acf_block()
{
    register_block_type(__DIR__ . '/blocks');
}
add_action('init', 'Belov_Test_Acf_block');

/**
 * Registers custom styles and scripts for the block's editor and frontend display.
 *
 * This function registers two Google Fonts (Archivo and Lora) for use in the block.
 *
 * @return void
 */
function Belov_Test_Register_Styles_And_scripts()
{
    wp_register_style(
        'archivo-google-fonts',
        'https://fonts.googleapis.com/css2?family=Archivo:ital,
        wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    wp_register_style(
        'lora-google-fonts',
        'https://fonts.googleapis.com/css2?family=Lora:ital,
        wght@0,400..700;1,400..700&display=swap',
        array(),
        null
    );
}
add_action('admin_enqueue_scripts', 'Belov_Test_Register_Styles_And_scripts');
