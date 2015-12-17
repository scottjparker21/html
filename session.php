<?php
	
	session_start();

	$_SESSION["id"] = NULL;

	 if( isset( $_SESSION['userid'] ) )
   {
      $_SESSION["id"] = $_SESSION["userid"];
      echo $_SESSION["id"];
   }


?>