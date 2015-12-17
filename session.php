<?php
	
	session_start();

	echo $_SESSION['userid'];

	 if( isset( $_SESSION['userid'] ) )
	   {
	      echo "Hey User";
	   }
	   else {
	   		echo "You should make an account!";
	   }


?>