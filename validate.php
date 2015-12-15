<?php
	
			require 'database.php';
			$user = $_GET['username'];
			$pass = $_GET['password'];
			$pdo = Database::connect();
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT username,password FROM customer WHERE username = ? ";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user));
	        $categories = $q->fetchAll();
	        Database::disconnect(); 

	        echo $user;
	        echo $password;


?>