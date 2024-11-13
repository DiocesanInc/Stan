<?php

/**
 * Partial for the hero section: Image(s).
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

$slideClasses = get_field("parallax_scrolling") ? "hero-slide parallax" : "hero-slide";

?>
<?php if (have_rows("slider")) : ?>
<div class="hero">
    <div class="hero-slider">
      <?php $slideCount = 0;
        while (have_rows("slider")) : the_row();
                $bgImg = get_sub_field("image");
            ?>

        <div class="preload-this <?php echo $slideClasses; ?>"
            style="background-image: url(<?php echo $bgImg["url"] ?>)">

            <?php
              //var_dump($slideCount);
                    $size = "thumbnail";
                    $previewImg = wp_get_attachment_image_src($bgImg["ID"], "bgImgPreview"); ?>
            <img src="<?php echo $previewImg[0] ?>" class="preview-image" alt="hero-preview" />


            <?php get_template_part("template-parts/homepage/hero", "overlay"); ?>

            <?php if($slideCount == 0):
              get_template_part("template-parts/homepage/hero", "mass");
              else:
              get_template_part("template-parts/homepage/hero", "info");
            endif;?>
        </div>
        <?php $slideCount++;?>
        <?php endwhile; ?>
    </div>
    <?php get_template_part("template-parts/homepage/hero", "buttons"); ?>
</div>
<?php endif;
