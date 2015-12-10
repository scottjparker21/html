
$( document ).ready(function() {


	function search (){
		$.get( "test.php?vari=4", function( data ) {
		  	alert( "Data Loaded: " + data );
		});
	}
		$('#search').keyup(function(e) {
                     if(e.keyCode == 13) {
                        search();
	// call search on input change

});
