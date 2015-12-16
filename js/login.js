$(document).ready(function() {
	$('#send').on("click",function(){
		var user = $("#inputUser").val();
		var pass = $("#inputPass").val();
		$.get('auth.php?user='+user+'&pass='+pass, function(data) {
			alert(data);
		});
	});
});