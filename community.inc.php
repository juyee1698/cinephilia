<?php require_once('config.php') ?>
<?php

	if (isset($_POST['submit'])){
		$user_id = $_POST['user_id'];
		$user_name= $_POST['user_name'];
		$body =  mysqli_real_escape_string($conn,$_POST['body']);
		$did = $_POST['did'];
		

    
		 $sql = "INSERT INTO community(did,user_id,user_name,body) values (".$did.",".$user_id." ,'".$user_name."' , '$body')";		
		 $result = mysqli_query($conn,$sql);

		
		 if($did == 1)
		 {
		 	header("location:./disc1.php");
		 }
		 else if($did == 2)
		 {
		 	header("location:http:./disc2.php");
		 }
		 else if($did == 3)
		 {
		 	header("location:http:./disc3.php");
		 }
		  else 
		 {
		 	header("location:http:./disc4.php");
		 }
		 
	}
		 
?>