<?php

/**
 * Partial for the hero section: Info
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

?>

<?php  $mass_times = get_field("mass_times_days", "options"); //get mass times from theme settings

if ($mass_times) : ?>
<div class="hero-mass">
  <?php while(have_rows("mass_times_days", "options")): the_row();?>
  <?php $day = get_sub_field('day','options');?>
  <?php $times = get_sub_field('mass_times_times','options');?>
    <div class="mass-time-day">
        <h1><?php echo $day; ?></h1>
    </div>

    <div class="mass-times-list">
        <?php foreach ($times as $time) : ?>
        <span>
            <?php echo $time["mass_times_label"] .': '. $time["mass_times_time"]; ?>
        </span>
        <?php endforeach; ?>
    </div>
  <?php endwhile;?>
</div>
<?php endif;
