<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<div class="footer-wrapper limit-width">
    <img src="<?php echo get_field("footer_logo", "options")["url"]; ?>" alt="" class="footer-logo-mobile">
    <?php get_template_part("template-parts/footers/footer", "social-media"); ?>
    <?php get_template_part("template-parts/footers/footer", "quicklinks"); ?>
    <div class="contact-wrapper">
        <?php get_template_part("template-parts/footers/footer", "address"); ?>
        <?php get_template_part("template-parts/footers/footer", "contact"); ?>
    </div>
</div>
