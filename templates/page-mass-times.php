<?php

/**
 * Template Name: Mass Times
 *
 * The template for displaying the mass times Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-mass-times" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>

        <?php if (have_rows("mass_times_days", "options")) : ?>
            <div class="mass-times-container grid-container limit-width">
                <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
                    <div class="mass-times-section">
                        <div class="mass-times-mid-section">
                          <h3 class="mass-times-title">
                              <?php the_sub_field("day"); ?>
                          </h3>
                          <?php while (have_rows("mass_times_times", "options")) : the_row(); ?>
                              <div class="mass-time">
                                  <div class="mass-time-day">
                                      <?php the_sub_field("mass_times_label"); ?>
                                  </div>
                                  <div class="mass-time-time">
                                      <?php the_sub_field("mass_times_time"); ?>
                                  </div>
                              </div>
                          <?php endwhile; ?>
                        </div>
                        <img src="<?php the_sub_field("image"); ?>">
                    </div>
                <?php endwhile; ?>

            </div>
        <?php endif; ?>
        <div class="limit-width">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer();
