<div class="topnav" id="myTopnav">
  <a class="active" style="font-family:vendetta color:white;text-align:left;font-size:25px;padding:12px 12px;">&nbsp; &nbsp; Cinephilia &nbsp;</a>
  <a href="main.php" style="font-size:15px;">Home</a>
   <a href="#bottom_link" style="font-size:15px;">Browse by
    <i class="fa fa-caret-down"></i>
   </a>
   <a href="Community.php" style="font-size:15px;">Community</a>
   <div class="dropdown" style="font-size:15px;padding:5px;">
    <button class="dropbtn">My Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div class="card">
       <?php if ( in_array($_SESSION['user']['role'], ["Author"])) { ?>
        <?php $_SESSION['message'] = "You are a critic"; ?>
         <img src="./static/images/user2.png" alt="John" style="width:60%">
      <?php } else { ?>
         <img src="./static/images/user1.png" alt="John" style="width:60%">
      <?php } ?>
       <h1><?php echo $_SESSION['user']['username'] ?></h1>
        <p class="title"><?php echo $_SESSION['user']['country'] ?></p>
        <p><?php echo $_SESSION['user']['age'] ?></p>
        <div style="margin: 24px 0;">
           <a href="#"><i class="fa fa-twitter"></i></a>  
           <a href="#"><i class="fa fa-linkedin"></i></a>  
           <a href="#"><i class="fa fa-facebook"></i></a> 
		   <a href='logout.php'>Log Out</i></a> 
      </div>
    </div>
    </div>
  </div> 
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="float:right"></i>
  </a>
</div>