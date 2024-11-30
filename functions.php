<?php

/**
 * Belov Test Block Theme
 *
 * Custom WordPress theme for the Belov test task.
 *
 * @category Theme
 * @package  BelovTestBlockTheme
 * @author   Martin Ndegwa <ndegwamoche@gmail.com>
 * @license  GPL-2.0-or-later https://www.gnu.org/licenses/gpl-2.0.html
 * @version  GIT: 1.0.0
 * @link     https://github.com/ndegwamoche/belov-test-block-theme
 * Requires PHP: 7.0
 * Requires at least: 6.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Include block declaration file.
require_once get_template_directory() . '/belov-test-acf-block-task/index.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @return void
 */
function Belov_Test_Block_Theme_setup()
{
    // Enable custom title.
    add_theme_support('title-tag');

    // Enable post thumbnails.
    add_theme_support('post-thumbnails');

    // Enable page excerpt.
    add_post_type_support('page', 'excerpt');

    // Enable wide alignment.
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'Belov_Test_Block_Theme_setup');

/**
 * Registers navigation menus for the theme.
 *
 * @return void
 */
function Belov_Test_Block_Theme_Register_Nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'belov-test-block-theme'),
        )
    );
}
add_action('init', 'Belov_Test_Block_Theme_Register_Nav_menus');

/**
 * Enqueues theme scripts and styles.
 *
 * @return void
 */
function Belov_Test_Block_Theme_scripts()
{
    // Google Fonts.
    wp_enqueue_style(
        'google-font-archivo-css',
        '//fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'google-font-lora-css',
        '//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap',
        array(),
        null
    );

    // Theme styles.
    wp_enqueue_style(
        'belov-test-block-theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Theme scripts.
    wp_enqueue_script(
        'belov-test-block-theme-script',
        get_theme_file_uri('main.js'),
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'Belov_Test_Block_Theme_scripts');
