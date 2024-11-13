<?php

/**
 * Template Name: Homepage
 *
 * The template for displaying the Homepage Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-homepage" id="main">
        <?php get_template_part("template-parts/homepage/hero","image"); ?>
        <?php get_template_part("template-parts/homepage/mission","statement"); ?>
        <?php get_template_part("template-parts/homepage/calendar"); ?>
    </main>
</div>

<?php get_footer();
