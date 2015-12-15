
$( document ).ready(function() {

	function login(user,pass) {
		$.get("validate.php?username=" + user + "&password=" + pass , function (data) {
			console.log("hey you");
		});
	}

	$('#submit').click(function() {
			var username = $("#username").val()
			var password = $("#password").val()
			console.log(username);
			console.log(password);

			login(username,password);

		});
	});


