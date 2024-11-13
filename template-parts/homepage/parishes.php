<?php

/**
 * Partial for the Homepage template's parish.
 *
 * @package Celine
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 */


if (have_rows('parish_buttons')&&(get_field('buttons_or_scroll') == 1)) : ?>
<div class="featured-buttons"
    data-btns="<?php echo count(get_field('parish_buttons')); ?>">
    <div class="featured-buttons-wrapper parishButtons">
        <?php while (have_rows('parish_buttons')) : the_row();
            get_template_part("template-parts/homepage/parish", "button");
        endwhile; ?>
    </div>
</div>
<?php elseif(have_rows('parish_scroll')&&(get_field('buttons_or_scroll') == 0)) : ?>
<div class="parishFlex">
  <h1><?php the_field('parish_scroll_title');?></h1>
<?php get_template_part('template-parts/homepage/carousel', 'arrows', ['controls' => 'testimonials-carousel']); ?>
  <div class="parishScroll"
      data-btns="<?php echo count(get_field('parish_scroll')); ?>">
      <div class="testimonials-carousel carousel">
          <?php while (have_rows('parish_scroll')) : the_row();?>
            <div class="testimonial carousel-item">
              <?php $link = get_sub_field('parish');?>
                <a href="<?= $link['url'];?>" target="<?= $link['target'];?>"><h4 class="testimonial-title"><?= $link['title'];?></h4></a>
            </div>
          <?php endwhile; ?>
      </div>
  </div>
</div>
<?php endif;
