<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "root123", "project");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	define ('ROOT_PATH', realpath(dirname('C:/xampp/htdocs/jui/')));
	define('BASE_URL', 'http://localhost:8080/jui/');
?>