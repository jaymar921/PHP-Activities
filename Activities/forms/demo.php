<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Basic Forms</title>
</head>
<body>
	<form method="GET" action="process_demo.php">
		<input type="text" name="fullname" size="30" placeholder="Enter your name" maxlength="40" value="" />
		<br><br>
		<textarea name="comment" cols="30" rows="10" placeholder="Enter your comment here..." maxlength="50"></textarea>
		<br><br>
		<select name="sex">
			<option selected disabled>[Please Select Gender]</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
		</select>
		<br><br>
		<p>Select your marital status:</p>
		<p>
			<input type="radio" name="status" value="Single">Single
		</p>
		<p>
			<input type="radio" name="status" value="Married">Married
		</p>
		<p>
			<input type="radio" name="status" value="Widowed">Widowed
		</p>
		<p>
			<input type="radio" name="status" value="Divorced">Divorced
		</p>
		<br><br>
		<p>Select your highest educational attainment:</p>
		<p>
			<input type="radio" name="attainment" value="HL">High School Level
		</p>
		<p>
			<input type="radio" name="attainment" value="HG">High School Graduate
		</p>
		<p>
			<input type="radio" name="attainment" value="CL">College Level
		</p>
		<p>
			<input type="radio" name="attainment" value="CG">College Graduate
		</p>
		<br><br>
		<p>Select your favorite childhood anime heroes</p>
		<p>
			<input type="checkbox" name="anime[]" value="Naruto">Naruto
		</p>
		<p>
			<input type="checkbox" name="anime[]"
			value="Goku">Goku
		</p>
		<p>
			<input type="checkbox" name="anime[]" value="Pikachu">Pikachu
		</p>
		<p>
			<input type="checkbox" name="anime[]" value="Eugene">Eugene
		</p>
		<p>
			<input type="checkbox" name="anime[]" value="Recca">Recca
		</p>
		<br><br>
		<p>Select your favorite pinoy male celebrities</p>
		<p>
			<input type="checkbox" name="celebrities[]" value="Coco Martin">Coco Martin
		</p>
		<p>
			<input type="checkbox" name="celebrities[]" value="Richard Gomez">Richard Gomez
		</p>
		<p>
			<input type="checkbox" name="celebrities[]" value="Joshua Garcia">Joshua Garcia
		</p>
		<p>
			<input type="checkbox" name="celebrities[]" value="Vhong Navarro">Vhong Navarro
		</p>
		<br>
		<button type="submit" name="save" value="save">Save Record</button>
	</form>
</body>
</html>