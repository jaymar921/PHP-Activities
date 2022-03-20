<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Process Demo</title>
</head>
<body>
	<?php 
		// declaration
		$fullname;
		$comment;
		$sex;
		$status;

		// if the user click the save button
		if(isset($_GET["save"])){
			// get the provided fullname
			$fullname = $_GET["fullname"];

			// get the provided comment
			$comment = $_GET["comment"];

			// get the provided sex
			$sex = $_GET["sex"];

			// check if the user has selected a status
			if(isset($_GET["status"])){
				// if so, get the provided status
				$status = $_GET["status"];
			}

			echo "<p>Fullname: $fullname</p>";
			echo "<p>Comment: $comment</p>";
			echo "<p>Sex: $sex</p>";
			echo "<p>Status: $status</p>";
		}
	?>
</body>
</html>