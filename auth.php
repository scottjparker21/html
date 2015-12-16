<?php
			require 'database.php';
			$pdo = Database::connect();
			$user = $_GET['user'];
			$pass = $_GET['pass'];
	        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $sql = "SELECT id,username,password FROM customer WHERE username = ? AND password = ?";
	        $q = $pdo->prepare($sql);
	        $q->execute(array($user,$pass));
	        $data = $q->fetch(PDO::FETCH_ASSOC);
			$id = $data['id']	        
	        $username = $data['username'];
	        $password = $data["password"]
	        Database::disconnect(); 

	     	


		      echo $data;
		      

		      // customer id, firstname and transaction id (set to NULL at login)
		       		
?>
