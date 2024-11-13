<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

$image = get_field("mission_background_image")["url"];
$position = get_field("mission_content_position");
$header = get_field("mission_header");
$content = get_field("mission_content");
?>


<div class="mission-container limit-width">
    <?php if ($header) : ?>
    <h3 class="mission-header">
        <?php echo $header; ?>
    </h3>
    <?php endif; ?>
    <div class="mission-content-wrapper <?php echo $position; ?>">
        <?php if ($image) : ?>
        <img src="<?php echo $image; ?>" class="mission-image" alt="" />
        <?php endif; ?>

        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
    </div>
    <div class="mission-link-wrapper">

        <?php echo acfLink(get_field("mission_link")["url"], "the-button", get_field("mission_link")["title"]); ?>
    </div>
</div>