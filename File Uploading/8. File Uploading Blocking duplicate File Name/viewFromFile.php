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
				echo $row['submission_date']."<br> " ;			
		?>

			<td> <img style="width:150px;height:150px;" src="uploads/<?php echo $row['aphoto'];?>";</td>

		<?php
			}
		?>
		<br>
		<a href="index.php">back to previous</a>
	</body>
</html>