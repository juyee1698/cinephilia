<?php require_once('config.php') ?>
<?php

	if(!$conn){
		          die("connection failed: ".mysqli_connect_error());
	}
	  
	     if (isset($_POST['submit'])){
	     	$name = $_POST['name'];
	     	$email = $_POST['email'];
			$message = $_POST['message'];
		
			$sql = "INSERT INTO help(name,email,message) values ('".$name."','".$email."','".$message."')";	
			$result = mysqli_query($conn,$sql);
		}
		
		header("location:http://localhost:8080/jui/index.php");
	?>