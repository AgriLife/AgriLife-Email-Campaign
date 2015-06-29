<?php
/**
 * Plugin Name: AgriLife Email Campaign
 * Plugin URI: https://github.com/AgriLife/AgriLife-Email-Campaign
 * Description: Email campaign script for administration mode of AgriLife websites. 
 * Version: 1.0
 * Author: Zach Watkins
 * Author URI: http://github.com/ZachWatkins
 * Author Email: watkinza@gmail.com
 * License: GPL2+
 */

// require 'vendor/autoload.php';

define( 'AG_EC_DIRNAME', 'agriLife-email-campaign' );
define( 'AG_EC_DIR_PATH', plugin_dir_path( __FILE__ ) );
define( 'AG_EC_DIR_FILE', __FILE__ );
define( 'AG_EC_DIR_URL', plugin_dir_url( __FILE__ ) );

require AG_EC_DIR_PATH . 'vendor/autoload.php';

// Register plugin activation functions
$activate = new \AgriLife\Core\Activate;
register_activation_hook( __FILE__, array( $activate, 'run') );

// Register plugin deactivation functions
$deactivate = new \AgriLife\Core\Deactivate;
register_deactivation_hook( __FILE__, array( $deactivate, 'run' ) );

$ext_asset = new \AgriLife\EmailCampaign\Asset();
