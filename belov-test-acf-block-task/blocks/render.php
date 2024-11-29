<?php

/**
 * Belov Test Task Block Template.
 *
 * This template renders a custom block on the frontend, 
 * displaying a featured article alongside a list of related articles. 
 * The data is retrieved using Advanced Custom Fields (ACF).
 *
 * @param array  $block      The block settings and attributes.
 * @param string $content    The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id    The post ID the block is rendering content against.
 * @param array  $context    The context provided to the block by the post 
 *                           or parent block.   
 *
 * @category Plugin
 * @package  Wpdev
 * @author   Martin Ndegwa Moche <ndegwamoche@gmail.com>
 * @license  GPL-2.0-or-later https://www.gnu.org/licenses/gpl-2.0.html
 * @link     https://github.com/ndegwamoche/belov-test-block-theme
 */

// Exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

// Ensure ACF is active before fetching fields.
if (! function_exists('get_field')) {
    return;
}

// Fetch ACF fields.
$featured_article = get_field('featured_article'); // Featured article.
$articles_list    = get_field('articles_list');    // List of related articles.
?>

<section class="articles-section">
    <div class="wrapper" style="align-items: flex-start;">
        <?php if ($featured_article) : ?>
            <!-- Featured Article -->
            <div class="featured-article">
                <div class="article-image">
                    <a href="<?php
                                echo esc_url(get_permalink($featured_article->ID));
                    ?>">
                        <img
                            src="
                            <?php
                            echo
                            esc_url(
                                get_the_post_thumbnail_url(
                                    $featured_article->ID,
                                    'full'
                                )
                                    ?:
                                    get_theme_file_uri('images/default-image.jpg')
                            );
                            ?>"
                            alt="<?php
                                    echo
                                    esc_attr($featured_article->post_title);
                            ?>" />
                    </a>
                </div>
                <div class="article-content">
                    <?php
                    // Retrieve featured article details.
                    $category = get_the_category($featured_article->ID)[0] ?? null;
                    $author   = get_the_author_meta(
                        'display_name',
                        $featured_article->post_author
                    );
                    $date     = get_the_date('F j, Y', $featured_article->ID);
                    ?>
                    <?php if ($category) : ?>
                        <a href="
                        <?php
                        echo
                        esc_url(get_category_link($category->term_id));
                        ?>"
                            class="btn article-category">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endif; ?>
                    <h1 class="article-title">
                        <a href="
                        <?php
                        echo esc_url(get_permalink($featured_article->ID));
                        ?>">
                            <?php echo esc_html($featured_article->post_title); ?>
                        </a>
                    </h1>
                    <p class="article-author">
                        <?php echo esc_html($author); ?>
                        <img src="
                        <?php
                        echo esc_url(
                            get_theme_file_uri(
                                'images/separator-icon.svg'
                            )
                        );
                        ?>"
                            alt="Dot icon">
                        <?php echo esc_html($date); ?>
                    </p>
                </div>
            </div>
        <?php endif; ?>

        <!-- Other Articles -->
        <div class="other-articles">
            <?php if ($articles_list) : ?>
                <?php foreach ($articles_list as $article) : ?>
                    <article class="article-card">
                        <div class="article-image">
                            <a href="
                            <?php
                            echo esc_url(get_permalink($article->ID));
                            ?>">
                                <img
                                    src="
                                    <?php
                                    echo esc_url(
                                        get_the_post_thumbnail_url(
                                            $article->ID,
                                            'full'
                                        )
                                            ?: get_theme_file_uri(
                                                'images/default-image.jpg'
                                            )
                                    );
                                    ?>"
                                    alt="<?php
                                            echo esc_attr($article->post_title);
                                    ?>" />
                            </a>
                        </div>
                        <div class="article-content">
                            <?php
                            // Retrieve article details.
                            $category = get_the_category($article->ID)[0] ?? null;
                            $author   = get_the_author_meta(
                                'display_name',
                                $article->post_author
                            );
                            $date     = get_the_date('F j, Y', $article->ID);
                            ?>
                            <?php if ($category) : ?>
                                <span class="article-category">
                                    <a href="
                                    <?php echo esc_url(
                                        get_category_link($category->term_id)
                                    );
                                    ?>">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </span>
                            <?php endif; ?>
                            <h2 class="article-title">
                                <a href="
                                <?php
                                echo esc_url(get_permalink($article->ID)); ?>
                                ">
                                    <?php echo esc_html($article->post_title); ?>
                                </a>
                            </h2>
                            <p class="article-author">
                                <?php echo esc_html($author); ?>
                                <img src="
                                <?php
                                echo esc_url(
                                    get_theme_file_uri('images/separator-icon.svg')
                                );
                                ?>" alt="Dot icon">
                                <?php echo esc_html($date); ?>
                            </p>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No related articles found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>