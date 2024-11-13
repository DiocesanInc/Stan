<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Stan
 */

 $header = get_field("mission_header");
$content = get_field("mission_statement");
?>


<div class="mission-container limit-width">
    <div class="mission-content-wrapper">
        <?php if ($header) : ?>
        <h3 class="mission-header">
            <?php echo $header; ?>
        </h3>
        <?php endif; ?>
        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
