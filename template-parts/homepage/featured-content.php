<?php

/**
 * Template part for displaying the featured content on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

?>

<?php if (have_rows("featured_content_items")) : ?>
<div class="featured-content-container">

    <?php while (have_rows("featured_content_items")) : the_row(); ?>
    <?php $bgImg = get_sub_field("image")["url"]; ?>

    <a href="<?php echo get_sub_field("link")["url"]; ?>" class="featured-content-item-wrapper"
        style="background-image:url(<?php echo $bgImg; ?>)">
        <div class="featured-content-heading-wrapper">
            <?php the_sub_field("item_name"); ?>
        </div>
    </a>
    <?php endwhile; ?>
</div>
<?php endif; ?>