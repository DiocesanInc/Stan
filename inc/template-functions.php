<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Stan
 */



if (!function_exists("getClasses")) {
    function getClasses($classes)
    {
        return $classes !== null ? "class='$classes'" : "";
    }
}

if (!function_exists('phoneLink')) {
    /**
     * Convert phone numbers into links.
     *
     * @param string $input.
     * @return string $output.
     */
    function phoneLink($input, $a_tag = false, $classes = null)
    {
        $tel = preg_replace('/[^0-9]+/', '', $input);
        $output = "tel:+1-" . substr($tel, 0, 3) . "-" . substr($tel, 3, 3) . "-" . substr($tel, 6, 4);
        if (strlen($tel) > 10) $output .= "," . substr($tel, 10);

        if ($a_tag) {
            $classes = getClasses($classes);
            $output = "<a $classes href=$output>$input</a>";
        }

        return $output;
    }
}

if (!function_exists("emailLink")) {
    function emailLink($email, $text = "Email Me", $classes = null)
    {
        $classes = getClasses($classes);
        return "<a $classes href='mailto: $email'>$text</a>";
    }
}

if (!function_exists('acfLink')) {
    /**
     * Create simple links from ACF Link Array.
     *
     * @param string $link    the href for the a tag
     * @param string $class   css classes for the a tag
     * @param string $content content between the opening and closing tag
     * @param bool   $button  make the a tag a button tag instead
     *
     * @return string
     */
    function acfLink($link, $class = null, $content = null, $button = null)
    {
        if ($link) {
            $tag = $button ? "button" : "a";
            $url = is_array($link) && $link['url'] ? $link['url'] : $link;
            $target = is_array($link) && $link["target"] ? $link['target'] : '';
            $title = is_array($link) ? ($link['title'] !== "" ? $link["title"] : "Read more") : $link;

            $className = $class ? " class=\"$class\"" : '';
            $content = $content ? $content : $title;

            return "<$tag href=\"$url\"$className target=\"$target\" title=\"$title\">$content</$tag>";
        }
    }
}

if (!function_exists("getField")) {
    /**
     * Adds fallback value to get_field().
     *
     * Calls get_field() and either returns it if it has a value or returns the passed default value
     *
     * @param [type] $selector
     * @param boolean $post_id
     * @param boolean $format_value
     * @param [type] $default_value
     * @return void
     */
    function getField($selector, $post_id = false, $format_value = true, $default_value = null)
    {
        return get_field($selector, $post_id, $format_value) && get_field($selector, $post_id, $format_value) !== "" ? get_field($selector, $post_id, $format_value) : $default_value;
    }
}

if (!function_exists("add_search_form")) {
    function add_search_form($items, $args)
    {
        if ($args->theme_location == 'menu-1') {
            ob_start();
            get_template_part("template-parts/headers/search-form-desktop");
            $search_desktop = ob_get_contents();
            ob_end_clean();

            ob_start();
            get_template_part("template-parts/headers/search-form-mobile");
            $search_mobile = ob_get_contents();
            ob_end_clean();

            $items = $items . $search_mobile . $search_desktop;
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
}

add_filter("post_thumbnail_html", "defaultPostThumbnail", 20, 5);

function defaultPostThumbnail($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (!empty($html)) return $html;
    if (getDefaultFeaturedImage()) {
        return "<img src=" . getDefaultFeaturedImage(true) . " />";
    }
    return theDefaultPostThumbnail($html, $post_id, $post_thumbnail_id, $size, $attr);
}

function theDefaultPostThumbnail($html = null, $post_id = null, $post_thumbnail_id = null, $size = "thumbnail", $attr = null)
{
    echo "<img src=" . get_template_directory_uri() . "/assets/img/stan_placeholder.png" . " />";
    return;
}


function getMinistryPostObject()
{
    return get_field("ministries", "options")["ministry_groups_back_button"];
}

if (!function_exists("my_form_submit_button")) {
    function my_form_submit_button($button, $form)
    {
        $fragment = WP_HTML_Processor::create_fragment($button);
        $fragment->next_token();
        $fragment->add_class('the-button');

        return $fragment->get_updated_html();
    }
    add_filter('gform_submit_button', 'my_form_submit_button', 10, 2);
}


// Add second featured image
add_action('add_meta_boxes', 'listing_image_add_metabox');
function listing_image_add_metabox()
{
    add_meta_box('listingimagediv', __('Listing Image', 'text-domain'), 'listing_image_metabox', 'post', 'side', 'low');
}

function listing_image_metabox($post)
{
    global $content_width, $_wp_additional_image_sizes;

    $image_id = get_post_meta($post->ID, '_listing_image_id', true);

    $old_content_width = $content_width;
    $content_width = 254;

    if ($image_id && get_post($image_id)) {

        if (! isset($_wp_additional_image_sizes['post-thumbnail'])) {
            $thumbnail_html = wp_get_attachment_image($image_id, array($content_width, $content_width));
        } else {
            $thumbnail_html = wp_get_attachment_image($image_id, 'post-thumbnail');
        }

        if (! empty($thumbnail_html)) {
            $content = $thumbnail_html;
            $content .= '<p class="hide-if-no-js"><a href="javascript:;" id="remove_listing_image_button" >' . esc_html__('Remove listing image', 'text-domain') . '</a></p>';
            $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="' . esc_attr($image_id) . '" />';
        }

        $content_width = $old_content_width;
    } else {

        $content = '<img src="" style="width:' . esc_attr($content_width) . 'px;height:auto;border:0;display:none;" />';
        $content .= '<p class="hide-if-no-js"><a title="' . esc_attr__('Set listing image', 'text-domain') . '" href="javascript:;" id="upload_listing_image_button" id="set-listing-image" data-uploader_title="' . esc_attr__('Choose an image', 'text-domain') . '" data-uploader_button_text="' . esc_attr__('Set listing image', 'text-domain') . '">' . esc_html__('Set listing image', 'text-domain') . '</a></p>';
        $content .= '<input type="hidden" id="upload_listing_image" name="_listing_cover_image" value="" />';
    }

    echo $content;
}

add_action('save_post', 'listing_image_save', 10, 1);
function listing_image_save($post_id)
{
    if (isset($_POST['_listing_cover_image'])) {
        $image_id = (int) $_POST['_listing_cover_image'];
        update_post_meta($post_id, '_listing_image_id', $image_id);
    }
}


function wpdocs_selectively_enqueue_admin_script($hook)
{
    if ('post.php' != $hook) {
        return;
    }
    wp_enqueue_script('secondimage', get_template_directory_uri() . '/assets/secondimage.js', array(), '1.0');
}
add_action('admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script');
