<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms Handling Continuation</title>
</head>
<body>
	<form action="forms_process.php" method="GET">
		<p>Enter your comment:</p>
		<textarea name="comment" maxlength="100" cols="20" rows="10" placeholder="Up to 100 characters only..." required></textarea>
		<br>
		<p>Choose your sex:</p>
		<select name="sex">
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
		<br>
		<p>Choose your marital status:</p>
		<p>
			<input type="radio" name="status" value="S" required>Single
		</p>
		<p>
			<input type="radio" name="status" value="M" required>Married
		</p>
		<p>
			<input type="radio" name="status" value="W" required>Widowed
		</p>
		<p>
			<input type="radio" name="status" value="D" required>Divorced
		</p>
		<br>
		<br>
		<p>Choose your favorite color(s)</p>
		<p>
			<input type="checkbox" name="colors[]" value="green" > Green
		</p>
		<p>
			<input type="checkbox" name="colors[]" value="yellow" > Yellow
		</p>
		<p>
			<input type="checkbox" name="colors[]" value="blue" > Blue
		</p>
		<p>
			<input type="checkbox" name="colors[]" value="pink" > Pink
		</p>
		<button type="submit" name="process">Submit to Server</button>
	</form>
</body>
</html>