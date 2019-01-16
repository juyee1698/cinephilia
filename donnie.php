<?php require_once('config.php') ?>
<?php require_once('includes/movies_head.php') ?>
<?php require_once('includes/registration_login.php') ?>
<?php 

     include 'comments.inc.php';
	  ///include 'db8.inc.php'; ?>
<title>	Donnie Darko</title>
<link rel="stylesheet" type="text/css" href="static/css/Main.css">
<link rel="stylesheet" type="text/css" href="static/css/movies.css">
<link rel="stylesheet" type="text/css" href="static/css/style.css">

</head>

<body>

<?php if (isset($_SESSION['user']['username'])) { ?>
     <link rel="stylesheet" type="text/css" href="static/css/Main1.css">
    <?php include('includes/navbar1.php') ?>
  
<?php }else{ ?>

   <?php include('includes/navbar.php') ?>
 
<?php } ?>

<div class="row" style="background-color:#DEE6E2 ";>
    <!-- for pc and laptop -->
   <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
   <br>
     <div class="container-fluid">
     <img src="./static/images/donnie.jpg" class="img-responsive" alt="Donnie Darko" width="600" height="400">
	   <br>
	    <center><p style="font-family:Serif;font-size:32px;">Donnie Darko</p></center>
	    <p style="font-family:Serif;font-size:25px;align-text:center">Director:Richard Kelly<br>Initial release:19 January 2001 (USA)<br>
	    Genre: Sci-fi<br></p>
	 	 <h2>Our Rating</h2>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange" ></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star"></span>
	 	<br><br><br>
	</div>
    </div>
	
	<!-- for ipad -->
	<div class="col-sm-12 hidden-lg hidden-md hidden-xs">
   <br>
     <div class="container-fluid">
     <center><img src="./static/images/donnie.jpg" class="img-responsive" alt="Donnie Darko" width="300" height="200"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:38px;">Donnie Darko</p></center><br>
	    <center><p style="font-family:Serif;font-size:28px;">Director:Richard Kelly<br>Initial release:19 January 2001 (USA)<br>
	    Genre: Sci-fi<br></p>
		 <h2>Our Rating</h2>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange" ></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star"></span>
	 	<br><br><br>
	</div>
    </div>
	
	<!-- for mobile -->
	<div class="col-xs-12 hidden-sm hidden-lg hidden-md">
   <br>
     <div class="container-fluid">
     <center><img src="./static/images/donnie.jpg" class="img-responsive" alt="Donnie Darko" width="200" height="100"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:30px;">Donnie Darko</p></center><br>
	    <center><p style="font-family:Serif;font-size:24px;">Director:Richard Kelly<br>Initial release:19 January 2001 (USA)<br>
	    Genre: Sci-fi<br></p>
		 <h2>Our Rating</h2>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange" ></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star" style="color:orange"></span>
		<span class="fa fa-star"></span>
	 	<br><br><br>
	</div>
    </div>
	
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<br><br>
	  <div class="row">
	  <div class="container-fluid">
	  <!-- 1 -->
	  <!-- for pc -->
	  <div class="col-lg-8 hidden-md hidden-sm hidden-xs">
	
	  <iframe  width="800" height="400" align="center" src="https://www.youtube.com/embed/bzLn8sYeM9o">
      </iframe>
	  
	  </div>
      <div class="hidden-lg col-md-8 hidden-sm hidden-xs">
	
	  <iframe  width="600" height="300" align="center" src="https://www.youtube.com/embed/bzLn8sYeM9o">
      </iframe>
	  
	  </div>
       	  
	  <!-- for mobile -->
	  <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
	  <div class="resp-container">
	  <iframe class="resp-iframe" src="https://www.youtube.com/embed/bzLn8sYeM9o" gesture="media"  allow="encrypted-media" allowfullscreen>
      </iframe>
	  </div>
	  </div>
	  <!-- 2 -->
	   <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
	   <br>
	    <p style="font-family:Serif;font-size:38px;">Donnie Darko</p>
	  </div>
	 </div>
	</div>
	
	<div class="row">
	<div class="container">
	<div class="Text">
	<br>
	
	<p style="font-size:25px;">An awkward teenager, befriends Frank, a figure in a bunny costume only he can see, who informs Donnie that the world will end in 28 days, 6 hours, 42 minutes, and 12 seconds.</p>
	
	</div>
	<br><br><br>
	</div>
	
	</div>

<br>
<?php if (isset($_SESSION['user']['username'])) { ?>
<div style="margin-left:5%;">
<h2> Give your own reviews </h2>
<br>
<form method="POST" action="comments.inc.php">
    <input type="hidden" name="mid" value="31">
	<input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>">
    <input type="hidden" name="user_name" value="<?php echo $_SESSION['user']['username'] ?>">
	<textarea style="width:60%;height:120px" name="body"></textarea><br><br>
	<button type="submit" name="submit">SUBMIT</button>
</form>
</div>

<?php }else{ ?>
    <h2>Login to add your own review!</h2>
<?php } ?>


<?php

$result = mysqli_query($conn,"SELECT * from reviews where movie_id=31");

?>
<?php

while($rows = mysqli_fetch_assoc($result))
			 {
			 	?>
			 <br>
			 <div class="comment-box" style="width:80%;padding:20px;margin-bottom:4px;margin-left:5%;background-color:#457D63;border-radius:10px;">
			 <div class="row">
              <img src="./static/images/user1.png" width=5% height=5%>&nbsp;&nbsp;
              <h4 style="color:white;"><?php echo $rows['user_name']; ?></h4>
            </div>
              <span style="color:white; class="time-right"><?php echo $rows['created_at']; ?></span>
  				<p style="color:white; class="card-body"><?php echo $rows['body']; ?></p>
             </div>

			 

			 <?php } ?>
<br><br>
</div>
</div>



<?php include('includes/footer.php') ?>

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

<script>
    var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 1500); // Change image every 2 seconds
}
	
</script>

</body>
</html>



