<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RADIO BUTTON ASSIGNMENT ABEJAR</title>
</head>
<body>

	<form method="GET" action="radiobutton.php">
		ENTER 1ST NO:<input type="text" name="num1" required><br><br>
		ENTER 2ND NO:<input type="text" name="num2" required><br><br>
		<p>
			Choose Operation:
		</p>
		<p>
			<input type="radio" name="operator" value="add" required>Addition
		</p>
		<p>
			<input type="radio" name="operator" value="sub" required>Subtraction
		</p>
		<p>
			<input type="radio" name="operator" value="mul" required>Multiplication
		</p>
		<p>
			<input type="radio" name="operator" value="div" required>Division
		</p>
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