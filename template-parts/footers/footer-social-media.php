<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stan
 */

?>

<?php if (have_rows("footer_social_media", "options")) : while (have_rows("footer_social_media", "options")) : the_row() ?>
<div class="footer-social-media">
    <img src="<?php echo get_field("footer_logo", "options")["url"]; ?>" alt="" class="footer-logo">
    <!-- <?php if (have_rows("social_media", "options")) : ?>
    <ul class="social-media-link-list">
        <?php while (have_rows("social_media", "options")) : the_row();
                        $link = get_sub_field("link");
                        $logo = get_sub_field("logo");
                    ?>
        <li class="social-media-link">
            <a href="<?php echo $link; ?>"><?php echo $logo; ?></a>
        </li>
        <?php endwhile; ?>
    </ul>
    <?php endif; ?> -->
</div>
<?php endwhile;
endif; ?>
