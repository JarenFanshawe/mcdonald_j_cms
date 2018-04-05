<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	require_once('phpscripts/connect.php');

	$moviesId = mysqli_real_escape_string($link, $_GET['id']);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Edit form</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="loginBackground">
	<h1 class="hide">Multireturns</h1>

	<section class="row fullWidth" id="welcomeBanner">
		<h2>Edit all content</h2>
	</section>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<section class="row fullWidth">
	<?php
		$tbl = "tbl_movies";
		$col = "movies_id";
		$moviesId;
		echo singleEdit($tbl, $col, $moviesId);
	?>

	</section>
</body>
</html>
