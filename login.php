<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php'; ?>
		<body>
			<?php require 'navbar.php'; ?>
		  		<div class="control-group">
		    		<label class="control-label" for="inputUsername">Username</label>
		    		<div class="controls">
		      			<input type="text" id="inputUser" placeholder="Username">
		    		</div>
		  		</div>
		  		<div class="control-group">
		    		<label class="control-label" for="inputPassword">Password</label>
		    		<div class="controls">
		      			<input type="password" id="inputPass" placeholder="Password">
		    		</div>
		  		</div>
		  		<div class="control-group">
		    		<div class="controls">
		      			<label class="checkbox">
		        			<input type="checkbox"> Remember me
		      			</label>
		      			<button id="send" class="btn">Sign in</button>
		    		</div>
		  		</div>

			<?php require 'footer.php';?>

		</body>
	</html>