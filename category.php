<!DOCTYPE html>
		<html lang="en">
					<?php require 'header.php';?>

		<body>

			<?php require 'navbar.php';?>

				<!-- END NAVBAR -->


				<p> <?php echo htmlspecialchars($_GET['catid']); ?> </p>


				<!-- STICKY FOOTER -->

				<?php require 'footer.php';?>		
		</body>
		</html>