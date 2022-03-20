<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Compute Sum</title>
</head>
<body>
	<?php
		$num1;
		$num2; 

		// if the user clicks the compute button
		if(isset($_GET["compute"])){
			// get all provided data
			$num1 = $_GET["num1"];
			$num2 = $_GET["num2"];
			$sum = $num1 + $num2;

			echo "<p>Sum of $num1 and $num2 is $sum</p>";
			//echo "<a href='entry_form.php'>Go Back</a>";
		}
	?>
	<a href='entry_form.php'>Go Back</a>
</body>
</html>