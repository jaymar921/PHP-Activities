<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>List All items - ABEJAR</title>
</head>
<body>
	
	<form method="post" action="SF-8.php">
		<p>List of items</p>
		<?php
			$connection = mysqli_connect("localhost","root","", "rpgmarketplace");
			$items;

			if(isset($_POST['delete_selected'])){
				$items = $_POST['id'];
				echo "removed item id <a style='color:red;'>[";
				for($i = 0; $i < count($items); $i++){
					echo "$items[$i]";
					if($i < count($items)-1)
						echo ", ";
					mysqli_query($connection, "delete from item where id = $items[$i]");
				}
				echo "]</a>";
			}
			mysqli_close($connection);
		?>
		<?php 

		$connection = mysqli_connect("localhost","root","", "rpgmarketplace");

			if(mysqli_connect_error()){
				echo "<p>Failed to connect to database</p>";
			}else{
				$query = "select * from item";
				
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
					echo "			<th><input type='submit' name='delete_selected' value='DELETE'></th>";
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
						echo "	<td align='center'><input type='checkbox' name='id[]' value=".$row['id']."></td>";
						echo "	</td>";
						echo "</tr>";
						
					}
					echo "	</tbody>";
					echo "</table>";
					mysqli_free_result($records);
				}else{
					echo "<p>No records found...</p>";
				}

				mysqli_close($connection);
			}

	?>
	</form>

	
</body>
</html>