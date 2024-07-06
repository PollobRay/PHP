<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Data View Page</title>
	</head>
	<body>
		<h2>View All Data from Database</h2>
		<?php
				
			$result = mysql_query("select * from animaldata ");
				
			while($row=mysql_fetch_array($result)) 	{
				echo "<br>";
				echo $row['ano'] . "<br>"  ; 
				echo $row['aname'] ."<br> " ; 
				echo $row['adetails']."<br> " ;
				
				$location = $row['aphoto'];
				echo "<img src = '$location' width = '300' height = '300'>";	
			}
			
		?>
		<br>
		<a href="index.php">back to previous</a>
	</body>
</html>