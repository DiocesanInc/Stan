<?php

/**
 * Template part for displaying the calendar on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

?>

<?php if (get_field("calendar")) : ?>
<div class="calendar-container limit-width">
    <div class="calendar-inner">
        <?php do_shortcode("calendar id='" . the_field("calendar") . "'"); ?>
    </div>
</div>
<?php endif; ?>
