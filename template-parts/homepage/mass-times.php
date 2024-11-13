<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

?>

<?php if (have_rows("mass_times_days", "options")) : ?>

<div class="mass-times-items banner-items">
    <?php while (have_rows("mass_times_days", "options")) : the_row() ?>
    <div class="mass-times-item banner-item">

        <div class="mass-times-day banner-item-heading">
            <?php the_sub_field("day"); ?>
        </div>

        <?php while (have_rows("mass_times_times", "options")) : the_row() ?>
        <div class="banner-item-content">
            <div class="mass-times-item-label">
                <?php the_sub_field("mass_times_label"); ?>
            </div>

            <div class="mass-times-item-time">
                <?php the_sub_field("mass_times_time"); ?>
            </div>
        </div>

        <?php endwhile; ?>
    </div>

    <?php endwhile; ?>
</div>
<div class="mass-times-link">
    <a href="<?php echo get_field("mass_times_link")["url"]; ?>" class="the-button" title="Full Schedule">
        <?php echo get_field("mass_times_link")["title"]; ?>
    </a>
</div>
<?php endif; ?>
