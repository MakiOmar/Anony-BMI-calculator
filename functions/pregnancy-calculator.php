<?php
if ( !defined('ABSPATH') ) exit();

add_shortcode('anony-pregnancy-calculator', function($atts){
	
	wp_enqueue_script('abmi_pregnancy');
	
	ob_start();
	include(ABMI_DIR . 'templates/pregnancy-form.php');
	return ob_get_clean();
});