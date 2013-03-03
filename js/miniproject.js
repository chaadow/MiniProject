$(document).ready( function() {

	$("#mail").blur(function(){

		//$('.message').html('');
		var email = $(this).val();
		$.ajax({
			type: "POST",
			url: "../controllers/register_check_email.php",
			data: "email="+email,
			success: function(msg){

				if(msg!="Email is okay"){
					$(".alert").html(msg);
				$(".alert").show();	
				}
				


				//$("#LoadingImage").hide();

				//$('.message').html(msg);

			}

		});
		return false;

		 
	});
	$(".alert").hide();
});

/*
$(document).ready( function() {
		$('#mail').blur(function(){
			email = $(this).val();
			$.post("../controllers/register_check_email.php",{email: email}, function(data){
				alert(data);

			});
            $(this).popover('show');
			return false;		
		});
			
	
});

*/