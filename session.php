<?php
	
	session_start();

	

	 if( isset( $_SESSION['userid'] ) )
	   {
	      print_r($_SESSION);
	   }
	   if( empty( $_SESSION['userid'] ))
	   {
	   	  print_r($_SESSION);
	   }


?>