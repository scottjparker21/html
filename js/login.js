$( document ).ready(function() {

	function logmein() {
		var username = $("#inputUser").val();
		var password = $("#inputPass").val();
		$.get('../validate.php?username='+username+'&password='+password, function(data) {
			console.log("getting data");
			console.log(data);
		});
		console.log('ending');
	}

	$('#send').on("click",logmein);
	
});