

	 <?php	
					$id = '%'$_GET['inp']'%';
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM product WHERE name LIKE ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));

			        $product = $q->fetchAll();
			        // print_r($catinfo);
			    
			?>

			       <?php foreach ($product as $row){?>

			       				{?><li id="<?php echo $row['id'];?>"><a href="product.php?productid=<?php echo $row['id'];?>"><?php echo $row['name'];?></a>

			       	<?php } ?>
