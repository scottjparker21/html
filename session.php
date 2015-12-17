<?php
	
	session_start();

	

	 if( isset( $_SESSION['userid'] ) )
	   {
	      echo "Hey User";
	   }
	   if( empty( $_SESSION['userid'] ))
	   {
	   	  echo "Go make an account.";
	   }


?>