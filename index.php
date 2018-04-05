<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	// require_once('admin/phpscripts/connect.php');
	require_once('admin/phpscripts/config.php');

	$tbl2 = "tbl_genre";
	$genQuery = getAll($tbl2);

	if(isset($_GET['filter'])){

		$tbl = "tbl_movies";
		$tbl2 = "tbl_genre";
		$tbl3 = "tbl_genre_mov";
		$col = "movies_id";
		$col2 = "genre_id";
		$col3 = "genre_name";

		$filter = $_GET['filter'];
		$getMovies = filterType($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);
	}else{
		$tbl = "tbl_movies";
		$getMovies = getAll($tbl);
	}
?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="x-ua-compatible" content="ie=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    		<title>Custom CMS | Jaren McDonald</title>

		<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:500|Roboto:300" rel="stylesheet">

		<link rel="stylesheet" href="css/foundation.min.css">
    	<link rel="stylesheet" href="css/app.css">
  	</head>
  	<body>

		<h1 id="bodyTitle">Video Movie Database</h1>

		<div class="grid-x" id="filterList">
			<ul>
			<?php
				while($row = mysqli_fetch_array($genQuery)){
					 echo "<li><a href=\"index.php?filter={$row['genre_name']}\">{$row['genre_name']}</a></li>";
				 }
			?>
			</ul>
		</div>

		<div class="grid-x" id="movieSamples">
			<?php
				if(!is_string($getMovies)){
					while($row = mysqli_fetch_array($getMovies)){
						echo "<div class=\"cell small-12 large-6 movieSelection\">
							<h2>{$row['movies_title']}</h2>
							<img src=\"images/{$row['movies_cover']}\" alt=\"{$row['movies_title']}\">
							<p class=\"yearText\">{$row['movies_id']}) {$row['movies_year']}</p>
							<p>{$row['movies_plot']}</p>
						</div>";
					}
				}else{
					echo "<p class=\"error\">{$getMovies}</p>";
				}
			?>
		</div>


    	<script src="js/vendor/jquery.js"></script>
    	<script src="js/vendor/what-input.js"></script>
    	<script src="js/vendor/foundation.js"></script>
    	<script src="js/app.js"></script>
  	</body>
</html>
