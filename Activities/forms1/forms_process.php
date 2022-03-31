<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Handle Inputted Data</title>
</head>
<body>

	<?php

		// declaring variables
		$comment;
		$sex;
		$status;
		$colors;

		// check if user has clicked the process button
		if(isset($_GET["process"])){
			$comment = $_GET["comment"];
			$sex = $_GET["sex"];
			$status = $_GET["status"];

			// check if there is at least 1 selected color
			if(isset($_GET["colors"])){
				$colors = $_GET["colors"];

				// display the selected colors in an unordered list format
				echo "<ul>";
				for($i=0 ; $i<count($colors) ; $i++){
					// display each color thru a list item
					echo "<li>" . $colors[$i] . "</li>";
				}
				echo "</ul>";
			}else{
				echo "<p style='color:red'>Sorry, you did not select a color.</p>";
			}
		}
		

		// display the comment inputted by the user placed inside the paragraph
		echo "<p style='color:blue'>$comment</p>";

		if($sex == "M"){
			echo "<p>Hey man!</p>";
		}else if($sex == "F"){
			echo "<p>You are a woman.</p>";
		}else{
			echo "<p>Unidetified alien</p>";
		}

		echo "<br>";
		echo "<p>Your status is: <b>$status</b></p>";

	?>

</body>
</html>