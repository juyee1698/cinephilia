<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<?php require_once('includes/head_section.php') ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="static/css/Main.css">
<link rel="stylesheet" href="static/css/Main1.css">
<link rel="stylesheet" href="static/css/Aboutus.css">

</head>
<body style="background-color:#EFFFFF;">
	
	 <?php include('includes/navbar.php') ?>

	<div class="hero-image" style="width:100%;height:600px" >
		<img src="static/images/au_back.jpg" width=100%; height=600 style="opacity:0.35;"></img>
	  <div class="hero-text">
		<h1 style="font-size:5vw; font-family:Lucida Handwriting; color:#dd003e; font-weight:italic; opacity:1.0;">We Bring You The Best Movies..!</h1>
		
	  </div>
	</div>

<br>

<!-- <center> -->
<div class="div1" style="background-color:#81B99F; color:white;">
	<center>
	<br>
		<h3 style="color:#130D66; font-family:Varsity; font-size:35px;">Who We Are</h3>
		<p text-align:center;">Cinephilia is the newly developed site for movies recommendations for quality entertainment. <br>
		Our mission is to help people find and share movies they love. <br>
		Cinephilia launched in 2018.</p>
		<br>
		
		<h3 style="color:#130D66; font-family:Varsity; font-size:35px;">A Few Things You Can Do On Cinephilia</h3>
		<p text-align:justify;">See what movies your friends are browsing.<br>
		See the latest and trending movies in Hollywood.<br>
		Track the movies trailers you have seen and want to see.<br>
		Check out your personalized movies recommendations.<br>
		Find out if a movie is a good fit for you from our community’s reviews.</p>
		<br>
		
		<h3 style="color:#130D66; font-family:Varsity; font-size:35px;">Developers</h3>
		<div class="flex-container" style="display:flex; justify-content:space-around;">
			<div>
			<img src="static/images/juyee.jpg" alt="Juyee" width="150" height="150"><br>
			<p style="font-size:25px; color:black; text-align:center; font-family:Varsity;">Juyee Sabade<br>2016.juyee.sabade@ves.ac.in<br>Contact no: 8879834298</p>
			</img>
			</div>
			
			<div>
			<img src="static/images/bhakti.jpg" alt="Bhakti" width="150" height="150"><br>
			<p style="font-size:25px; color:black; text-align:center; font-family:Varsity;">Bhakti Rijhwani<br>2016.bhakti.rijhwani@ves.ac.in<br>Contact no: 7744921468</p>
			</img>
			</div>  
			
			<div>
			<img src="static/images/tejashree.jpg" alt="Tejashree" width="150" height="150"><br>
			<p style="font-size:25px; color:black; text-align:center; font-family:Varsity;">Tejashree Patil<br>2016.tejashree.patil@ves.ac.in<br>Contact no: 9594028085</p>
			</img>
			</div>
		</div>
		
		<br><br>
		
	</center>	
</div>	
			

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
