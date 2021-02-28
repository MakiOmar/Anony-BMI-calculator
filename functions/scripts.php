<?php

if ( !defined('ABSPATH') ) exit();

function abmi_styles(){
		
	$styles = array('bmi' => 'bmi');
		
	$styles_libs = [];
	
	$styles = array_merge($styles, $styles_libs);
	
	foreach($styles as $style => $file_name){
		
		$handle = in_array($style, array_keys($styles_libs)) ? $style : 'abmi_' . $style;
		
		wp_enqueue_style( 
			$handle, 
			ABMI_URI . 'assets/css/'.$file_name.'.css', 
			false,
			filemtime(
				wp_normalize_path(ABMI_DIR . 'assets/css/'.$file_name.'.css' )
			) 
		);
	}
	
	if (is_rtl()) {
		wp_enqueue_style( 
			'bmi-rtl', 
			ABMI_URI . 'assets/css/bmi-rtl.css', 
			false,
			filemtime(
				wp_normalize_path(ABMI_DIR . 'assets/css/bmi-rtl.css' )
			) 
		);
	}
	
	

}

function abmi_scripts(){	
	$scripts = array(
		'bmi' => 'bmi',
		'pregnancy' => 'pregnancy',
	);
	
	$libs_scripts = [];
	
	$scripts = array_merge($scripts, $libs_scripts);
	
	foreach($scripts as $script => $file_name){
		
		$handle = in_array($script, $libs_scripts) ? $script : 'abmi_' . $script;
		
		wp_register_script( 
			$handle , 
			ABMI_URI . 'assets/js/'.$file_name.'.js' ,
			['jquery'],
			filemtime(
				wp_normalize_path(ABMI_DIR . 'assets/js/'.$file_name.'.js' )
			), 
			true 
		);
	}
	
	wp_localize_script( 'abmi_bmi', 'BMI_l10n', [
	
		'isRtl' => is_rtl(),
		'slim' => esc_html__( 'Slim', ABMI_DOMAIN ),
		'normal' => esc_html__( 'Normal', ABMI_DOMAIN ),
		'over' => esc_html__( 'Over weight', ABMI_DOMAIN ),
		'obese' => esc_html__( 'Obese', ABMI_DOMAIN ),
	
	] );
	
}

//Theme Scripts
add_action('wp_enqueue_scripts',function() {
	
	abmi_styles();
	abmi_scripts();
	

});