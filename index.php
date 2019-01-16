<?php require_once('config.php') ?>
<?php  include('includes/registration_login.php'); ?>
<?php require_once('includes/head_section.php') ?>
<link rel="stylesheet" href="static/css/Main.css">
<title>Home Page</title>
</head>

<style>

.flex-container {
  display: flex;
  flex-wrap: wrap;
  
}

</style>

<body ng-app="indexApp" ng-controller="indexController">

<?php if (isset($_SESSION['user']['username'])) { 
       
     header("location:main.php"); 

 } else{ 


    include('includes/navbar.php') ?>


<div class="slideshow-container">

<div class="mySlides fade" id="slide1">
  <div class="text-block">
	<center><p style="font-size:3vw;">Deciding what to watch next?</p>
	<p style="font-size:2vw;">You are at the right place.</p><center>
	</div>
  <img src="static/images/movies12.jpg" style="height:550px;width:100%;">
  
</div>

<div class="mySlides fade" id="slide1">
  <div class="text-block">
	<center><p style="font-size:3vw;">Deciding what to watch next?</p>
	<p style="font-size:2vw;">You are at the right place.</p></center>
	</div>
  <img src="static/images/movies1.jpg" style="height:550px;width:100%">
  
</div>

<div class="mySlides fade" id="slide1">
  <div class="text-block">
	<center><p style="font-size:3vw;">Deciding what to watch next?</p>
	<p  style="font-size:2vw;">You are at the right place</p></center>
	</div>
  <img src="static/images/movies3.jpg" style="height:550px;width:100%">
 
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>




<div class="col-12" style="background-color:#DEE6E2;">
	<br><br><br>
	 <center><hr class="style2"></center>
      <center><h2 style="color:#177370">Discover The Best Here</h2></center>
	  <center><hr class="style2"></center>
	<div class="row1">
	  
	  <!-- row -->
	  <div class="flex-container">
	  
	  <!-- 1  -->
	  <div class="col-3">
	  <div class="gallery">
	    <a href="shawshank.php">
		<img class="img-responsive" src="static/images/shawshank.jpg" class="img-responsive" alt="Shawshank Redemption" width="600" height="400">
		</a>
		<div class="desc">Shawshank..</div>
	  </div> 
	  </div>
	  <!-- 2 -->
	  <div class="col-3">
	  <div class="gallery">
	    <a href="godfather.php">
		<img class="img-responsive" src="static/images/godfather.jpg" class="img-responsive" alt="The Godfather" width="600" height="400">
		</a>
		<div class="desc">The Godfather</div>
	  </div> 
	  </div>
	  <!-- 3 -->
	  <div class="col-3"  >
	  <div class="gallery">
	    <a href="fight-club.php">
		<img class="img-responsive" src="static/images/fight-club.jpg" class="img-responsive" alt="Fight Club" width="600" height="400">
		</a>
		<div class="desc">Fight Club</div>
	  </div> 
	  </div>
	  
	  <!-- 4 -->
	 <div class="col-3">
	  <div class="gallery">
	    <a href="inglourious.php">
		<img class="img-responsive" src="static/images/inglourious.jpg" alt="Inglourious basterds" width="600" height="400">
		</a>
		<div class="desc">Inglourious..</div>
	  </div>
     </div>
	 <div class="col-3">
  	   <div class="gallery">
	    <a href="memento.php">
        <img  class="img-responsive"  src="static/images/memento.jpg" alt="Memento" width="" height="400">
        </a>
        <div class="desc">Memento</div>  
	  </div>
	  </div> 
	  
	 <!-- 2 -->
       <div class="col-3">
	  <div class="gallery">
	    <a href="vendetta.php">
		<img class="img-responsive" src="static/images/vendetta.jpg" alt="V for Vendetta" width="" height="400">
		</a>
		<div class="desc">V for Vendetta</div>
	  </div>
	  </div>
	  
	  <!-- 3 -->
	  <div class="col-3">
	  <div class="gallery">
	    <a href="django.php">
		<img class="img-responsive" src="static/images/django.jpg" alt="Django Unchained" width="600" height="400">
		</a>
		<div class="desc">Django..</div>
	  </div>
	  </div>
	  
	  <!-- 4 -->
	  <div class="col-3">
	  <div class="gallery">
	    <a href="12.php">
		<img class="img-responsive" src="static/images/12.jpg" alt="12 Monkeys" width="600" height="400">
		</a>
		<div class="desc">12 Monkeys</div>
	  </div>
	  </div>
	 </div>
	  
	  
	 <div class="flex-container">
	
	  
	 
	
	 </div>
	 
	
	 
	  <br><br><br><br><br>

</div>
</div>

<div style="background-color:#DEE6E2">
<div id="bottom_link">
<div class="row" >
   <div class="search-container">
	<script>
	     function showHint(str) {
	    if (str.length == 0) { 
	        document.getElementById("txtHint").innerHTML = "";
	        return;
	    } else {
	        var xmlhttp = new XMLHttpRequest();
	        xmlhttp.onreadystatechange = function() {
	            if (this.readyState == 4 && this.status == 200) {
	                document.getElementById("txtHint").innerHTML = this.responseText;
	            }
	        };
	        xmlhttp.open("GET", "gethint.php?q=" + str, true);
	        xmlhttp.send();
	    }
      }
    </script>
  
   <label style="font-size:35px;color:#457D63;">Suggestions from a wide range of movies here</label><br><br>
		<form> 
		<input  placeholder="Search.." style=" margin-left:0rem;border: solid 1px;width:60%;" type="text" onkeyup="showHint(this.value)">
		</form>
		<p style=" margin-left:2rem;width:60%;"><h3><b>Suggestions:</b></h3><span id="txtHint"></span></p>
    
	
    </div>
</div>
</div>
<br><br><br>
 

<button class="collapsible">Thriller</button>
<div class="content">
  <div class="wrapper">

     <!-- 1  -->
			
			<div class="gallery">
				<a href="getout.php">
					<img  class="img-responsive" src="https://images-na.ssl-images-amazon.com/images/M/MV5BNTE2Nzg1NjkzNV5BMl5BanBnXkFtZTgwOTgyODMyMTI@._V1_SY1000_CR0,0,631,1000_AL_.jpg" alt="Get out" width="600" height="400">
				</a>
				<div class="desc">Get Out</div>
			</div>
		
			
			<!-- 2 -->
		
			<div class="gallery">
				<a href="prestige.php">
					<img class="img-responsive" src="static/images/prestige.jpg" class="img-responsive" alt="The Prestige" width="600" height="400">
				</a>
				<div class="desc">The Prestige</div>
			</div>
		
			
			<!-- 3 -->
			
			<div class="gallery">
				<a href="inception.php">
					<img class="img-responsive" src="static/images/inception.jpg" class="img-responsive" alt="Inception" width="600" height="400">
				</a>
				<div class="desc">Inception</div>
			</div>
	
			
			<!-- 4 -->
			
			<div class="gallery">
				<a href="departed.php">
					<img class="img-responsive" src="static/images/departed.jpg" class="img-responsive" alt="The Departed" width="600" height="400">
				</a>
				<div class="desc">The Departed</div>
			</div>
			
  
  </div>
  
  <div class="wrapper">
  
    <!-- 2 -->
	
			<div class="gallery">
              <a href="simple.php">
              <img  class="img-responsive" src="http://www.gstatic.com/tv/thumb/v22vodart/15223195/p15223195_v_v8_ab.jpg" alt="A simple favour" width="600" height="320">
              </a>
            <div class="desc">A simple favour</div>
           </div>	
		
		   
		   <!-- 3 -->
			
			<div class="gallery">
				<a href="nun.php">
					<img class="img-responsive" src="http://www.gstatic.com/tv/thumb/movieposters/13794422/p13794422_p_v8_af.jpg" class="img-responsive" alt="The Nun" width="600" height="400">
				</a>
				<div class="desc">The Nun</div>
			</div>

  
  
  
  
  </div>
</div> 


<button class="collapsible">Comedy</button>
<div class="content">
  <div class="wrapper">

    <!-- 1 -->
			
			 <div class="gallery">
	          <a href="marley.php">
		      <img class="img-responsive" src="static/images/marley.jpg" alt="Marley and Me" width="600" height="400">
		      </a>
		      <div class="desc">Marley and Me</div>
	         </div>
		 
			 
			 <!-- 2-->
			
			 <div class="gallery">
	           <a href="safety.php">
		      <img class="img-responsive" src="static/images/safety.jpg" alt="Safety Not Guaranteed" width="600" height="400">
		       </a>
		      <div class="desc">Safety not..</div>
	         </div>
		    
			 
			 <!-- 3-->
			 
			 <div class="gallery">
	           <a  href="superbad.php">
		      <img class="img-responsive" src="http://www.gstatic.com/tv/thumb/v22vodart/167014/p167014_v_v8_aa.jpg" alt="Superbad" width="600" height="400">
		       </a>
		      <div class="desc">Superbad</div>
	         </div>
		     
			 
			 <!-- 4 -->
			
			 <div class="gallery">
	           <a  href="hangover.php">
		      <img class="img-responsive" src="http://www.gstatic.com/tv/thumb/v22vodart/192248/p192248_v_v8_al.jpg" alt="The Hangover" width="600" height="400">
		       </a>
		      <div class="desc">The Hangover</div>
	         </div>
		     
</div>
</div>


<button class="collapsible">Drama</button>
<div class="content">
  <div class="wrapper">

     <!-- 1 -->
          
		    <div class="gallery">
	         <a href="good.php">
		      <img class="img-responsive" src="static/images/will.jpg" alt="Good Will Hunting" width="600" height="400">
		      </a>
		     <div class="desc">Good Will..</div>
		   </div>
		   
		   
		   <!-- 2 -->
          
		    <div class="gallery">
	         <a  href="whiplash.php">
		      <img class="img-responsive" src="static/images/whiplash.jpg" alt="Whiplash" width="600" height="400">
		      </a>
		    <div class="desc">Whiplash</div>
	        </div>
		   
		   
		   <!-- 3 -->
	       
	        <div class="gallery">
	         <a href="inglourious.php">
		     <img class="img-responsive" src="static/images/inglourious.jpg" alt="Inglourious basterds" width="600" height="400">
             </a>
		    <div class="desc">Inglourious..</div>
	       </div>
         
		   
		   <!-- 4 -->
		  
		    <div class="gallery">
	      <a href="lady-bird.php">
		  <img class="img-responsive" src="static/images/lady.jpg" alt="Lady Bird" width="600" height="400">
		   </a>
		  <div class="desc">Lady Bird</div>
	      </div>

  
</div>


     <div class="wrapper">
	 
	     
		  <div class="gallery">
	      <a href="billboards.php">
		  <img class="img-responsive" src="./static/images/three.jpg" alt="Three Billboards outside Ebbing,Missouri" width="600" height="400">
		   </a>
		  <div class="desc">Three Bill..</div>
	       </div>
		  
		   
		   
		   <div class="gallery">
	       <a href="tonya.php">
		   <img class="img-responsive" src="static/images/tonya.jpg" alt="I,Tonya" width="600" height="400">
		    </a>
		   <div class="desc">I,Tonya</div>
          </div>
		  
		
	 
	 
	 
	 </div>
</div>
<button class="collapsible">Romance</button>
 <div class="content">
   <div class="wrapper">
  
    <!-- 1 -->

		    <div class="gallery">
	       <a href="begin.php">
		  <img class="img-responsive" src="static/images/begin.jpg" alt="Begin Again" width="" height="400">
		   </a>
		   <div class="desc">Begin Again</div>
	      </div>
		  
		
		  <!-- 2 -->
		 
		   <div class="gallery">
	       <a href="./summer.php">
		  <img class="img-responsive" src="static/images/500.jpeg" alt="500 days of summer" width="" height="400">
		   </a>
		   <div class="desc">500 days of..</div>
	      </div>
		 
		  
		  <!-- 3 -->
		  <div class="col-3">
		  <div class="gallery">
	       <a href="./tfios.php">
		  <img class="img-responsive" src="static/images/tfios.jpg" alt="The Fault in our Stars" width="" height="400">
		   </a>
		   <div class="desc">The Fault in..</div>
	      </div>
		  </div>
		  
		  <!-- 4 -->
		  <div class="col-3">
		    <div class="gallery">
	       <a href="./noteebook.php">
		  <img class="img-responsive" src="static/images/nb.jpg" alt="The Notebook" width="" height="400">
		   </a>
		   <div class="desc">The Notebook</div>
	      </div>
		  </div>
    
   </div>
 </div>


<button class="collapsible">Crime/Mystery</button>
<div class="content">
  <div class="wrapper">
   
    <!-- 1 -->

		     
			  <div class="gallery">
	          <a href="./shutter.php">
		      <img class="img-responsive" src="static/images/shutter.jpg" alt="Shutter Island" width="600" height="">
		      </a>
		      <div class="desc">Shutter Island</div>
	         </div>
		  
		   
		   <!-- 2 -->
			<div class="gallery">
	         <a href="./beautiful.php">
		      <img class="img-responsive" src="static/images/mind.jpg" alt="A Beautiful Mind" width="600" height="400">
		     </a>
		     <div class="desc">A Beautiful Mind</div>
	       </div>
		  
		   
		   <!-- 3 -->
	     
	       <div class="gallery">
	         <a href="godfather.php">
		     <img class="img-responsive" src="static/images/godfather.jpg" class="img-responsive" alt="The Godfather" width="600" height="400">
		     </a>
		     <div class="desc">The Godfather</div>
	       </div> 
	   
		
		 <!-- 4 -->
		
		    
			<div class="gallery">
	          <a href="./atomic.php">
		      <img class="img-responsive" src="static/images/atomic.jpg" alt="Atomic Blonde" width="600" height="400">
		      </a>
		     <div class="desc">Atomic Blonde</div>
	        </div>
		


 </div>
</div>

<br><br><br><br>
</div>

 

<?php include('includes/footer.php') ?>
  

<?php } ?>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

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
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script>
// Get the modal
var modal1 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>

<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>

</body>
</html>
