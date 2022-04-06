<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Midterm</title>
</head>
<body>
	<form action="midterm_practical.php" method="post">
		
		<p>
			Enter a Character
		</p>
		<p>
			<input type="text" name="character" size="1" maxlength="1" required>
		</p>
		<br>
		<button type="submit" name="submit" value="submit">Submit</button>
	</form>
	<?php
		$character;
		if(isset($_POST['submit'])){
			$character = $_POST['character'];

			if(is_numeric($character)){
				echo "$character is a number";
			}else if(specialChar($character)){
				echo "$character is a special character";
			}else{
				echo "$character is a letter";
			}
		}
		function specialChar($character){
			$s_char = " `~!@#$%^&*()_+-={}[]|\\;:'\"<,>.?/";
			foreach(str_split($s_char) as $char){
				if($char == $character)
					return true;
			}
			if(ord($character)>122)
				return true;
			return false;
		}
	?>
</body>
</html>