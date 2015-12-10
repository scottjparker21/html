<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php';?>
		<body>

									<p> <?php echo "<p>" . $_GET['productid'] . "</p>"; ?> 


			<?php require 'navbar.php';?>

				<?php	
					$id = $_GET['productid'];
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM product where id = ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));
			        $data = $q->fetch(PDO::FETCH_ASSOC);
			        $name = $data['name'];
			        $cost = $data['cost'];
			        $description = $data['description']; 
			        // print_r($catinfo);
			    // echo $name;
			?>
					<h3> Products </h3>

			       <?php echo $name $cost $description; ?>





			<?php require 'footer.php';?>
		</body>
	</html>
