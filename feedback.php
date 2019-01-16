<?php require_once('config.php') ?>
<?php
	if(!$conn){
		          die("connection failed: ".mysqli_connect_error());
	}
	  
	     if (isset($_POST['submit'])){
			$Message = $_POST['Message'];
		
			$sql = "INSERT INTO feedback(Message) values ('".$Message."')";		
			 $result = mysqli_query($conn,$sql);
		}
		
		
       if (isset($_SESSION['user']['username'])) {

           header("location:./main.php");
       }
       else
       {
		header("location:./index.php");
	   }

	?>