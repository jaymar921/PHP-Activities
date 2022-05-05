<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SF5 - Add New Item</title>
</head>
<body>

	<form method="GET" action="SF5 - Add New Item.php">

		<p>Description</p>
		<input type="text" name="description" placeholder="Enter the Item Description..." required>

		<p>Classification</p>
		<input type="text" name="classification" placeholder="Enter the Item Classification..." required>

		<p>Quantity</p>
		<input type="number" name="quantity" placeholder="Quantity" step="any" required>

		<p>Price</p>
		<input type="number" name="price" placeholder="Quantity" step="any" required>

		<br><br>
		<input type="submit" name="submit" value="submit">
		
	</form>

</body>

	<?php 
		$description;
		$classification;
		$quantity;
		$price;

		if(isset($_GET['submit'])){
			$database_ip = "localhost";
			$username = "root";
			$password = "";
			$database = "RPGMarketplace";
			$connection = mysqli_connect($database_ip, $username, $password, $database);

			$description = $_GET['description'];
			$classification = $_GET['classification'];
			$quantity = $_GET['quantity'];
			$price = $_GET['price'];

			if(mysqli_connect_error()){
				echo "Failed to connect to database";
			}else {

				$query = "INSERT INTO Item(description, classification, quantity, price) values ('$description','$classification','$quantity','$price')";

				mysqli_query($connection,$query);

				echo "<p>Successfully added the new Item</p>";
			}

			mysqli_close($connection);
		}
	?>
</html>