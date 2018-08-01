<?php

	$activation_status = $this->bean->activation_status_c;

?>

<script>
	
	$(function(){

		var act_status = "<?=strtolower($activation_status)?>"

		if( act_status == 'active' ){
			$(".module-title-text").append( "<small class='text-success'><b>( " + act_status + " )</b></small>" );

			$("#tab-actions").after("<button class='btn btn-danger master_btns'><span class='glyphicon glyphicon-remove-sign'></span> Deactivate</button>");
		}
		else {
			$(".module-title-text").append( "<small class='text-danger'><b>( " + act_status + " )</b></small>" );

			$("#tab-actions").after("<button class='btn btn-success master_btns'><span class='glyphicon glyphicon-ok-sign'></span> Activate</button>");
		}


	});


</script>