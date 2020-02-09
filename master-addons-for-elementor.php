<?php
/*
Plugin Name: Addon Master Pack for Elementor
Description: Addon Master Pack Plugin Includes some essential widgets for Elementor Page Builder.
Plugin URI: https://addonmaster.com
Version: 1.0.0
Author: AddonMaster.com
Author URI: https://addonmaster.com
Text Domain: ampfe
Domain Path: /lang
License: GNU General Public License v3.0
*/

if ( ! defined('ABSPATH') ) exit; // No access of directly access

// Define Constants
define('ADDONMASTER_PACK_VERSION', '1.0.0');
define('ADDONMASTER_PACK_URL', plugins_url( '/', __FILE__ ) );
define('ADDONMASTER_PACK_PATH', plugin_dir_path( __FILE__ ) );
define('ADDONMASTER_PACK_FILE', __FILE__);
define('ADDONMASTER_PACK_BASENAME', plugin_basename( ADDONMASTER_PACK_FILE ) );
define('ADDONMASTER_PACK_STABLE_VERSION', '3.11.0');

/**
 *	Main Class
 */
require_once( dirname( __FILE__ ) . '/includes/class-addon-master-pack.php' );

/**
 *	Main Function Initial
 */
function AMPDE_AddonMasterPackInit(){
	AMPDE_AddonMasterPack::instance();
}
AMPDE_AddonMasterPackInit();