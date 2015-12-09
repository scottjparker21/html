<!DOCTYPE html>
		<html lang="en">
						<?php require 'navbar.php';?>
		
		<body>
				<?php require 'header.php';?>


				<?php	
					
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT id, name FROM product where subcategory_id = ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));

			        $product = $q->fetchAll();
			        // print_r($catinfo);
			    
			?>
					<h3> Products </h3>

			       <?php foreach ($product as $row){?>

			       				{?><li id="<?php echo $row['id'];?>"><a href="product.php?catid=<?php echo $row['id'];?>"><?php echo $row['name'];?></a>

			       	<?php } ?>









				<?php require 'footer.php';?>
		</body>
		</html>