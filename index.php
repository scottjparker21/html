<?php require 'session.php' ?>
<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php';?>
		<body>
			<?php require 'navbar.php';?>
			<div class="results"></div>	
			<div id="content">

				<?php echo $_SESSION['name']; ?>

				<p> This will hopefully been hidden when search field is not empty. </p>



			<?php require 'footer.php';?>
			</div>
		</body>
	</html>

