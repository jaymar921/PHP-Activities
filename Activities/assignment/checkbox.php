<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CHECKBOX ASSIGNMENT ABEJAR</title>
</head>
<body>

	<form method="GET" action="checkbox.php">
		ENTER 1ST NO:<input type="text" name="num1" required><br><br>
		ENTER 2ND NO:<input type="text" name="num2" required><br><br>
		<p>
			Choose Operation:
		</p>
		<p>
			<input type="checkbox" name="operators[]" value="add">Addition
		</p>
		<p>
			<input type="checkbox" name="operators[]" value="sub">Subtraction
		</p>
		<p>
			<input type="checkbox" name="operators[]" value="mul">Multiplication
		</p>
		<p>
			<input type="checkbox" name="operators[]" value="div">Division
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
			
			if(isset($_GET["operators"])){
				$arr = $_GET["operators"];
				

				for($x = 0; $x < count($arr); $x++){
					$operator = $arr[$x];
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

					echo "<p style='color:blue'>The $operator of $num1 and $num2 is $result</p>";
				}
			}else{
				echo "<p style='color:orange'>You have not selected any operation</p>";
			}
		}

	?>
</body>
</html>