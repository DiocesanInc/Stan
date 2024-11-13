<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<div class="footer-contact">

    <?php if (get_field("phone", "options")) : ?>
    <div class="phone">
        P:
        <?php echo phoneLink(get_field("phone", "options"), true, "has-custom-hover has-quaternary-background-color-after"); ?>
    </div>
    <?php endif; ?>

    <?php if (get_field("fax", "options")) : ?>
    <div class="fax">
        F: <?php the_field("fax", "options"); ?>
    </div>
    <?php endif; ?>

    <?php if (get_field("email", "options")) : ?>
    <div class="email">
        <?php echo emailLink(get_field("email", "options"), get_field("email", "options"), "has-custom-hover has-quaternary-background-color-after"); ?>
    </div>
    <?php endif; ?>

</div>