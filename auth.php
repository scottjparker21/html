<?php
			require 'database.php';
			$pdo = Database::connect();
			$user = $_GET['user'];
			$pass = $_GET['pass'];
			echo "Username: " . $user;
			echo "Password: " . $pass;
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT * FROM customer WHERE username = ? ";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user));
	        $customer = $q->fetchAll();
	        Database::disconnect(); 

	        $results = '';

	       foreach ($customer as $row){ 
			//        	   $results .= "<p>";
			       	   $results .= $row['username'];
			       	   $results .= $row['password'];
			//        	   $results .= "</p>";
		       		}
		       		
		      echo $results;
		       		
?>