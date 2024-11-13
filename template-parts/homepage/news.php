<?php

/**
 * Template part for displaying the news on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

$news = get_field("news_category");

?>

<?php if ($news) : ?>
<div class="news-heading-wrapper">
    <h2><?php the_field("news_heading"); ?></h2>
    <span><?php the_field("news_subheading"); ?></span>
</div>

<div class="news-container limit-width slick-slider equal-height">
    <?php
        $posts = get_posts(array(
            "category" => $news
        ));

        foreach ($posts as $post) :

            setup_postdata($post);

            $img = has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, "full") : getDefaultFeaturedImage(true);

        ?>

    <div class="post-wrapper">
        <img src="<?php echo $img; ?>" alt="" class="post-image">

        <h3 class="post-heading">
            <?php the_title(); ?>
        </h3>

        <div class="post-excerpt">
            <?php echo $post->post_excerpt !== "" ? $post->post_excerpt : wp_trim_words($post->post_content, 40); ?>
        </div>

        <a href="<?php the_permalink(); ?>" class="post-read-more" title="Read more">
            Read More >
        </a>



    </div>
    <?php endforeach;
        wp_reset_postdata();
        ?>


</div>
<div class="news-read-more-wrapper">
    <a href="<?php echo get_category_link($news); ?>" class="the-button" title="View all Events">
        Learn more
    </a>
</div>
<?php endif; ?>