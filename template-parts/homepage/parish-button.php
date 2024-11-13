<?php

/**
 * Partial template for a single featured button
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

if (get_sub_field('link')) :
    $link = get_sub_field('link');
    $icon  = get_sub_field('image');
    $content = get_sub_field('text');
    $target = $link['target'];
    $title  = $link['title'];
    $url    = $link['url'];
    if ($link["url"]) :?>

      <div class="featured-button">
          <img src="<?php echo $icon; ?>">
          <a href="<?php echo $url; ?>" target="<?php echo $target; ?>"
            title="<?php echo $title; ?>"><h2 class="button-title">
              <?php echo $title; ?>
          </h2></a>
          <p><?php echo $content;?></p>
      </div>
    <?php endif;
endif;
