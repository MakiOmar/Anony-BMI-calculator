jQuery(document).ready(function($){
	var bmi_pointer_container_width = 0;
	$('.step').each(function(){
		bmi_pointer_container_width += $(this).outerWidth();
	});
	$("#bmi-pointer-container").css('width', bmi_pointer_container_width + 'px' );
    $('#bmi-calculate').on('click', function(e){
        event.preventDefault();
        
        var gender = $("[name='form_fields[bmi_gender]']:checked").val();
        var age = parseInt($("[name='form_fields[bmi_age]']").val());
        var height = parseInt($("[name='form_fields[bmi_height]']").val())/100;
        var weight = parseInt($("[name='form_fields[bmi_weight]']").val());

		
		var base_weight = 50;

		if(gender === 'female'){
			base_weight = 45.5
		}

		//Ideal body weight at 25 BMI
		var cm_h = height * 100;
		var v = cm_h - 152.4;
		var adj_IBW = base_weight + (0.91 * v);

        var finalBmi = new Number(weight/(height*height)).toFixed(2);

        var bmi_status;
        if(finalBmi < 18.5){
			bmi_status = BMI_l10n.slim
		}

		if(finalBmi > 18.5 && finalBmi < 25){
			bmi_status = BMI_l10n.normal
		}

		if(finalBmi > 25 && finalBmi < 30){
			bmi_status = BMI_l10n.over
		}

		if(finalBmi > 30 && finalBmi < 35){
			bmi_status = BMI_l10n.obese
		}

		if(finalBmi > 35){
			bmi_status = BMI_l10n.obese
		}
        $("#bmi-result-pointer").text(finalBmi);
        $("#bmi-result-pointer").css({ 
            'visibility' : 'visible',
            'opacity' : '1',
        });
        console.log(BMI_l10n.isRtl);
        if (BMI_l10n.isRtl === '1') {
        	$("#bmi-result-pointer").css({ 
	            'right' :'calc(' + finalBmi + '% - 25px)' 
	        });
        }else{
        	$("#bmi-result-pointer").css({ 
	            'left' :'calc(' + finalBmi + '% - 25px)' 
	        });
        }
        $("#bmi-number").text(finalBmi);
        $("#bmi-status").text(bmi_status);
		$("#bmi-ideal").text(adj_IBW.toFixed(2));
		$("#bmi-normal").text(cm_h-100);
    });

    
});