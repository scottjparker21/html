<?php
	
			require 'database.php';
			$pdo = Database::connect();
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT id,name FROM customer ORDER BY name";
	        $q = $pdo->prepare($sql);
	        $q->execute();
	        $categories = $q->fetchAll();
	        Database::disconnect(); 




?>