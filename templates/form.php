<?php if ( !defined('ABSPATH') ) exit();?>

<form action="" method="get">
	
	<div class="anony-bmi-field">
		<label for="form-field-bmi_age"><?= esc_html__( 'Your gender?', ABMI_DOMAIN ) ?></label>
		<input type="radio" id="male" name="form_fields[bmi_gender]" value="male" checked><?= esc_html__( 'Male', ABMI_DOMAIN ) ?>
		<input type="radio" id="female" name="form_fields[bmi_gender]" value="female"><?= esc_html__( 'Female', ABMI_DOMAIN ) ?>	
	</div>
	
	<div class="anony-bmi-field">
		<label for="form-field-bmi_age"><?= esc_html__( 'Your age?', ABMI_DOMAIN ) ?></label>
		<input type="number" name="form_fields[bmi_age]" id="form-field-bmi_age" placeholder="21" required="required" aria-required="true" min="" max="">
		
	</div>
	
	<div class="anony-bmi-field">
		<label for="form-field-bmi_height"><?= esc_html__( 'Your height?', ABMI_DOMAIN ) ?></label>
		<input type="number" name="form_fields[bmi_height]" id="form-field-bmi_height" placeholder="<?= esc_html__( '170 cm', ABMI_DOMAIN ) ?>" required="required" aria-required="true" min="" max="">
		
	</div>
	
	<div class="anony-bmi-field">
		<label for="form-field-bmi_height"><?= esc_html__( 'Your weight?', ABMI_DOMAIN ) ?></label>
		<input type="number" name="form_fields[bmi_weight]" id="form-field-bmi_weight" placeholder="<?= esc_html__( '60 kg', ABMI_DOMAIN ) ?>" required="required" aria-required="true" min="" max="">
		
	</div>
	
	<button type="submit" id="bmi-calculate"><?= esc_html__( 'Calculate BMI', ABMI_DOMAIN ) ?></button>
	
</form>

<div id="bmi-result-bar">
    <div id="bmi-pointer-container">
		<div id="bmi-result-pointer">0</div>
	</div>
	<div id="bmi-steps-container">
		<div class="step s-1"></div>
		<div class="step s-2"></div>
		<div class="step s-3"></div>
		<div class="step s-4"></div>
		<div class="step s-5"></div>
	<!--<div class="step s-6"></div>-->
	</div>
	
</div>
<div class="bmi-result-wrapper">
    <div class="bmi-result-item">
		<p class="bmi-result-title"><?= esc_html__( 'Your BMI', ABMI_DOMAIN ) ?></p>
		<p id="bmi-number" class="bmi-result">............</p>
	</div>

    <div class="bmi-result-item">
		<p class="bmi-result-title"><?= esc_html__( 'Body status', ABMI_DOMAIN ) ?></p>
		<p id="bmi-status" class="bmi-result">............</p>
	</div>
	<div class="bmi-result-item">
		<p class="bmi-result-title"><?= esc_html__( 'Your normal weight', ABMI_DOMAIN ) ?></p>
		<p id="bmi-normal" class="bmi-result">............</p>
	</div>
	<div class="bmi-result-item">
		<p class="bmi-result-title"><?= esc_html__( 'Your optimal weight', ABMI_DOMAIN ) ?></p>
		<p id="bmi-ideal" class="bmi-result">............</p>
	</div>
    
</div>