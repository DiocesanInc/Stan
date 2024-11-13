<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Stan
 */

get_header();
?>
<div class="content-area" id="primary">
    <main id="primary" class="site-main entry-content single single-<?php echo get_post_type(); ?>">
        <?php get_template_part('template-parts/headers/page-header'); ?>
        <div class="single-container limit-width">

            <?php while (have_posts()) : the_post();
                if (get_post_type() === 'staff') :
                    get_template_part('template-parts/cpts/staff/single/staff', "biography");
                elseif (get_post_type() === "ministry") :
                    get_template_part('template-parts/cpts/ministries/singles/single', "ministry");
                else :
                    get_template_part("template-parts/content");
                endif;
            endwhile; ?>
        </div>
    </main><!-- #main -->
</div>
<?php
get_footer();