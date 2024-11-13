<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<div class="site-info">
    <div class="copyright">Copyright © <?php echo date("Y"); ?> <a href="<?php echo home_url(); ?>"
            class="homelink has-custom-hover has-quaternary-background-color-after"
            title="Home"><?php echo get_bloginfo("name"); ?></a>
    </div>
    <div class="diocesan">
        Made with <span class="heart">♥</span> by <a href="https://www.diocesan.com"
            class="diocesan-link has-custom-hover has-quaternary-background-color-after" title="Diocesan">Diocesan</a>
    </div>
</div>
