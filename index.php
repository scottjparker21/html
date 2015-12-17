<?php require 'session.php' ?>
<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php';?>
		<body>
			<?php require 'navbar.php';?>
			<div class="results"></div>	
			<div id="content">

				<?php

				 if( isset( $_SESSION['userid'] ) )
	   {
	      echo "you are logged in" ;
	   }
	 if( empty( $_SESSION['userid'] ))
	   {
	   	  echo "create account to login";
	   }
	   ?>

				<p> This will hopefully been hidden when search field is not empty. </p>




			<?php require 'footer.php';?>
			</div>
		</body>
	</html>

