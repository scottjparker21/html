<!DOCTYPE html>
		<html lang="en">
		<head>
			<?php require 'navbar.php';?>
		</head>
		<body>

			<?php require 'header.php';?>

				<!-- END NAVBAR -->


				<p> <?php echo htmlspecialchars($_GET['catid']); ?> </p>


				<!-- STICKY FOOTER -->

				<?php require 'footer.php';?>		
		</body>
		</html>