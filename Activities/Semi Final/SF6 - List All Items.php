<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SF5 - Add New Item</title>
</head>
<body>

	<form method="GET" action="SF6 - List All Items.php">

		<input type="submit" name="submit" value="Display Items">
		
	</form>

</body>

	<?php

		if(isset($_GET['submit'])){
			$database_ip = "localhost";
			$username = "root";
			$password = "";
			$database = "RPGMarketplace";
			$connection = mysqli_connect($database_ip, $username, $password, $database);


			if(mysqli_connect_error()){
				echo "Failed to connect to database";
			}else {

				$query = "select * from item order by description asc";

				$records = mysqli_query($connection, $query);

				if(mysqli_num_rows($records)>0){
					echo "<table>";
					echo "	<thead>";
					echo "		<tr>";
					echo "			<th>Description</th>";
					echo "			<th>Classification</th>";
					echo "			<th>Quantity</th>";
					echo "			<th>Price</th>";
					echo "		</tr>";
					echo "	</thead>";

					while ($row = mysqli_fetch_assoc($records)) {
						echo "<tr>";
						echo "	<td>".$row['description']."</td>";
						echo "	<td>".$row['classification']."</td>";
						echo "	<td>".$row['quantity']."</td>";
						echo "	<td>".$row['price']."</td>";
						echo "</tr>";
					}

					
					echo "</table>";
				}
			}

			mysqli_close($connection);
		}
	?>
</html>