<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$tbl = "tbl_genre";
	$genQuery = getAll($tbl);

	if(isset($_POST['submit'])){
		$cover = $_FILES['cover'];
		$title = $_POST['title'];
		$year = $_POST['year'];
		$runtime = $_POST['duration'];
		$storyline = $_POST['plot'];
		$release = $_POST['release'];
		$genre = $_POST['genList'];

		$result = addMovie($cover, $title, $year, $runtime, $storyline, $release, $genre);
		$message = $result;

		// if(empty($cover)){
		// 	$message = "Please select a cover image.";
		// }else{
		// 	$result = addMovie($cover, $title, $year, $runtime, $storyline, $trailer, $release);
		// 	$message = $result;
		// }

	}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>CMS Add Movie</title>

	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/main.css">

	<link href="https://fonts.googleapis.com/css?family=Muli|Open+Sans" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body id="loginBackground">
	<h1 class="hide">Add Movie</h1>

	<section class="row fullWidth" id="welcomeBanner">
		<h2>Movie Input</h2>
	</section>

	<section class="row fullWidth" id="loginCon">
		<a href="admin_index.php">Back</a>
	</section>

	<section class="row fullWidth">
	<?php if(!empty($message)){echo $message;} ?>

	<div class="small-12 columns" id="loginCon">
		<form action="admin_addmovie.php" method="post" enctype="multipart/form-data">
			<label>Cover Image</label>
			<input type="file" name="cover" value=""><br>

			<label>Movie Title</label>
			<input type="text" name="title" value=""><br>

			<label>Movie Year</label>
			<input type="text" name="year" value=""><br>

			<label>Movie Duration</label>
			<input type="text" name="duration" value=""><br>

			<label>Movie Plot</label>
			<input type="text" name="plot" value=""><br>

			<label>Movie Release Date</label>
			<input type="text" name="release" value=""><br>

			<select name="genList">
				<option>Please select a genre:</option>
				<?php
					while($row = mysqli_fetch_array($genQuery)){
						 echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
					 }
				?>
			</select>

			<input id="submitButton" type="submit" name="submit" value="SUBMIT">
		</form>
	</div>

	</section>
</body>
</html>
