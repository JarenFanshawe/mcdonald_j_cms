<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Admin Portal</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<h1 id="adminTitle"><?php echo "{$_SESSION['user_name']}'s admin page"; ?></h1>

	<section class="row fullWidth">
		<ul id="adminNav">
			<li><a href="admin_createuser.php">Create User</a></li>
			<li><a href="admin_addmovie.php">Add a Movie</a></li>
			<li><a href="admin_multireturns.php">Multireturns</a></li>
			<li><a href="admin_editallNav.php">Edit all pages</a></li>
			<li><a href="admin_edituser.php">Edit User</a></li>
			<li><a href="admin_deleteuser.php">Delete User</a></li>
			<li><a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
		</ul>
	</section>

	<script src="js/vendor/jquery.js"></script>
	<script src="js/vendor/what-input.js"></script>
	<script src="js/vendor/foundation.js"></script>
	<script src="js/app.js"></script>
</body>
</html>
