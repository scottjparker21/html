
$( document ).ready(function() {

	function logmein(user,pass) {
		console.log(pass);
		$.get("validate.php?username=" + user + "&password=" + pass , function (data) {
			console.log(data);
		});
	}

	$('#send').click(function() {
		console.log('here i am lord');
			var username = $("#inputUser").val();
			var password = $("#inputPass").val();
			console.log('now im here');

			logmein(username,password);

	});
});


