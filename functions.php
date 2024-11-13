<?php

/**
 * Stan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stan
 */

require_once get_template_directory() . '/blocks/index.php';

$inc = get_template_directory() . "/inc";

foreach (glob("/$inc/*.php") as $file) {
    include_once $file;
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Check if ACF is installed and show an error message if not
 *
 * @return void
 */
function acfIsInstalled()
{
    if (is_admin() && (!function_exists('get_field') || !function_exists('have_rows'))) {
        setErrorNotice("There’s a problem with Advanced Custom Fields. It might not be installed");
        return false;
    }
    return true;
}

/**
 * Set an error message
 *
 * @param string $message
 * @return void
 */
function setErrorNotice($message = "")
{
    echo "<div class='error notice'>
        <p>$message</p>
    </div>";
}

function getDefaultPlaceholderImage()
{
    return get_template_directory_uri() . "/assets/img/stan_placeholder.png";
}

require get_template_directory() . "/update-checker/plugin-update-checker.php";

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/DiocesanInc/Stan',
    __FILE__,
    'stan'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');
