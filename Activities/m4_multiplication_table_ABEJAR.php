<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>M4 Multiplication Table Self Submit</title>
</head>
<body>

	<div style="position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);border: 2px solid aquamarine;padding: 5px;border-radius: 10px;">

		<h1 style="text-align: center;">Multiplication Table</h1>

		<form method="GET" action="m4_multiplication_table_ABEJAR.php">
			
			<p style="width: 100%;text-align: center;">
				Enter Rows: <input type="text" name="row" placeholder="Type here..." required>
			</p>
			<p style="width: 100%;text-align: center;">
				Enter Columns: <input type="text" name="col" placeholder="Type here..." required>
			</p>
			<p style="width: 100%;text-align: center;">
				<button type="submit" name="show" value="show" style="width: 30%; background-color: rgba(255,255,255,0.2);border-radius: 10px;">Show</button>
			</p>
		</form>
		<?php 
			$col;
			$row;

			if(isset($_GET["show"])){
				$col = $_GET["col"];
				$row = $_GET["row"];

				echo "<table style='position: relative;left: 50%;transform: translate(-50%,0%);border: 5px solid green;padding: 5px;border-radius: 10px;margin:3px;color:blue;background-color:	rgb(173,216,230);'>";
				if($col > 15 || $row > 15){
					echo "<p style='width: 100%;text-align: center;'>Input value should not be above 15</p>";
					exit();
				}
				for($i = 1; $i <= $col; $i ++){
					echo "<tr>";
					for($j = 1; $j <= $row; $j++){

							echo "<td style='text-align: center;vertical-align: middle;padding:5px'>".($i * $j)."</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			}
		 ?>
	</div>

</body>
</html>