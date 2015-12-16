<?php

			require 'database.php';
			$pdo = Database::connect();
			$user = $_GET['user'];
			$pass = $_GET['pass'];
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT * FROM customer WHERE username = ? AND password = ?";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user,$pass));
	        $data = $q->fetch(PDO::FETCH_ASSOC);
	        $username = $data['username'];
	        $id = $data['id'];
	        $password = $data['data'];
	        Database::disconnect(); 
	        echo $user;
	        echo $username;
	         		
		   	if ($user == $username) {
		   		echo "good job mon";
		   	}

		      // customer id, firstname and transaction id (set to NULL at login)
		       		
?>
