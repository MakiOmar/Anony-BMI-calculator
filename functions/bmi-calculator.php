<?php
if ( !defined('ABSPATH') ) exit();

add_shortcode('anony-bmi-calculator', function($atts){
	
	ob_start();
	include(ABMI_DIR . 'templates/form.php');
	return ob_get_clean();
});