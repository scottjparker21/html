
$( document ).ready(function() {


	function search (inp){
			if (inp != null) {
				$.get( "test.php?entry=" + inp, function( data ) {
				  		$( ".search" ).append( data);
				});
			}
			else {
				$( ".search" ).append('Could not find in database');
			}
	}

	$('#search').keyup(function() {
		var entry = $(this).val();
        if(entry !== '' && entry !== null) {
            search(entry);
		}
	});		

});




/*
user changes search input
a function grabs the new value on change
the function calls a php page with get/ajax
the php page echos back search results
the contents of the container on the page are temporarilly stored in a variable
the contents of container are replaced with what gets echo'd back from the php
if the php doesn't echo any products, dusplay "no results"
if the search bar is empty, replace the contents of the page from the temp variable and set the variable to null




*/