<?php
	
	session_start();

	$_SESSION["id"] = NULL;

	 if( isset( $_SESSION['userid'] ) )
	   {
	      echo "Hey User";
	   }
	   else {
	   		echo "You should make an account!";
	   }


?>