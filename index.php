<?php

/**
 * Belov Test Block Theme
 *
 * This file is used to display a page when no specific template matches a query.
 * It serves as the fallback template in WordPress themes.
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

get_header(); ?>

<main class="site-content">

    <?php
    // Start the Loop to fetch the latest post/page content
    if (have_posts()) {
        while (have_posts()) :
            the_post();
            // Render the content of the current post/page
            the_content();
        endwhile;
    } else {
        // Message if no content is available
        echo '<p>No content available.</p>';
    }
    ?>

    <section>
        <div class="wrapper"></div>
    </section>

</main>

<?php
get_footer();
