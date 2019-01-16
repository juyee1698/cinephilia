<?php  include('config.php'); ?>
<?php  include('includes/registration_login.php'); ?>
<?php  include('includes/head_section.php'); ?>
<link rel="stylesheet" href="static/css/Main.css">

	<title>	Cinephilia| Sign in </title>
</head>
<body>
<?php if (isset($_SESSION['user']['username'])) { ?>
       
      <?php header("location:main.php"); ?>

<?php }else{ ?>


	<!-- Navbar -->
	<?php include( 'includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="login.php" >
			<h2>Login</h2>
			<?php include(ROOT_PATH . '/jui/includes/error.php') ?>
			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<button type="submit" style="color: white;background: #4E6166;text-align: center;border: none;
			border-radius: 5px;display: block;letter-spacing: .1em;margin: 10px 0px; padding: 13px 20px;text-decoration: none;" class="btn" name="login_btn">Login</button>
			<p>
				Not yet a member? <a href="register.php">Sign up</a>
			</p>
		</form>
	</div>

<?php } ?>

