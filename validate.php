<?php
	
			require 'database.php';
			$pdo = Database::connect();
			$user = $_GET['username'];
			$pass = $_GET['password'];
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT username,password FROM customer WHERE username LIKE ? ";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user));
	        $customer = $q->fetchAll();
	        Database::disconnect(); 

	        echo $customer;
	        echo $user;
	        echo $password;


?>