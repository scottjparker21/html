<!DOCTYPE html>
	<html lang="en">
		<?php require 'header.php';?>
		<body>
			<?php require 'navbar.php';?>

				<p> <?php echo "<p>" . $_GET['catid'] . "</p>"; ?> 

			<?php	
					$id = $_GET['catid'];
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM subcategory where category_id = ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));

			        $catinfo = $q->fetchAll();
			        // print_r($catinfo);
			    
			        foreach ($subcategories as $row){?><a href="<?php echo $row['id'];?>">"<?php echo $row['name'];?>"</a><?php } ?>
        											
        			
       
			?>

			<?php require 'footer.php';?>
		</body>
	</html>

