<?php
// Fetching ACF fields
$featured_article = get_field('featured_article');
$other_articles = get_field('other_articles');
?>

<section class="articles-section">
    <div class="wrapper">
        <?php if ($featured_article): ?>
            <div class="featured-article">
                <div class="article-image">
                    <img src="<?php echo esc_url($featured_article['image']['url']); ?>" alt="<?php echo esc_attr($featured_article['title']); ?>">
                </div>
                <div class="article-content">
                    <a href="#" class="btn article-category"><?php echo esc_html($featured_article['category']); ?></a>
                    <h1 class="article-title"><?php echo esc_html($featured_article['title']); ?></h1>
                    <p class="article-author"><?php echo esc_html($featured_article['author']); ?></p>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($other_articles): ?>
            <div class="other-articles">
                <?php foreach ($other_articles as $article): ?>
                    <article class="article-card">
                        <div class="article-image">
                            <img src="<?php echo esc_url($article['image']['url']); ?>" alt="<?php echo esc_attr($article['title']); ?>">
                        </div>
                        <div class="article-content">
                            <span class="article-category"><?php echo esc_html($article['category']); ?></span>
                            <h2 class="article-title"><?php echo esc_html($article['title']); ?></h2>
                            <p class="article-author"><?php echo esc_html($article['author']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>