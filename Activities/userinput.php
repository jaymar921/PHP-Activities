<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Input</title>
</head>
<body>
	
	<form action="userinput.php" method="get">
		Name: <input type="text" name="username">
		<br>
		Age: <input type="number" name="age">
		<input type="submit">
	</form>
	<br>
	Your name is <?php echo $_GET["username"] ?>
	<br>
	and your age is <?php echo $_GET["age"] ?>

</body>
</html>