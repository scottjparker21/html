
$( document ).ready(function() {

	

	$('#send').click(function() {
		console.log('here i am lord');
			var username = $("#inputUser").val();
			var password = $("#inputPass").val();
			
			
		$.get("validate.php?username=" + username + "&password=" + password , function (data) {
			console.log(data);
	}
				
	});
});


