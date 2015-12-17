<?php
	
	session_start();

	$_SESSION["id"] = NULL;

	 if( empty( $_SESSION['userid'] ) )
	   {
	      echo "you should probably make an account";
	   }


?>