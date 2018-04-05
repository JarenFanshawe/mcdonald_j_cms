<?php
	//ini_set('display_errors',1);
	//error_reporting(E_ALL);
	require_once('phpscripts/config.php');
	require_once('phpscripts/connect.php');

	confirm_logged_in();

	if(isset($_POST['generate'])) {

		$randoCar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%?";

		$mixed = substr(str_shuffle($randoCar), 0,8);

	}

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$userlvl = $_POST['userlvl'];

		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
		}
	}

?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Create User</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<h1>Welcome Company Name to your create user page</h1>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<?php if(!empty($message)){echo $message;} ?>

	<form action="admin_createuser.php" method="post" id="createCon">

		<label>First Name:</label>
		<input type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?> ">

		<label>Username:</label>
		<input type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?> ">

		<label>Password:</label>
		<input type="text" name="password" value="	<?php if(!empty($password)){echo $password;} echo $mixed ?> ">
		<input type="submit" name="generate" value="Generate Random Password" id="submitButton">

		<label>Email:</label>
		<input type="text" name="email" value="	<?php if(!empty($email)){echo $email;} ?> ">

		<label>User Level:</label>
		<select name="userlvl">
			<option value="">Please select a user level</option>
			<option value="2">Web Admin</option>
			<option value="1">Web Master</option>
		</select>

		<input type="submit" name="submit" value="Create User" id="submitButton">
	</form>
</body>
</html>
