<?php
	
			require 'database.php';
			$pdo = Database::connect();
			$user = $_GET['username'];
			$pass = $_GET['password'];
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT * FROM customer WHERE username = ? ";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user));
	        $customer = $q->fetchAll();
	        Database::disconnect(); 

	        $results = '';

	       foreach ($customer as $row){ 
			       	   $results .= "<li id='" . $row['id'] . "'>";
			       	   $results .= $row['username'];
			       	   $results .= $row['password'];
			       	   $results .= "</a>";
		       		}

		       		echo $results;
?>