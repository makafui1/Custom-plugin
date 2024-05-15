<?php
/*
Plugin Name: Simple Custom Plugin Loader.

Description: Its primary purpose is to provide a structured approach to incorporating custom features into a WordPress site without cluttering the theme's functions.php file or creating multiple separate plugins.

Version: 1.0

Author: Leonard Senahey
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Define the plugin root file.
if (!defined('MY_PLUGIN_FILE')) {
    define('MY_PLUGIN_FILE', __FILE__);
}

// Include the main class.
require_once dirname(__FILE__) . '/includes/class-my-wordpress-plugin.php';

// Initialize the plugin.
add_action('plugins_loaded', array('My_WordPress_Plugin', 'get_instance'));
