<?php require_once('config.php') ?>
<?php require_once('includes/movies_head.php') ?>
<?php require_once('includes/registration_login.php') ?>
<?php 

     include 'comments.inc.php';
	  ///include 'db8.inc.php'; ?>
<title>Shawshank Redemption</title>
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


<div class="row" id="movie" style="background-color:#DEE6E2";>
    <!-- for pc and laptop -->
   <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
   <br>
     <div class="container-fluid">
     <img src="static/images/shawshank.jpg" class="img-responsive" alt="Shawshank Redemption" width="600" height="400">
	   <br>
	    <center><p style="font-family:Serif;font-size:32px;">The Shawshank Redemption</p></center>
	    <p style="font-family:Serif;font-size:25px;align-text:center">Director:Frank Darabont<br>
	    Initial release: 22 September 1994 (Beverly Hills)<br>
	    Genre: Drama/Crime<br></p>
	    <h3>Our Ratings</h3>
		<span class="fa fa-star checked" style="margin-left:20px"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <br><br>

      
	</div>
   
		<script src="script.js"></script>
    </div>


	
	<!-- for ipad -->
	<div class="col-sm-12 hidden-lg hidden-md hidden-xs">
   <br>
     <div class="container-fluid">
     <center><img src="static/images/shawshank.jpg" class="img-responsive" alt="Shawshank Redemption" width="300" height="200"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:38px;">The Shawshank Redemption</p></center><br>
	    <center><p style="font-family:Serif;font-size:28px;">Director:Frank Darabont<br>
	    Initial release: 22 September 1994 (Beverly Hills)<br>
	    Genre: Drama/Crime<br></p></center>
	    <h3>Our Ratings</h3>
		<span class="fa fa-star checked" style="margin-left:20px"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <br><br>
	</div>
    </div>
	
	<!-- for mobile -->
	<div class="col-xs-12 hidden-sm hidden-lg hidden-md">
   <br>
     <div class="container-fluid">
     <center><img src="static/images/shawshank.jpg" class="img-responsive" alt="Shawshank Redemption" width="200" height="100"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:30px;">The Shawshank Redemption</p></center><br>
	    <center><p style="font-family:Serif;font-size:24px;">Director:Frank Darabont<br>
	    Initial release: 22 September 1994 (Beverly Hills)<br>
	    Genre: Drama/Crime<br></p></center>
	    <h3>Our Ratings</h3>
		<span class="fa fa-star checked" style="margin-left:20px"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <br><br>
	</div>
    </div>
	
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<br><br>
	  <div class="row">
	  <div class="container-fluid">
	  <!-- 1 -->
	  <!-- for pc -->
	  <div class="col-lg-8 hidden-md hidden-sm hidden-xs">
	
	  <iframe  width="800" height="400" align="center" src="https://www.youtube.com/embed/WawU4ouldxU">
      </iframe>
	  
	  </div>
      <div class="hidden-lg col-md-8 hidden-sm hidden-xs">
	
	  <iframe  width="600" height="300" align="center" src="https://www.youtube.com/embed/WawU4ouldxU">
      </iframe>
	  
	  </div>
       	  
	  <!-- for mobile -->
	  <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
	  <div class="resp-container">
	  <iframe class="resp-iframe" src="https://www.youtube.com/embed/WawU4ouldxU" gesture="media"  allow="encrypted-media" allowfullscreen>
      </iframe>
	  </div>
	  </div>
	  <!-- 2 -->
	   <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
	   <br>
	    <p style="font-family:Serif;font-size:38px;">The Shawshank Redemption</p>
	  </div>
	 </div>
	</div>
	
	<div class="row">
	<div class="container">
	<div class="Text">
	<br>
	
	<p style="font-size:25px;margin-right:25px;">Shawshank Redemption" is a movie about time, patience and loyalty -- not sexy qualities, perhaps, but they grow on you during the subterranean progress of this story, which is about how two men serving life sentences in prison become friends and find a way to fight off despair
The story is narrated by "Red" Redding (Morgan Freeman), who has been inside the walls of Shawshank Prison for a very long time and is its leading entrepreneur. He can get you whatever you need: cigarettes, candy, even a little rock pick like an amateur geologist might use. One day he and his fellow inmates watch the latest busload of prisoners unload, and they make bets on who will cry during their first night in prison, and who will not. Red bets on a tall, lanky guy named Andy Dufresne (Tim Robbins), who looks like a babe in the woods.</p>
	
	</div>
	</div>
	<br><br><br>
	</div>
	
	
<br>
<?php if (isset($_SESSION['user']['username'])) { ?>
<div style="margin-left:5%;">
<h2> Give your own reviews </h2>
<br>
<form method="POST" action="comments.inc.php">
    <input type="hidden" name="mid" value="1">
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

$result = mysqli_query($conn,"SELECT * from reviews where movie_id=1");

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
              <span style="color:white" class="time-right"><?php echo $rows['created_at']; ?></span>
			  <br><br>
  				<p style="color:white" class="card-body"><?php echo $rows['body']; ?></p>
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



</body>
</html>



