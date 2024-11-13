<?php

/**
 * Enqueue scripts and styles.
 */
function stanScripts()
{
    /**
     * Slick Slider Lib
     */
    $file = get_template_directory_uri() . "/assets/slick-slider/slick.min.js";
    wp_enqueue_script('slick-lib', $file, array("jquery"), "1.8.1", false);

    /**
     * Slick Slider Lib
     */
    $file = get_template_directory_uri() . "/assets/masonry/masonry.min.js";
    wp_enqueue_script('masonry-lib', $file, array("jquery"), "4.2.2", false);

    /**
     * jQuery UI
     */
    wp_enqueue_script(
        'jquery-ui',
        'https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js',
        array('jquery'),
        '1.9.2'
    );

    /* Carousel */
    wp_enqueue_script(
        'materialize-js',
        'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    foreach (glob(get_template_directory() . "/assets/js/*.js") as $file) {
        $filename = substr($file, strrpos($file, '/') + 1);

        $hash = filemtime($file);

        wp_enqueue_script($filename, get_template_directory_uri() . "/assets/js/$filename", array("jquery"), $hash, false);
    }
}
add_action('wp_enqueue_scripts', 'stanScripts', 10);

function secondary_image() {
    wp_enqueue_script(
        'secondary-image-js',
        get_template_directory_uri() . '/assets/secondary-image.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('admin_init', 'secondary_image');
