<?php

/**
 * belov-test-block-theme
 * 
 * @link https://github.com/ndegwamoche/belov-test-block-theme
 *
 * @package belov-test-block-theme
 */

//Blocks declaration
require_once get_template_directory() . '/belov-test-acf-block-task/index.php';

//Setup theme defaults
function belov_test_block_theme_setup()
{
    //Enable custom title
    add_theme_support('title-tag');

    //Enable post thumbnails
    add_theme_support('post-thumbnails');

    //Enable page excerpt
    add_post_type_support('page', 'excerpt');

    //Enable wide alignment
    add_theme_support('align-wide');
}

add_action('after_setup_theme', 'belov_test_block_theme_setup');

//Register the menus
function belov_test_block_theme_register_nav_menus()
{
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'belov_test_block_theme')
        )
    );
}

add_action('init', 'belov_test_block_theme_register_nav_menus');

//Enqueue scripts and styles.
function belov_test_block_theme_scripts()
{
    wp_enqueue_style('google_font_archivo_css', '//fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap');
    wp_enqueue_style('google_font_lora_css', '//fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');

    wp_enqueue_style('belov_test_block_theme_style', get_stylesheet_uri());

    wp_enqueue_script('belov_test_block_theme_script', get_theme_file_uri('main.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'belov_test_block_theme_scripts');
