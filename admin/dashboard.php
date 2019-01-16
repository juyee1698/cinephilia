<?php  include('../config.php'); ?>
<?php if (isset($_SESSION['user']['username'])) { ?>

     <?php
	   include(ROOT_PATH . '/jui/admin/admin_functions.php');
	   include(ROOT_PATH . '/jui/admin/includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>

	<div class="header">
		<div class="logo">
			<a href="<?php echo BASE_URL .'admin/dashboard.php' ?>">
				<h1>Cinephilia - Admin</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo BASE_URL . './logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>Newly registered users</span>
			</a>
			<a href="posts.php">
				<span>Published Movies</span>
			</a>
			<a>
				<span>Published comments</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Add Users</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>

<?php }else{ ?>

<center><h1>Error 404: Page not found</h1>
<a href="../index.php"> Redirect to home page </a></center>

<?php } ?>

</body>
</html>