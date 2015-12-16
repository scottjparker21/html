
$( document ).ready(function() {

	function logmein() {
		var username = $("#inputUser").val();
		var password = $("#inputPass").val();
		var furl = "validate.php?username=" + username + "&password=" + password;
		console.log(furl);
		$.get(furl , function(data) {
			console.log(data);
			console.log('ending here');
		});
	}

	$('#send').on("click",logmein);
	
});


