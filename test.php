
		
					 <?php	
								$pdo = Database::connect();
								$id = $_GET['inp'];
						        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						        $sql = "SELECT * FROM product WHERE name LIKE ? ";
						        $q = $pdo->prepare($sql);
						        $q->execute(array($id));

						        $product = $q->fetchAll();
						        Database::disconnect(); 

						        echo($id);
			        				    
					?>






