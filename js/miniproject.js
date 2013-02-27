$(function  () {
	$(".mail").blur(function(){
		email = $(this).val();
		$.post("../controllers/register_check_email.php",{email: email}, function(data){
			alert(data);
		});
		return false;		
	});
		
});