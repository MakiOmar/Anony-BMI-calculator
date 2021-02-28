<?php
/**
 * Plugin Name: Anony BMI calculator
 * Plugin URI: https://makiomar.com/
 * Description: Calculate persons BMI dpending on gender, height and weight
 * Version: 0.1
 * Author: Makiomar
 * Author URI: https://makiomar.com/
 * License: GPLv2 or later
 * Text Domain: anony-bmi-calculator
 */
 
//plugin textdomain
define('ABMI_DOMAIN', 'anony-bmi-calculator');

//Plugin path
define('ABMI_DIR', wp_normalize_path( plugin_dir_path( __FILE__ )) ); 

//Plugin URI
define('ABMI_URI', plugin_dir_url( __FILE__ ));

require_once(ABMI_DIR . 'functions/scripts.php');
require_once(ABMI_DIR . 'functions/bmi-calculator.php');
require_once(ABMI_DIR . 'functions/pregnancy-calculator.php');

add_action( 'init', function(){
	load_plugin_textdomain(ABMI_DOMAIN , false,  dirname( plugin_basename( __FILE__ ) ) . '/languages');
} );