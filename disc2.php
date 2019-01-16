<?php require_once('config.php') ?>
 <html lang ="en">
	<head>			
		<title>Movie Reviews</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="static/css/Main.css">
        <link rel="stylesheet" href="static/css/Main1.css">
		<link rel="stylesheet" type="text/css" href="static/css/movies.css">
		 
		<meta charset="UTF-8">
		
		
	</head>
	
<body style="background-color: #DEE6E2;">
	<?php if (isset($_SESSION['user']['username'])) { ?> 
	 
       <?php include('includes/navbar1.php') ?>
	   <br><br>
	   <h1 style="margin-left:70px;">Top 5 Movies you have watched this year</h1>
	   <br>
	   
        <form method="POST" action="community.inc.php" style="margin-left:50px;">
           <input type="hidden" name="did" value="2">
	       <input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>">
           <input type="hidden" name="user_name" value="<?php echo $_SESSION['user']['username'] ?>">
	      <textarea style="background-color:#fff;resize:vertical;width:50%;height:40%;" name="body" placeholder="Post a comment.."></textarea><br><br>
		  
	      <button type="submit" name="submit" style="width:100px;height:50px;background-color: #282828;border: none;
	      color: #fff; 
	      font-family: arial;
	      font-weight: 400;
	      cursor: pointer;">SUBMIT</button>
         </form>
	
       
<?php

$result = mysqli_query($conn,"SELECT * from community where did=2");

?>

<?php
while($rows = mysqli_fetch_assoc($result))
			 {
			 	?>
			 <br>
			 <div class="comment-box" style="margin-left:50px;width:60%;padding:20px;margin-bottom:4px;background-color:#457D63;border-radius:10px;">
			 <div class="row">
              <img src="./static/images/user1.png" width=5% height=6%>&nbsp;&nbsp;
              <h3 style="color:white;"><?php echo $rows['user_name']; ?></h3>
            </div>
              <span style="color:white" class="time-right"><?php echo $rows['created_at']; ?></span>
			  <br>
  				<p style="color:white"><?php echo $rows['body']; ?></p>
             </div>

			 

			 <?php } ?>
		
		
	<?php }else{ ?>
	
	  <?php header("location: ./login.php");  ?>
	<?php } ?>
	
	
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>	