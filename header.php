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
                    <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" alt="Marathon Handbook">
                </a>
            </div>

            <!-- Start of desktop navigation menu -->

            <nav class="main-navigation">
                <ul>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Shoes & Gear</a></li>
                    <li class="btn-group"><a href="#" class="btn purple">Podcast</a></li>
                    <li class="btn-group"><a href="#" class="btn orange">Newsletter</a></li>
                    <li class="btn-group"><a href="#" class="btn normal plus-icon">Menu</a></li>
                    <li class="btn-group"><a href="#" class="search-icon">
                            <img src="<?php echo get_theme_file_uri('images/search-icon.svg'); ?>" alt="Search"></a>
                    </li>
                </ul>
            </nav>

            <!-- End of desktop navigation menu -->

            <!-- Start of mobile navigation menu -->

            <nav class="mobile-navigation">
                <div class="menu-icon">
                    <img src="<?php echo get_theme_file_uri('images/menu-icon.svg'); ?>" alt="menu icon">
                </div>
            </nav>

            <div class="mobile-menu-container">
                <div class="close-icon">
                    <img src="<?php echo get_theme_file_uri('images/close-icon.svg'); ?>" alt="close icon">
                </div>
                <ul>
                    <li><a href="#">Latest</a></li>
                    <li><a href="#">Training</a></li>
                    <li><a href="#">Shoes & Gear</a></li>
                    <li class="btn-group"><a href="#" class="btn purple">Podcast</a></li>
                    <li class="btn-group"><a href="#" class="btn orange">Newsletter</a></li>
                    <li class="btn-group"><a href="#" class="btn normal plus-icon">Menu</a></li>
                    <li class="btn-group"><a href="#" class="search-icon">
                            <img src="<?php echo get_theme_file_uri('images/search-icon.svg'); ?>" alt="Search"></a>
                    </li>
                </ul>
            </div>

            <!-- End of mobile navigation menu -->
        </div>
    </header>

    <!-- End of the header section -->