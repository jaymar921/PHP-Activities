<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DROP DOWN ASSIGNMENT ABEJAR</title>
</head>
<body>

	<form method="GET" action="dropdown.php">
		ENTER 1ST NO:<input type="text" name="num1" required><br><br>
		ENTER 2ND NO:<input type="text" name="num2" required><br><br>
		<p>Choose Operation</p>
		<select name="operator">
			<option value="add" selected>Addition</option>
			<option value="sub">Subtraction</option>
			<option value="mul">Multiplication</option>
			<option value="div">Division</option>
		</select>
		<br>
		<button type="submit" name="compute" value="compute">Compute</button>
	</form>
	<?php
		$num1;
		$num2;
		$result;
		$operator;

		if(isset($_GET["compute"])){
			$num1 = $_GET["num1"];
			$num2 = $_GET["num2"];
			$operator = $_GET["operator"];

			if($operator == "add"){
				$operator = "addition";
				$result = $num1 + $num2;
			}else if($operator == "sub"){
				$operator = "subtraction";
				$result = $num1 - $num2;
			}else if($operator == "mul"){
				$operator = "multiplication";
				$result = $num1 * $num2;
			}else if($operator == "div"){
				$operator = "division";
				$result = $num1 / $num2;
			}else{
				echo "<p style='color:red'>Warning: input data was modified on the client side, please reload the page</p>";
				exit();
			}

			echo "<p style='color:blue'>the $operator of $num1 and $num2 is $result</p>";
		}

	?>
</body>
</html>