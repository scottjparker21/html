<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php';?>
		<body>
			<?php require 'navbar.php';?>

				<?php	
					$id = $_GET['subcatid'];
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM product where id = ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));
			        $data = $q->fetchAll();
			        $name = $data['name'];
			        $cost = $data['cost'];
			        $description = $data['description']; 
			        // print_r($catinfo);
			    print_r($name, $cost, $description);
			?>
					<h3> Products </h3>

			       <?php foreach ($product as $row){?>

			       				{?><li id="<?php echo $row['id'];?>"><a href="product.php?subcatid=<?php echo $row['id'];?>"><?php echo $row['name'];?></a>

			       	<?php } ?>





			<?php require 'footer.php';?>
		</body>
	</html>
