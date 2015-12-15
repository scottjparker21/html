
$( document ).ready(function() {

	function logmein(user,pass) {
		$.get("validate.php?username=" + user + "&password=" + pass , function (data) {
			console.log(data);
		});
	}

	$('#send').click(function() {
		console.log('here i am lord');
			var username = $("#inputUser").val();
			var password = $("#inputPass").val();
			

			logmein(username,password);	
	});
});


