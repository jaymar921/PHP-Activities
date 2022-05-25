<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search - ABEJAR</title>
</head>
<body>
	<form method="post" action="SF-7.php">
		<p>Search: </p><input type="text" name="search">
		<select name="dropdown" required>
			<option value="description">Description</option>
			<option value="classification">Classification</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php 
		$dropdown;
		$search;

		if(isset($_POST['submit'])){
			$dropdown = $_POST["dropdown"];
			$search = $_POST["search"];

			$connection = mysqli_connect("localhost","root","", "rpgmarketplace");

			if(mysqli_connect_error()){
				echo "<p>Failed to connect to database</p>";
			}else{
				$query = "select * from item where ".$dropdown." like '%".$search."%'";
				
				$records = mysqli_query($connection, $query);

				if(mysqli_num_rows($records)>0){
					echo "<table border='1'>";
					echo "	<thead>";
					echo "		<tr>";
					echo "			<th>I.D.</th>";
					echo "			<th>Description</th>";
					echo "			<th>Classification</th>";
					echo "			<th>Quantity</th>";
					echo "			<th>Price</th>";
					echo "		</tr>";
					echo "	</thead>";
					echo "	<tbody>";

					while ($row=mysqli_fetch_assoc($records))
					{
						//6. display each data from $row variable, and each is associated with the column named
						//from the student table
						echo "<tr>";
						echo "	<td>".$row["id"]."</td>";
						echo "	<td>".$row["description"]."</td>";
						echo "	<td>".$row["classification"]."</td>";
						echo "	<td>".$row["quantity"]."</td>";
						echo "	<td>".$row["price"]."</td>";
						echo "	</td>";
						echo "</tr>";
						
					}
					echo "	</tbody>";
					echo "</table>";
					mysqli_free_result($records);
				}else{
					echo "<p>No records found related to $search in $dropdown...</p>";
				}

				mysqli_close($connection);
			}


		}
	?>
</body>
</html>