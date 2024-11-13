<?php

/**
 * The template for displaying quicklinks at the bottom of the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<div class="quicklinks-container">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-quicklinks',
            'menu_id'        => 'footer-quicklinks',
        )
    );
    ?>

</div>
