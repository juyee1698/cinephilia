<?php require_once('config.php') ?>
<?php



	if (isset($_POST['submit'])){
		$user_id = $_POST['user_id'];
		$user_name= $_POST['user_name'];
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		$movie_id = $_POST['mid'];
		

        
		
		 $sql = "INSERT INTO reviews(user_id,user_name,movie_id,body) values (".$user_id." , '".$user_name."' , ".$movie_id.", '$body')";		
		 $result = mysqli_query($conn,$sql);

		
		 if($movie_id == 1)
		 {
		 	header("location:./shawshank.php");
		 }
		 else if($movie_id == 2)
		 {
		 	header("location:./godfather.php");
		 }
		 else if($movie_id == 3)
		 {
		 	header("location:./fight-club.php");
		 }
		  else if($movie_id == 4)
		 {
		 	header("location:./memento.php");
		 }
		 else if($movie_id == 5)
		 {
		 	header("location:./vendetta.php");
		 }

		 else if($movie_id == 6)
		 {
		 	header("location:./django.php");
		 }

		 else if($movie_id == 7)
		 {
		 	header("location:./12.php");
		 }

		 else if ($movie_id == 8)
	     {
		    header("location:./simple.php");
		 }
		 else if($movie_id == 9)
		 {
		 	header("location:./getout.php");
		 }
		 else if($movie_id == 10)
		 {
		 	header("location:./prestige.php");
		 }
		 else if($movie_id == 11)
		 {
		 	header("location:./inception.php");
		 }
		 else if($movie_id == 12)
		 {
		 	header("location:./departed.php");
		 }
		 else if($movie_id == 13)
		 {
		 	header("location:./nun.php");
		 }
		 else if($movie_id == 14)
		 {
		 	header("location:./marley.php");
		 }
		 else if($movie_id == 15)
		 {
		 	header("location:./safety.php");
		 }
		 else if($movie_id == 16)
		 {
		 	header("location:./superbad.php");
		 }
		 else if($movie_id == 17)
		 {
		 	header("location:./hangover.php");
		 }
		 else if($movie_id == 18)
		 {
		 	header("location:./good.php");
		 }
		 else if($movie_id == 19)
		 {
		 	header("location:./whiplash.php");
		 }
		 else if($movie_id == 20)
		 {
		 	header("location:./inglourious.php");
		 }
		 else if($movie_id == 21)
		 {
		 	header("location:./lady-bird.php");
		 }
		 else if($movie_id == 22)
		 {
		 	header("location:./billboards.php");
		 }
		 else if($movie_id == 23)
		 {
		 	header("location:./tonya.php");
		 }
		 else if($movie_id == 24)
		 {
		 	header("location:./begin.php");
		 }
		 
		 else if($movie_id == 25)
		 {
		 	header("location:./summer.php");
		 }
		 
		 else if($movie_id == 26)
		 {
		 	header("location:./tfios.php");
		 }
		 
		  else if($movie_id == 27)
		 {
		 	header("location:./noteebook.php");
		 }
		 
         else if($movie_id == 28)
         {
         	header("location:./shutter.php");
         }

         else if($movie_id == 29)
         {
         	header("location:./beautiful.php");
         }

           else if($movie_id == 30)
         {
         	header("location:./atomic.php");
         }
         
         else
         {
         	header("location:./donnie.php");
         }

 


     }



