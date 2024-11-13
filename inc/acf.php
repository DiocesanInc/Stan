<?php
if (acfIsInstalled()) {
    //addTheme Settings
    acf_add_options_page(
        array(
            'page_title'      => 'Theme General Settings',
            'menu_title'      => 'Theme Settings',
            'menu_slug'       => 'theme-general-settings',
            'capability'      => 'edit_posts',
            'redirect'        => false
        )
    );

    //add Header Settings
    acf_add_options_sub_page(
        array(
            'page_title'     => 'Theme Header Settings',
            'menu_title'     => 'Header Settings',
            'parent_slug'    => 'theme-general-settings',
        )
    );

    //add Footer Settings
    acf_add_options_sub_page(
        array(
            'page_title'     => 'Theme Footer Settings',
            'menu_title'     => 'Footer Settings',
            'parent_slug'    => 'theme-general-settings',
        )
    );

    //add Template Settings
    acf_add_options_page(
        array(
            'page_title'     => 'Template Settings',
            'menu_title'     => 'Template Settings',
            'menu_slug'      => 'template-settings',
            'capability'     => 'edit_posts',
            'icon_url'       => 'dashicons-admin-tools',
            'redirect'       => false
        )
    );

    function getDefaultFeaturedImage($format_value = false)
    {
        return get_field("default_featured_image", "options", $format_value);
    }

    if (!function_exists("customAcfRenderField")) {
        /**
         * Fallback for get_field() type=image.
         *
         * Loads Default image set in:
         * Theme Settings -> General Settings -> Default Featured Image
         * if get_field() has been called for an image without passing an image
         *
         * @param [type] $value
         * @return void
         */
        function customAcfRenderField($value = null)
        {
            //return image if available
            if ($value) {
                return $value;
            }

            //return default featured image if set in theme settings
            if (getDefaultFeaturedImage()) {
                return getDefaultFeaturedImage();
            }

            //return default place holder image
            return getDefaultPlaceholderImage();
        }
        add_filter("acf/format_value/type=image", "customAcfRenderField");
    }

    function load_acf_file($filename)
    {
        include_once get_stylesheet_directory() . "/acf/$filename.php";
    }

    load_acf_file("homepage");
}