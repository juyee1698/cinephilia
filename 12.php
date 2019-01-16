<?php require_once('config.php') ?>
<?php require_once('includes/movies_head.php') ?>
<?php require_once('includes/registration_login.php') ?>
<?php 

     include 'comments.inc.php';
	  ///include 'db8.inc.php'; ?>
<title>12 monkeys</title>
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
     <img src="./static/images/12.jpg" class="img-responsive" alt="12 monkeys" width="600" height="400">
	   <br>
	    <center><p style="font-family:Serif;font-size:32px;">12 Monkeys</p></center>
	    <p style="font-family:Serif;font-size:25px;align-text:center">Director: Terry Gilliam<br>
	    Initial release: 5 January 1996 (USA)<br>
	    Genre: Drama/Fiction/Science<br></p>
	 
	</div>
    </div>
	
	<!-- for ipad -->
	<div class="col-sm-12 hidden-lg hidden-md hidden-xs">
   <br>
     <div class="container-fluid">
     <center><img src="./static/images/12.jpg" class="img-responsive" alt="12 Monkeys" width="300" height="200"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:38px;">12 Monkeys</p></center><br>
	    <center><p style="font-family:Serif;font-size:28px;">Director: Terry Gilliam<br>
	    Initial release: 5 January 1996 (USA)<br>
	    Genre: Drama/Fiction/Science<br></p>
	
	</div>
    </div>
	
	<!-- for mobile -->
	<div class="col-xs-12 hidden-sm hidden-lg hidden-md">
   <br>
     <div class="container-fluid">
     <center><img src="./static/images/12.jpg" class="img-responsive" alt="12 monkeys" width="200" height="100"></center>
	 <br>
	    <center><p style="font-family:Serif;font-size:30px;">12 Monkeys</p></center><br>
	    <center><p style="font-family:Serif;font-size:24px;">Director: Terry Gilliam<br>
	    Initial release: 5 January 1996 (USA)<br>
	    Genre: Drama/Fiction/Science<br></p>
	    
	
	</div>
    </div>
	
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
	<br><br>
	  <div class="row">
	  <div class="container-fluid">
	  <!-- 1 -->
	  <!-- for pc -->
	  <div class="col-lg-8 hidden-md hidden-sm hidden-xs">
	
	  <iframe  width="800" height="400" align="center" src="https://www.youtube.com/embed/wZNcVYqnCFw">
      </iframe>
	  
	  </div>
      <div class="hidden-lg col-md-8 hidden-sm hidden-xs">
	
	  <iframe  width="600" height="300" align="center" src="https://www.youtube.com/embed/wZNcVYqnCFw">
      </iframe>
	  
	  </div>
       	  
	  <!-- for mobile -->
	  <div class="col-sm-12 col-xs-12 hidden-lg hidden-md">
	  <div class="resp-container">
	  <iframe class="resp-iframe" src="https://www.youtube.com/embed/wZNcVYqnCFw" gesture="media"  allow="encrypted-media" allowfullscreen>
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
	
	<p style="font-size:25px;">Intense film about time travel, this sci-fi entry was directed by Terry Gilliam, a member of the comedy troupe Monty Python. The film stars Bruce Willis as James Cole, a prisoner of the state in the year 2035 who can earn parole if he agrees to travel back in time and thwart a devastating plague. The virus has wiped out most of the Earth's population and the remainder live underground because the air is poisonous. Returning to the year 1990, six years before the start of the plague, Cole is soon imprisoned in a psychiatric facility because his warnings sound like mad ravings. There he meets a scientist named Dr. Kathryn Railly (Madeleine Stowe) and Jeffrey Goines (Brad Pitt), the mad son of an eminent virologist (Christopher Plummer). Cole is returned by the authorities to the year 2035, and finally ends up at his intended destination in 1996. He kidnaps Dr. Railly in order to enlist her help in his quest. Cole discovers graffiti by an apparent animal rights group called the Army of the Twelve Monkeys, but as he delves into the mystery, he hears voices, loses his bearings, and doubts his own sanity</p>
	
	</div>
	</div>
	<br><br><br>
	</div>
	
<br>
<?php if (isset($_SESSION['user']['username'])) { ?>
<h2> Give your own reviews </h2>
<br>
<form method="POST" action="comments.inc.php">
    <input type="hidden" name="mid" value="7">
	<input type="hidden" name="user_id" value="<?php echo $_SESSION['user']['id'] ?>">
    <input type="hidden" name="user_name" value="<?php echo $_SESSION['user']['username'] ?>">
	<textarea style="width:60%;height:120px" name="body"></textarea><br><br>
	<button type="submit" name="submit">SUBMIT</button>
</form>

<?php }else{ ?>
    <h2>Login to add your own review!</h2>
<?php } ?>


<?php

$result = mysqli_query($conn,"SELECT * from reviews where movie_id=7");

?>
<?php

while($rows = mysqli_fetch_assoc($result))
			 {
			 	?>
			 <br>
			 <div class="comment-box" style="width:80%;padding:20px;margin-bottom:4px;background-color:#457D63;border-radius:10px;">
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
function myFunction1() {
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



