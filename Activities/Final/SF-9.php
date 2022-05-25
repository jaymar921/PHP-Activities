<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update and List - ABEJAR</title>
</head>
<body>
	
	<form method="post" action="SF-9.php">
		<?php 
			$dropdown = "";
			$search = "";

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
						echo "			<th><input type='submit' name='update' value='UPDATE'></th>";
						echo "		</tr>";
						echo "	</thead>";
						echo "	<tbody>";

						while ($row=mysqli_fetch_assoc($records))
						{
							//6. display each data from $row variable, and each is associated with the column named
							//from the student table
							echo "<tr>";
							echo "	<td>".$row["id"]."</td>";
							echo "	<td><input type='text' name='description_".$row["id"]."' value='".$row["description"]."''></td>";
							echo "	<td><input type='text' name='classification_".$row["id"]."' value='".$row["classification"]."''></td>";
							echo "	<td><input type='number' name='quantity_".$row["id"]."' value='".$row["quantity"]."''></td>";
							echo "	<td><input type='number' name='price_".$row["id"]."' value='".$row["price"]."''></td>";
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
		<p>Search: </p><input type="text" name="search" value="<?php echo "$search"?>">
		<select name="dropdown" required>
			<option value="description" <?php if($dropdown=='description') echo "selected" ?>>Description</option>
			<option value="classification" <?php if($dropdown=='classification') echo "selected" ?>>Classification</option>
		</select>
		<br>
		<input type="submit" name="submit" value="Submit">
		
	</form>
	<?php
			if(isset($_POST['update'])){
				$connection = mysqli_connect("localhost","root","", "rpgmarketplace");
				$dropdown = $_POST["dropdown"];
				$search = $_POST["search"];

				if(mysqli_connect_error()){
					echo "<p>Failed to connect to database</p>";
				}else{
					$query = "select * from item where ".$dropdown." like '%".$search."%'";
						
					$items = mysqli_query($connection, $query);

					if(mysqli_num_rows($items)>0){

						while ($row=mysqli_fetch_assoc($items))
						{
							//6. display each data from $row variable, and each is associated with the column named
							//from the student table
							$desc = $_POST['description_'.$row['id']];
							$clazz = $_POST['classification_'.$row['id']];
							$quan = $_POST['quantity_'.$row['id']];
							$price = $_POST['price_'.$row['id']];
							$query = "update item set description = '$desc', classification = '$clazz', quantity = $quan, price = $price where id=".$row['id'];
							mysqli_query($connection, $query);
						}
						mysqli_free_result($items);
					}else{
						echo "<p>No records found related to $search in $dropdown...</p>";
					}
				}
			}
		?>
</body>
</html>