<?php

/**
 * @package AlecadddPlugin
 */

/*
Plugin Name: AlecadddPlugin
Plugin URI: https://akismet.com/
Description: Used by millions, Akismet is quite possibly the best way in the world to <strong>protect your blog from spam</strong>. It keeps your site protected even while you sleep. To get started: activate the Akismet plugin and then go to your Akismet Settings page to set up your API key.
Version: 4.1.2
Author: Automattic
Author URI: https://automattic.com/wordpress-plugins/
License: GPLv2 or later
Text Domain: akismet
*/

defined('ABSPATH') or die('Hey, what are you doing here? You silly human!');
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

define('PLUGIN_PATH', plugin_dir_path(__FILE__)); //plugin root path
define('PLUGIN_URL', plugin_dir_url(__FILE__));

if (class_exists('Inc\\init')) {
    Inc\init::register_services();
}
