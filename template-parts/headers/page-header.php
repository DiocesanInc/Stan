<?php

/**
 * Partial for the page header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

// if ($args["headerImg"]) {
//     $headerImg = $args["headerImg"];
// } else {
//     if (has_post_thumbnail()) {
//         $headerImg = get_the_post_thumbnail_url(null, "large");
//     } else {
//         $headerImg = getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/stan_placeholder.png";
//     }
// }

$headline = $args["headline"] ? "<h1 class='entry-title'>" . $args["headline"] . "</h1>" : "<h1 class='entry-title'>" . get_the_title() . "</h1>";
?>

<div class="entry-header page-header">
    <?php echo $headline; ?>
    <!-- <div class="overlay" style="opacity: <?php the_field("page_header_overlay", "options"); ?>"></div> -->
</div><!-- .entry-header -->
