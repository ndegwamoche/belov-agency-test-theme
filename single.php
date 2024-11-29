<?php get_header(); ?>

<main class="site-content">
    <section>
        <div class="wrapper">
            <?php
            // Start the Loop to fetch the latest post/page content
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    // Render the content of the current post/page
                    the_content();
                endwhile;
            else :
                // Message if no content is available
                echo '<p>No content available.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php
get_footer();
