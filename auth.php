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
	        $first = $data['first'];
	        $last = $data['last'];
	        $id = $data['id'];
	        $password = $data['password'];
	        $permission = $data['permission'];
	        Database::disconnect(); 
	        
	        $_SESSION["userid"] = $id;
	        $_SESSION["first"] = $first;
	        $_SESSION["last"] = $last;
	        $_SESSION["username"] = $username;
	        $_SESSION["permission"] = $permission;
	        
		   	if ($user == $username && $pass == $password) {
		   		echo "Welcome " . $_SESSION["first"] . " you have been successfully logged in.";

		   	}
		   	else {
		   		echo "Username or Password were not valid. Please try again.";
		   	}

		      // customer id, firstname and transaction id (set to NULL at login)
		       		
?>
