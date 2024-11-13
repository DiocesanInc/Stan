<?php

/**
 * The template for displaying quicklinks at the top of the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<div class="quicklinks-top-container">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-quicklinks-top',
            'menu_id'        => 'footer-quicklinks-top',
            'walker' => new FooterTopWalkerNavMenu()
        )
    );
    ?>
</div>
