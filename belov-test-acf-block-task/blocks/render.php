<?php

/**
 * Belov Test Task Block Template.
 *
 * @param   array  $block    The block settings and attributes.
 * @param   string $content  The block inner HTML (empty).
 * @param   bool   $is_preview True during backend preview render.
 * @param   int    $post_id  The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array  $context  The context provided to the block by the post or its parent block.
 *
 * @package wpdev
 */

global $post;
$featured_article = get_field('featured_article');
$articles_list = get_field('articles_list');
?>

<main>
    <div class="main-content">
        <section class="featured-article">
            <?php if ($featured_article): ?>
                <img src="<?php echo esc_attr(get_the_post_thumbnail_url($featured_article->ID, 'full')); ?>" alt="<?php echo esc_html($featured_article->post_title); ?>">
                <div class="featured-article-content">
                    <?php
                    $category = get_the_category($featured_article->ID)[0]->name;
                    $author = get_the_author_meta('display_name', $featured_article->post_author);
                    $date = get_the_date('F j, Y', $featured_article->ID);
                    ?>
                    <a href="#"><?php echo esc_html($category); ?></a>
                    <h2><?php echo esc_html($featured_article->post_title); ?></h2>
                    <p><?php echo esc_html($author); ?> &bull; <?php echo esc_html($date); ?></p>
                </div>
            <?php endif; ?>
        </section>
        <section class="articles-list">
            <?php if ($articles_list) : ?>
                <?php foreach ($articles_list as $article) : ?>
                    <article>
                        <img src="<?php echo esc_attr(get_the_post_thumbnail_url($article->ID, 'full')); ?>" alt="<?php echo esc_html($article->post_title); ?>">
                        <div class="article-content">
                            <?php
                            $category = get_the_category($article->ID)[0]->name;
                            $author = get_the_author_meta('display_name', $article->post_author);
                            $date = get_the_date('F j, Y', $article->ID);
                            ?>
                            <a href="#"><?php echo esc_html($category); ?></a>
                            <h3><?php echo esc_html($article->post_title); ?></h3>
                            <p><?php echo esc_html($author); ?> &bull; <?php echo esc_html($date); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </section>
    </div>
</main>
