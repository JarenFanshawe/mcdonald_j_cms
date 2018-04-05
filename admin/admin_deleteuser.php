<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();

	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Delete Users</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<h1>Delete User</h1>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<section>
		<?php

		while($row = mysqli_fetch_array($users)){
			echo "{$row['user_fname']}<a href=\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Remove</a><br>";
		}

		?>
	</section>

</body>
</html>
