<?php

	function createUser($fname, $username, $password, $email, $userlvl) {
		include('connect.php');
		include('config.php');

		$userString = "INSERT INTO tbl_user VALUES(NULL,'{$fname}', '{$username}', '{$password}', '{$email}', NULL, 'no', '{$userlvl}')";
		//echo $userString;
		$userQuery = mysqli_query($link, $userString);
		if($userQuery) {
			mail($email, "New user account created!", "From: estyn72@gmail.com");

			redirect_to("admin_index.php");
		}else{
			$message = "There was a problem setting up this user. Maybe reconsider your hiring practices.";
			return $message;
		}

		mysqli_close($link);
	}

	function editUser($fname, $username, $password, $email, $id) {
		include('connect.php');

		$updateString = "UPDATE tbl_user SET user_fname = '{$fname}', user_name = '{$username}', user_pass = '{$password}', user_email = '{$email}' WHERE user_id={$id}";
		//echo $updateString;

		$updateQuery = mysqli_query($link, $updateString);
		if($updateQuery) {
			redirect_to("phpscripts/caller.php?caller_id=logout");
		}else{
			$message = "There was a problem changing this user. Please try again.";
			return $message;
		}

		mysqli_close($link);
	}

	function deleteUser($id) {
		include('connect.php');

		$delstring = "DELETE FROM tbl_user WHERE user_id = {$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery) {
			redirect_to("../admin_index.php");
		}else{
			$message = "There was a problem deleting this user. Please try again.";
			return $message;
		}

		mysqli_close($link);
	}




?>
