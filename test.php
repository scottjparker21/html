
<?php echo(inp); ?>


	<?php
			require 'database.php';
			$pdo = Database::connect();
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT * FROM product WHERE name LIKE "echo(inp)"";
	        $q = $pdo->prepare($sql);
	        $q->execute();
	        $product = $q->fetchAll();
	        Database::disconnect(); 
	 ?>