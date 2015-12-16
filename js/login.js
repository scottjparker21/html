
$( document ).ready(function() {

	function logmein(user,pass) {

		

	$('#send').click(function() {
		console.log('here i am lord');
			var username = $("#inputUser").val();
			var password = $("#inputPass").val();
			console.log('now im here');

			// logmein(username,password);
			$.get("validate.php" , function(data) {
			console.log(data);
			console.log('ending here');
			console.log(data);

		});
	}

	});
});



