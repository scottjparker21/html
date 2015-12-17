<?php
	
	session_start();

	 if( isset( $_SESSION['userid'] ) )
	   {
	      print_r($_SESSION['userid']);
	   }
	 if( empty( $_SESSION['userid'] ))
	   {
	   	  print_r($_SESSION['userid']);
	   }

?>