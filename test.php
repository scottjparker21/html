<!DOCTYPE html>
		<html lang="en">
		<head>
				<?php require 'navbar.php';?>
		</head>
		<body>
				<?php require 'header.php';?>

				<!-- END NAVBAR -->

					 <?php	
								
								$id = $_GET['inp'];
								print_r($id);
						        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						        $sql = "SELECT * FROM product WHERE name LIKE ? ";
						        $q = $pdo->prepare($sql);
						        $q->execute(array($id));

						        $product = $q->fetchAll();
			        
			    
					?>




				<!-- STICKY FOOTER -->

				<?php require 'footer.php';?>
		</body>
		</html>

