<?php

/**
 * Template part for displaying the ministry archive as a funnel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */


$groups = get_terms(
    array(
        'taxonomy'   => "ministry-group",
        'hide_empty' => false,
        "orderby" => "date",
        "order" => "DESC"
    )
);
?>

<div class="ministry-funnel">
    <?php foreach ($groups as $group) : ?>
        <?php $thumbnail = get_field("ministry_group_image", $group) ? get_field("ministry_group_image", $group)["url"] : get_field("default_featured_image", "options"); ?>
        <div class="ministry-group-wrapper">
            <a href="<?php echo get_term_link($group) ?>" class="ministry-group-link" style="background-image: url(<?php echo $thumbnail; ?>);">
                <h3 class="has-white-background-color-after has-white-color">
                    <?php echo $group->name; ?>
                </h3>
            </a>
        </div>
    <?php endforeach; ?>
</div>
