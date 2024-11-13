<?php

/**
 * Partial for the hero section: Mass Times
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

$mass_times = get_field("hero_buttons");
?>

<?php if ($mass_times) : ?>

<div class="hero-mass-times">

    <?php while(have_rows("hero_buttons")) : the_row();?>
      <!-- <button class="the-button mass-time-wrapper"> -->
          <?php echo acfLink(get_sub_field("link")["url"], "the-button mass-time-wrapper", get_sub_field("link")["title"]); ?>
      <!-- </button> -->
      <!-- <div class="mass-time-wrapper">
        <?php $day = get_sub_field('day','options');?>
        <?php $times = get_sub_field('mass_times_times','options');?>
          <div class="mass-time-day">
              <h3><?php echo $day; ?></h3>
          </div>

          <div class="mass-times-list">
              <?php foreach ($times as $time) : ?>
              <span>
                  <?php echo $time["mass_times_label"] .': '. $time["mass_times_time"]; ?>
              </span>
              <?php endforeach; ?>
          </div>
      </div> -->
    <?php endwhile;?>
    <!-- <div class="mass-times-schedule-link">
        <?php echo acfLink(get_field("hero_mass_times_link")["url"], "the-button", get_field("hero_mass_times_link")["title"]); ?>
    </div> -->
</div>

<?php endif; ?>
