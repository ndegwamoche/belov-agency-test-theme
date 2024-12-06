<?php

/**
 * Belov Test Block Theme
 *
 * This file is responsible for rendering the <head> section of the theme,
 * including metadata, scripts, and styles.
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <!-- Start of the header section -->

    <header class="site-header">
        <div class="wrapper">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                    <img
                        src="<?php echo get_theme_file_uri('images/logo.png'); ?>"
                        alt="Marathon Handbook">
                </a>
            </div>

            <!-- Start of desktop navigation menu -->

            <nav class="main-navigation">
                <ul>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Shoes & Gear</a></li>
                    <li class="btn-group">
                        <a href="#" class="btn purple">Podcast</a>
                    </li>
                    <li class="btn-group">
                        <a href="#" class="btn orange">Newsletter</a>
                    </li>
                    <li class="btn-group">
                        <a href="#" class="btn normal plus-icon">Menu</a>
                    </li>

                    <?php
                    $search_icon = get_theme_file_uri('images/search-icon.svg');
                    ?>

                    <li class="btn-group">
                        <a href="#" class="search-icon">
                            <img
                                src="<?php echo $search_icon; ?>"
                                alt="Search" />
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- End of desktop navigation menu -->

            <!-- Start of mobile navigation menu -->

            <?php
            $menu_icon = get_theme_file_uri('images/menu-icon.svg');
            ?>

            <nav class="mobile-navigation">
                <div class="menu-icon">
                    <img
                        src="<?php echo $menu_icon; ?>"
                        alt="menu icon" />
                </div>
            </nav>

            <div class="mobile-menu-container">

                <?php
                $close_icon = get_theme_file_uri('images/close-icon.svg');
                ?>

                <div class="close-icon">
                    <img
                        src="<?php echo $close_icon; ?>"
                        alt="close icon" />
                </div>
                <ul>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Shoes & Gear</a></li>
                    <li class="btn-group">
                        <a href="#" class="btn purple">Podcast</a>
                    </li>
                    <li class="btn-group">
                        <a href="#" class="btn orange">Newsletter</a>
                    </li>
                    <li class="btn-group">
                        <a href="#" class="btn normal plus-icon">Menu</a>
                    </li>
                    <li class="btn-group">
                        <a href="#" class="search-icon">
                            <img src="<?php echo $search_icon; ?>" alt="Search" />
                        </a>
                    </li>
                </ul>
            </div>

            <!-- End of mobile navigation menu -->
        </div>
    </header>

    <!-- End of the header section -->