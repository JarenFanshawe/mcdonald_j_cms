<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];

	$result = multiReturns(17);
	list($add, $multiply) = multiReturns(24567);

?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Multireturns</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="loginBackground">
	<h1 class="hide">Multireturns</h1>

	<section class="row fullWidth" id="welcomeBanner">
		<h2>Multireturns</h2>
	</section>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<section class="row fullWidth">
	<?php
		echo "Result 1: {$result[0]}<br>";
		echo "Result 2: {$result[1]}<br>";
		echo "Result 1 from list: {$add}<br>";
		echo "Result 2 from list: {$multiply}<br>";
	?>

	</section>
</body>
</html>
