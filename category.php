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
			        print_r($catinfo);
			     	
			        foreach ($subcategories as $row){?><li id="<?php echo $row['id'];?>"><a href="subcategory.php?catid=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></li><?php }
        					
        			
			        // $q = $pdo->prepare($sql);
			        // $q->execute(array($id));
			        // $data = $q->fetch(PDO::FETCH_ASSOC);
			        // $first = $data['first'];
			        // $last = $data['last'];
			        // $phone = $data['phone'];
			        // $dob = $data['dob'];
			        // $username = $data['username'];
			        // $password = $data['password'];
			        // $gender = $data['gender'];
			        // $permission = $data['permission'];
			        // $email = $data['email'];
       
			?>

			<?php require 'footer.php';?>
		</body>
	</html>

