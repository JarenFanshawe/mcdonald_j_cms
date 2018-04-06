<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();

	$tbl = "tbl_movies";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Edit Movies</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<h1>Edit Movies</h1>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<section>
		<?php

		while($row = mysqli_fetch_array($users)){
			echo "{$row['movies_title']}<a id=\"editLinks\" href=\"admin_editall.php?id={$row['movies_id']}\">  Edit</a><br>";
		}

		?>
	</section>

</body>
</html>
