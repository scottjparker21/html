

			<?php

					echo "hello";

					require 'database.php';
					$pdo = Database::connect();
					$id = $_GET['entry'];
			        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			        $sql = "SELECT * FROM product WHERE name  LIKE ? ";
			        $q = $pdo->prepare($sql);
			        $q->execute(array($id));

			        $product = $q->fetchAll();
			        Database::disconnect(); 

					// echo $_GET['entry'];

		       		foreach ($product as $row){ 
			       		echo "<li id='" . $row['id'] . "'>";
			       		echo "<a href='product.php?productid='" . $row['id'] . "'>";
			       		echo $row['name'];
			       		echo "</a>";
		       		} 
		       		*/
			?>

