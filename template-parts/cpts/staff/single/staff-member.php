<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Pier
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField("default_featured_image", "options", true, get_template_directory_uri() . "/assets/img/pier_placeholder.png");

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content staff-member">
        <a href=" <?php the_permalink(); ?>">

            <img class="staff-member-image" src="<?php echo $staffImage; ?>;" />
        </a>
        <div class="staff-member-info">
            <div class="staff-member-title-wrapper">
                <?php the_title("<h4 class='staff-member-title'>", "</h4>"); ?>

                <div class="staff-member-position">
                    <?php the_field("position"); ?>
                </div>
            </div>

            <div class="staff-member-contact-wrapper">
                <?php if (get_field("email")) : ?>
                <a href="mailto:<?php the_field("email"); ?>" class="staff-member-email">
                    <i class="fa fa-envelope"></i>
                </a>
                <?php endif; ?>
                <?php if (get_field("phone")) : ?>
                <a href="mailto:<?php the_field("phone"); ?>" class="staff-member-phone">
                    Phone: <?php the_field("phone"); ?>
                </a>
                <?php endif; ?>

            </div>

        </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
