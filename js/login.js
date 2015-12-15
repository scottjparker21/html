
$( document ).ready(function() {

	function login(user,pass) {
		$.get("validate.php?username=" + user + "&password=" + pass , function (data) {
			console.log(data);
		});
	}

	$('#send').click(function() {
			var username = $("#inputUser").val();
			var password = $("#inputPass").val();
			console.log('here i am lord');
			login(username,password);
				
	});
});


