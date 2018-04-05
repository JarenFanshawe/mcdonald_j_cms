<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();
	$id = $_SESSION['user_id'];
	//echo $id;

	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$info = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	//echo $info;

	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);

		$result = editUser($fname, $username, $password, $email, $id);
		$message = $result;
	}

?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Edit User</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<h1>Edit Account Page</h1>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_edituser.php" method="post" id="createCon">

	<label>First Name:</label>
	<input type="text" name="fname" value="<?php echo $info['user_fname']; ?> ">

	<label>Username:</label>
	<input type="text" name="username" value="<?php echo $info['user_name']; ?> ">

	<label>Password:</label>
	<input type="text" name="password" value="<?php echo $info['user_pass']; ?> ">

	<label>Email:</label>
	<input type="text" name="email" value="<?php echo $info['user_email']; ?> ">

	<input type="submit" name="submit" value="Apply Changes" id="submitButton">
	</form>
</body>
</html>
