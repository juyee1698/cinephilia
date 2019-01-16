<?php require_once('config.php') ?>
 <html lang ="en">
	<head>			
		<title>Community</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="static/css/Main.css">
        <link rel="stylesheet" href="static/css/Main1.css">
		<link rel="stylesheet" href="static/css/communitycss.css">
		<meta charset="UTF-8">
		
		
	</head>
	
	<body style="background-color:#DEE6E2;">
		<!-- for pc -->
			<!-- The Navigation Bar and ongoing discussions text box-->

    <?php if (isset($_SESSION['user']['username'])) { ?>


	<?php include('includes/navbar1.php') ?>
		
		<div class="container">
		  
			<div class="block" style="margin-left:50px;">
			
							<h2>Ongoing Discussions</h2>
							<br>
							<div class="comment-box" style="width:70%;">
								<img src="static/images/nolan.jpg" class="image" alt="nolan" width="200" height="200">
								<div style="padding-left:225px; padding-top:50px; height:300px;"> 
								<a id="disc" href="disc1.php" >Nolan or Tarantino?</a>
								<p style="color: black; padding: 10px 25px;">Gather on for a battle, all you movie buffs!</p>
								</div>
							</div>
							
							<br>
							<div class="comment-box" style="width:70%;">
								<img src="static/images/top_5.jpg" class="image" alt="top-5" width="200" height="200">
								<div style="padding-left:225px; padding-top:50px; height:300px;">
								<a id="disc" href="disc2.php" >Top 5 Movies you have watched this year</a>
								<p style="color: black; padding: 10px 25px;">Discuss all about your movie explorations here!</p>
								</div>
							</div>
							
							<br>
							<div class="comment-box" style="width:70%;">
								<img src="static/images/film.jpg" class="image" alt="Film" width="200" height="200">
								<div style="padding-left:225px; padding-top:50px; height:300px;">
								<a id="disc" href="disc3.php" >Favourite movie of all time?</a>
								<p style="color: black; padding: 10px 25px;">Come and share your movie suggestions.</p>
								</div>
							</div>
				            <br>
							
							<div class="comment-box" style="width:70%;">
								<img src="static/images/star-wars.jpg" class="image" alt="Star Wars" width="200" height="200">
								<div style="padding-left:225px; padding-top:50px; height:300px;">
								<a id="disc" href="disc4.php" >Star Wars</a>
								<p style="color:black; padding: 10px 25px;">Come to the dark side, won't you?</p>
								</div>
							</div>
							<br>
			</div>
	 
		</div>


<?php }else{ ?>

<center><h1>Error 404: Page not found</h1>
<a href="index.php"> Redirect to home page </a></center>

<?php } ?>

		
	</body>
</html>