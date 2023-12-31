<?php

/**
 * @package SD House Guys Custom Plugin
 */

/*
Plugin Name: SD House Guys Custom Plugin
Plugin URI: https://sdhouseguys.com/
Description: A custom plugin exclusively for SD House Guys.
Version: 1.0.0
Requires at least: 5.8
Requires PHP: 5.6.20
Author: Frank Luongo
Author URI: https://frankluongo.com
License: GPLv2 or later
Text Domain: sdhouseguys
*/

// FIRST: Check to see that Wordpress is defined before doing anything
defined('ABSPATH') or die('Wordpress is not active');
// If this file is called directly, abort.
if (!defined('WPINC')) die;

// import the files in the includes folder
// ======================================================================================
require_once plugin_dir_path(__FILE__) . 'includes/acf_options.php';
require_once plugin_dir_path(__FILE__) . 'includes/acf_podio_settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/api_podio_investor_form.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcode_podio_investor_form.php';
