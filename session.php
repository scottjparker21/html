<?php
	
	session_start();

	 if( isset( $_SESSION['userid'] ) )
	   {
	      echo "you are logged in" ;
	   }
	 if( empty( $_SESSION['userid'] ))
	   {
	   	  echo "you are not logged in";
	   }

?>