<?php
	//DO NOT PUT LINK TO CALLER.PHP IN THE CONFIG FILE.
	require_once("config.php");

	function addMovie($cover, $title, $year, $runtime, $storyline, $release, $genre) {

		include('connect.php');

		if($cover['type'] == "image/jpg" || $cover['type'] == "image/jpeg"){
			$targetpath = "../images/{$cover['name']}";

			if(move_uploaded_file($cover['tmp_name'], $targetpath)){

				//Add to Database

				$qstring = "INSERT INTO tbl_movies VALUES(NULL, '{$cover['name']}', '{$title}', '{$year}', '{$runtime}', '{$storyline}', '{$release}')";
				//echo $qstring;

				$result = mysqli_query($link, $qstring);

				if($result) {
					$qstring2 = "SELECT * FROM tbl_movies ORDER BY movies_id DESC LIMIT 1";
					$result2 = mysqli_query($link, $qstring2);

					$row = mysqli_fetch_array($result2);
					$lastID = $row['movies_id'];
					//echo $lastID;
				}

				$qstring3 = "INSERT INTO tbl_genre_mov VALUES(NULL, '{$lastID}', '{$genre}')";
				$result3 = mysqli_query($link, $qstring3);
				//echo $result;

			}

		}else{
			echo "Please ensure your file is a .jpg or .jpeg.";
		}

		mysqli_close($link);

	};

?>
