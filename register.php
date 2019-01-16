<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>
<?php include('includes/head_section.php'); ?>

<link rel="stylesheet" href="static/css/public_styling.css">
<title>Cinephilia | Sign up </title>
</head>
<body>

<?php if (isset($_SESSION['user']['username'])) { ?>
       
      <?php header("location:main.php"); ?>

<?php }else{ ?>
	<!-- Navbar -->
		<?php include('/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 60%; margin: 20px auto;">
		<form method="post" action="register.php" >
		   
			<h2>Register on Cinephilia</h2>
			<?php include('includes/error.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username" required>
			<input type="text" name="email" value="<?php echo $email ?>" placeholder="Email" required>
			
                 <input id="myInput" type="text" name="country" placeholder="Enter your Country" value="<?php echo $country; ?>" required>
              
			
			<input type="text" name="age" value="<?php echo $age ?>" placeholder="Enter your Age" required>
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
			
		</form>
	</div>

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

  