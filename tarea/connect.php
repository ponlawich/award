<?php
	$servername = "localhost";
	$username = "root";
	$password = "mhee";
	$dbname = "party";

	try {
		$conn_mysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn_mysql->exec("set names utf8");
		$conn_mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	?>