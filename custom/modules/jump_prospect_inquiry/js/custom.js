
SUGAR.util.doWhen("typeof $ != 'undefined'", function(){


	// disable company fields
	$("#company_name_c").attr("disabled", "disabled");
	$("#website_c").attr("disabled", "disabled");
	$("#business_phone_c").attr("disabled", "disabled");

	// remove age borders/readonly
	$("#age_c").attr("readonly", "readonly");
	
	// birthdate
	var bdate = $("#birthdate_c").val();
	$(document).on('click', '.selector', function(event) {

		var bdate_new = $("#birthdate_c").val();

		var dob = bdate_new;
		dob = new Date(dob);
		var today = new Date();
		var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

		if( age <= 0 ){
			alert("Please input a valid birthdate.");
			$("#birthdate_c").val('')
		}
		else{
			$("#age_c").val(age)	
		}	


	});


	// prospect type
	$(document).on('change', '#prospect_type_c', function(event) {
		event.preventDefault();
		var curVal = $(this).val();

		if( curVal == "individual" ){
			$("#company_name_c").attr("disabled", "disabled");
			$("#website_c").attr("disabled", "disabled");
			$("#business_phone_c").attr("disabled", "disabled");

			$("#gender_c").removeAttr("disabled");
			$("#marital_status_c").removeAttr("disabled");

		}

		else{
			$("#company_name_c").removeAttr("disabled");
			$("#website_c").removeAttr("disabled");
			$("#business_phone_c").removeAttr("disabled");

			$("#gender_c").attr("disabled", "disabled");
			$("#marital_status_c").attr("disabled", "disabled");

		}
	});


});

