<?php

/**
 * Partial for the hero section: Info
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

?>

<?php if (get_sub_field("title") || get_field("hero_buttons")) : ?>
<div class="hero-info">
    <?php if (get_sub_field("title")) : ?>
    <h1 class="hero-title has-white-color">
        <?php the_sub_field("title") ?>
    </h1>
    <?php endif; ?>

    <?php if (get_sub_field("hero_buttons")) : ?>
    <div class="hero-buttons">
        <?php foreach (get_sub_field("hero_buttons") as $button) :
                    $color = $button["color"];
                    echo acfLink($button["link"], "the-button $color", null);
                endforeach; ?>
    </div>
    <?php endif; ?>
</div>
<?php endif;
