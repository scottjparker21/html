
$( document ).ready(function() {

	function login(user,pass) {
		$.get("validate.php?username=" + user + "&password=" + pass , function (data) {
			console.log("hey you");
		});
	}

	$('#send').click(function() {
			var username = $("#user").val()
			var password = $("#pass").val()
			console.log(username);
			console.log(password);

			login(username,password);

		});
	});


