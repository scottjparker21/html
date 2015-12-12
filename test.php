

	 <?php	
					$id = $_GET['inp'];
					print_r($id);
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM product WHERE name LIKE ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));

			        $product = $q->fetchAll();
			        // print_r($catinfo);
			    
		
	?>