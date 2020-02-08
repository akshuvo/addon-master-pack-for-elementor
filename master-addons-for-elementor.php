<?php
/*
Plugin Name: Master Addons for Elementor
Description: Master Addons Plugin Includes some essential widgets for Elementor Page Builder.
Plugin URI: https://addonmaster.com
Version: 1.0.0
Author: AddonMaster.com
Author URI: https://addonmaster.com
Text Domain: mafe
Domain Path: /lang
License: GNU General Public License v3.0
*/

if ( ! defined('ABSPATH') ) exit; // No access of directly access

// Define Constants
define('MASTER_ADDONS_VERSION', '1.0.0');
define('MASTER_ADDONS_URL', plugins_url( '/', __FILE__ ) );
define('MASTER_ADDONS_PATH', plugin_dir_path( __FILE__ ) );
define('MASTER_ADDONS_FILE', __FILE__);
define('MASTER_ADDONS_BASENAME', plugin_basename( MASTER_ADDONS_FILE ) );
define('MASTER_ADDONS_STABLE_VERSION', '3.11.0');