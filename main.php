<?php require_once('config.php') ?>
<?php require_once('includes/head_section.php') ?>
<link rel="stylesheet" href="static/css/Main.css">
<link rel="stylesheet" href="static/css/Main1.css">
</head>
<style>

.flex-container {
  display: flex;
  flex-wrap: wrap;
}

.col {

	margin-left:4%;
}

@media screen and (max-width: 400px) {
    .col {   
        margin-left:0%;
    }
}


</style>
<body>

<?php if (isset($_SESSION['user']['username'])) { ?>
  

<?php include('includes/navbar1.php') ?>


<div class="row">

  
  <div class="main">
      <h2>New Releases</h2>
	   
	  <div class="slideshow-container">

       <div class="Slides">
          <div class="numbertext">1 / 6</div>
          <a href="./simple.php">
          <img id="slide" src="./static/images/favor.png" class="responsive" style="width:100%;height:350;">
          </a>
       </div>

       <div class="Slides">
         <div class="numbertext">2 / 6</div>
        
         <img id="slide" src="./static/images/grindlewald.png" class="responsive" style="width:100%;height:350;">
         
        </div>

      <div class="Slides">
        <div class="numbertext">3 / 6</div>
        <a href="./nun.php">
        <img id="slide" src="./static/images/nun.jpg" class="responsive" style="width:100%;height:350;">
       </a>
      </div>
	  
	  <div class="Slides">
        <div class="numbertext">4 / 6</div>
        <a href="./billboard.php">
        <img id="slide" src="./static/images/billboard.jpg" class="responsive" style="width:100%;height:350;">
		 </a>
      </div>
	  
	  <div class="Slides">
        <div class="numbertext">5 / 6</div>
        <a href="./lady-bird.php">
        <img id="slide" src="./static/images/ladybird.jpg" class="responsive" style="width:100%;max-height:350px;">
        </a>
      </div>
	  
	  <div class="Slides">
        <div class="numbertext">6 / 6</div>
        <a href="./tonya.php">
        <img id="slide" src="./static/images/itonya.jpg" class="responsive" style="width:100%;max-height:350px;">
        </a>
      </div>

      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
     <a class="next" onclick="plusSlides(1)">&#10095;</a>

   </div>
   <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span> 
      <span class="dot" onclick="currentSlide(2)"></span> 
      <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span> 
	  <span class="dot" onclick="currentSlide(5)"></span> 
	  <span class="dot" onclick="currentSlide(6)"></span> 
    </div>
 
      <br><br>
	  <hr class="style2">
	   <h2>Browse from a wide variety of genres..</h2>
	  <div class="my-movies" id="bottom_link">
        <h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Thriller</h3>
	    <div class="flex-container">
		   
			<!-- 1  -->
			<div class="col">
			<div class="gallery">
				<a href="./getout.php">
					<img  class="img-responsive" src="static/images/get-out.jpg" alt="Get out" width="600" height="400">
				</a>
				<div class="desc">Get Out</div>
			</div>
			</div>
			
			<!-- 2 -->
			<div class="col">
			<div class="gallery">
				<a href="./prestige.php">
					<img class="img-responsive" src="static/images/prestige.jpg" class="img-responsive" alt="The Prestige" width="600" height="400">
				</a>
				<div class="desc">The Prestige</div>
			</div>
			</div>
			
			<!-- 3 -->
			<div class="col" >
			<div class="gallery">
				<a href="./inception.php">
					<img class="img-responsive" src="static/images/inception.jpg" class="img-responsive" alt="Inception" width="600" height="400">
				</a>
				<div class="desc">Inception</div>
			</div>
			</div>
			
			<!-- 4 -->
			<div class="col">
			<div class="gallery">
				<a href="./departed.php">
					<img class="img-responsive" src="static/images/departed.jpg" class="img-responsive" alt="The Departed" width="600" height="400">
				</a>
				<div class="desc">The Departed</div>
			</div>
			</div>
			
		
			<!-- 1  -->
			<div class="col">
	          <div class="gallery">
	           <a href="vendetta.php">
		        <img class="img-responsive" src="static/images/vendetta.jpg" alt="V for Vendetta" width="" height="400">
		       </a>
		      <div class="desc">V for Vendetta</div>
	         </div>
	       </div>
			
			<!-- 2 -->
			<div class="col">
			<div class="gallery">
              <a href="simple.php">
              <img  class="img-responsive" src="http://www.gstatic.com/tv/thumb/v22vodart/15223195/p15223195_v_v8_ab.jpg" alt="A simple favour" width="600" height="320">
              </a>
            <div class="desc">A simple favour</div>
           </div>	
		   </div>
		   
		   <!-- 3 -->
			<div class="col">
			<div class="gallery">
				<a href="./nun.php">
					<img class="img-responsive" src="http://www.gstatic.com/tv/thumb/movieposters/13794422/p13794422_p_v8_af.jpg" class="img-responsive" alt="The Nun" width="600" height="400">
				</a>
				<div class="desc">The Nun</div>
			</div>
			</div>
		
		
		</div>

		<h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Comedy</h3>
	    <div class="flex-container">
		
		     <!-- 1 -->
			 <div class="col">
			 <div class="gallery">
	          <a href="./marley.php">
		      <img class="img-responsive" src="static/images/marley.jpg" alt="Marley and Me" width="600" height="400">
		      </a>
		      <div class="desc">Marley and Me</div>
	         </div>
		     </div>
			 
			 <!-- 2-->
			 <div class="col">
			 <div class="gallery">
	           <a href="./safety.php">
		      <img class="img-responsive" src="static/images/safety.jpg" alt="Safety Not Guaranteed" width="600" height="400">
		       </a>
		      <div class="desc">Safety not..</div>
	         </div>
		     </div>
			 
			 <!-- 3-->
			 <div class="col">
			 <div class="gallery">
	           <a href="superbad.php">
		      <img class="img-responsive" src="static/images/superbad.jpg" alt="Superbad" width="600" height="400">
		       </a>
		      <div class="desc">Superbad</div>
	         </div>
		     </div>
			 
			 <!-- 4 -->
			 <div class="col">
			 <div class="gallery">
	           <a href="./hangover.php">
		      <img class="img-responsive" src="static/images/hangover.jpg" alt="The Hangover" width="600" height="400">
		       </a>
		      <div class="desc">The Hangover</div>
	         </div>
		     </div>
		
	    </div>
		
		<h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Drama</h3>
		<div class="flex-container">
		
		   <!-- 1 -->
			<div class="col">
			<div class="gallery">
				<a  href="fight-club.php">
					<img class="img-responsive" src="static/images/fight-club.jpg" class="img-responsive" alt="Fight Club" width="600" height="400">
				</a>
				<div class="desc">Fight Club</div>
			</div> 
			</div>
			
			<!-- 2 -->
			<div class="col">
			<div class="gallery">
				<a href="shawshank.php">
					<img class="img-responsive" src="static/images/shawshank.jpg" class="img-responsive" alt="Shawshank Redemption" width="600" height="400">
				</a>
				<div class="desc">The Shawshank..</div>
			</div>
			</div>

            <!-- 3 -->
	        <div class="col">
	          <div class="gallery">
	          <a href="django.php">
		      <img class="img-responsive" src="static/images/django.jpg" alt="Django Unchained" width="600" height="400">
		      </a>
		      <div class="desc">Django..</div>
	         </div>
	        </div>	
           
		    <!-- 4 -->
            <div class="col">
  	         <div class="gallery">
	          <a href="memento.php">
              <img  class="img-responsive"  src="static/images/memento.jpg" alt="Memento" width="" height="400">
               </a>
              <div class="desc">Memento</div>  
	         </div>
	        </div> 		   
		
		
		   <!-- 1 -->
           <div class="col">
		    <div class="gallery">
	         <a href="good.php">
		      <img class="img-responsive" src="static/images/will.jpg" alt="Good Will Hunting" width="600" height="400">
		      </a>
		     <div class="desc">Good Will..</div>
		   </div>
		   </div>
		   
		   <!-- 2 -->
           <div class="col">
		    <div class="gallery">
	         <a href="whiplash.php">
		      <img class="img-responsive" src="static/images/whiplash.jpg" alt="Whiplash" width="600" height="400">
		      </a>
		    <div class="desc">Whiplash</div>
	        </div>
		   </div>
		   
		   <!-- 3 -->
	       <div class="col">
	        <div class="gallery">
	         <a href="inglourious.php">
		     <img class="img-responsive" src="static/images/inglourious.jpg" alt="Inglourious basterds" width="600" height="400">
             </a>
		    <div class="desc">Inglourious..</div>
	       </div>
           </div>
		   
		   <!-- 4 -->
		   <div class="col">
		    <div class="gallery">
	      <a href="lady-bird.php">
		  <img class="img-responsive" src="static/images/lady.jpg" alt="Lady Bird" width="600" height="400">
		   </a>
		  <div class="desc">Lady Bird</div>
	      </div>
		  </div>
		   
		
		  <div class="col">
		  <div class="gallery">
	      <a href="billboards.php">
		  <img class="img-responsive" src="static/images/three.jpg" alt="Three Billboards outside Ebbing,Missouri" width="600" height="400">
		   </a>
		  <div class="desc">Three Bill..</div>
	       </div>
		   </div>
		   
		   <div class="col">
		   <div class="gallery">
	       <a href="tonya.php">
		   <img class="img-responsive" src="static/images/tonya.jpg" alt="I,Tonya" width="600" height="400">
		    </a>
		   <div class="desc">I,Tonya</div>
          </div>
		   </div>
		
		
		
		</div>
		
		<h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Romance</h3>
		<div class="flex-container">
		   
		   <!-- 1 -->
		   <div class="col">
		    <div class="gallery">
	       <a href="./begin.php">
		  <img class="img-responsive" src="static/images/begin.jpg" alt="Begin Again" width="" height="400">
		   </a>
		   <div class="desc">Begin Again</div>
	      </div>
		   </div>
		
		  <!-- 2 -->
		  <div class="col">
		   <div class="gallery">
	       <a href="./summer.php">
		  <img class="img-responsive" src="static/images/500.jpeg" alt="500 days of Summer" width="" height="400">
		   </a>
		   <div class="desc">500 days of..</div>
	      </div>
		  </div>
		  
		  <!-- 3 -->
		  <div class="col">
		  <div class="gallery">
	       <a href="./tfios.php">
		  <img class="img-responsive" src="static/images/tfios.jpg" alt="The Fault in our Stars" width="" height="400">
		   </a>
		   <div class="desc">The Fault in..</div>
	      </div>
		  </div>
		  
		  <!-- 4 -->
		  <div class="col">
		    <div class="gallery">
	       <a href="./noteebook.php">
		  <img class="img-responsive" src="static/images/nb.jpg" alt="The Notebook" width="" height="400">
		   </a>
		   <div class="desc">The Notebook</div>
	      </div>
		  </div>
		
		</div>
		
		<h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Crime/Mystery</h3>
		<div class="flex-container">
		   
		   <!-- 1 -->
		   <div class="col">
		     
			  <div class="gallery">
	          <a href="./shutter.php">
		      <img class="img-responsive" src="static/images/shutter.jpg" alt="Shutter Island" width="600" height="">
		      </a>
		      <div class="desc">Shutter Island</div>
	         </div>
		   </div>
		   
		   <!-- 2 -->
		   <div class="col">
		    
			<div class="gallery">
	         <a href="./beautiful.php">
		      <img class="img-responsive" src="static/images/mind.jpg" alt="A Beautiful Mind" width="600" height="400">
		     </a>
		     <div class="desc">A Beautiful Mind</div>
	       </div>
		   </div>
		   
		   <!-- 3 -->
	      <div class="col">
	       <div class="gallery">
	         <a href="godfather.php">
		     <img class="img-responsive" src="static/images/godfather.jpg" class="img-responsive" alt="The Godfather" width="600" height="400">
		     </a>
		     <div class="desc">The Godfather</div>
	       </div> 
	    </div>
		
		 <!-- 4 -->
		 <div class="col">
		    
			<div class="gallery">
	          <a href="./atomic.php">
		      <img class="img-responsive" src="static/images/atomic.jpg" alt="Atomic Blonde" width="600" height="400">
		      </a>
		     <div class="desc">Atomic Blonde</div>
	        </div>
		 </div>
		
		</div>
		
		<h3 style="background-color: #457D63; color:white; text-align:center; padding:10px 0px 10px 0px;">Science Fiction</h3>
		<div class="flex-container">
		
		 <!-- 1 -->
	  <div class="col">
	  <div class="gallery">
	    <a href="12.php">
		<img class="img-responsive" src="static/images/12.jpg" alt="12 Monkeys" width="600" height="400">
		</a>
		<div class="desc">12 Monkeys</div>
	  </div>
	  </div>
	  
	    <!-- 2 -->
		<div class="col">
		  <div class="gallery">
	       <a href="./donnie.php">
		  <img class="img-responsive" src="static/images/donnie.jpg" alt="Donnie Darko" width="" height="400">
		   </a>
		   <div class="desc">Donnie Darko</div>
	      </div>
		</div>
		
		
		
		</div>
		
      </div>
	  <br><br><br>
  </div>
  
  <div class="side">
      <h2 style="color:green">Top Critics who reviewed this week!</h2>
	 
<?php
$result = mysqli_query($conn,"SELECT * from reviews where user_id in(SELECT id from users where role='Author') order by rid desc limit 5");

?>

<?php
while($rows = mysqli_fetch_assoc($result))
			 {
			 	?>
			 <br>
			 <div class="comment-box" style="width:90%;padding:10px;background-color:#457D63;border-radius:10px;">
			 <div class="row">
              <img src="./static/images/user2.png" width=10% height=20%>&nbsp;&nbsp;
              <h3 style="color:white;"><?php echo $rows['user_name']; ?></h3>
            </div>
              <span style="color:white" class="time-right"><?php echo $rows['created_at']; ?></span>
			  <br>
  				<p style="color:white"><?php echo $rows['body']; ?></p>
             </div>

			 

			 <?php } ?>
	 
   </div>
<br><br><br><br>
</div>


<?php include('includes/footer.php') ?>


<?php }else{ ?>

<center><h1>Error 404: Page not found</h1>
<a href="index.php"> Redirect to home page </a></center>

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

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("Slides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
