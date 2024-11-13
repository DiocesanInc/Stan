<?php

/**
 * Partial for the hero section: Mass Times
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

$mass_times = get_field("mass_times_days", "options"); //get mass times from theme settings
// $today = new DateTime("today"); //get a DateTime object of today
//
// $today_index = $today->format("w"); //get today's number of day in the week
//
// $i = 0; //set an index
// foreach ($mass_times as $day) :
//
//     $dt = new DateTime($day["day"]); //get a dateTime object for each day of the mass time schedule
//     $dti = $dt->format("w"); //get the day's number in the week
//
//     if ($dti >= $today_index) break; //if day is later than or equal to today, break the loop
//
//     $i++; //increase index
//
// endforeach;
//
// $schedule[] = $mass_times[$i]; //get next mass time on the schedule
// $schedule[] = $mass_times[$i + 1] ?  $mass_times[$i + 1] : $mass_times[0]; //get the mass time after the next one on the schedule

?>

<?php if ($mass_times) : ?>

<div class="hero-mass-times">

    <?php while(have_rows("mass_times_days", "options")) : the_row();?>
      <div class="mass-time-wrapper">
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
      </div>
    <?php endwhile;?>
    <!-- <div class="mass-times-schedule-link">
        <?php echo acfLink(get_field("hero_mass_times_link")["url"], "the-button", get_field("hero_mass_times_link")["title"]); ?>
    </div> -->
</div>

<?php endif; ?>
