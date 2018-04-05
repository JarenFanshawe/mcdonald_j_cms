<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Portal Login</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="loginBackground">
	<h1 class="hide">Admin Login</h1>

	<section class="row fullWidth" id="welcomeBanner">
		<h2>Member Login</h2>
	</section>

	<section class="row fullWidth">
	<?php if(!empty($message)){echo $message;} ?>

	<div class="small-12 columns" id="loginCon">
		<form action="admin_login.php" method="post">
			<label>Username:</label>
			<input type="text" name="username" value=""><br>

			<label>Password:</label>
			<input type="password" name="password" value=""><br>

			<input id="submitButton" type="submit" name="submit" value="Sign in">
		</form>
	</div>

	</section>
</body>
</html>
