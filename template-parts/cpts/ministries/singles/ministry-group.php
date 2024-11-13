<?php

/**
 * The template for displaying a single ministry group.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stan
 */

$staffMembers = get_field("contacts");
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_field("default_featured_image", "options");
?>

<div class="teaser-box">
    <img class="teaser-img" src="<?php echo $thumbnail; ?>" />
    <div class="teaser-content-wrapper">
        <div class="teaser-content">
            <h4 class="teaser-title"><?php the_title() ?></h4>

            <div class="contact-persons">
                <?php foreach ($staffMembers as $staffMember) :
                    $name = $staffMember["is_staff"] ? $staffMember["contact"]->post_title : $staffMember["contact_name"];
                    $email = $staffMember["is_staff"] ? get_field("email", $staffMember["contact"]->ID) : $staffMember["contact_email"];
                    $phone = $staffMember["is_staff"] ? get_field("phone", $staffMember["contact"]->ID) : $staffMember["contact_phone_number"];
                ?>
                <div class="contact-person">
                    <div class="contact-person-name has-secondary-color">
                        <?php echo $name; ?>
                    </div>


                    <?php if ($phone !== "") : ?>
                    <span class="contact-person-phone">
                        <a href="<?php echo phoneLink($phone); ?>"
                            class="has-special-hover has-primary-background-color-before">
                            <?php echo $phone; ?>
                        </a>
                    </span>
                    <?php endif; ?>

                    <?php if ($email !== "") : ?>
                    <span class="contact-person-email">
                        <a href="mailto: <?php echo $email; ?>"
                            class="has-special-hover has-primary-background-color-before">
                            Email
                        </a>
                    </span>
                    <?php endif; ?>


                </div>
                <?php endforeach; ?>
            </div>

            <div class="excerpt">
                <?php the_content() ?>
            </div>
        </div>
    </div>
</div>