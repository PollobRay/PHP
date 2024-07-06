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
	//if(isset($error_message)) {echo $error_message;}
	//if(isset($success_message)) {echo $success_message;}
	?>

	<br>

	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<th>Serial</th>
			<th>Name</th>
			<th>ID</th>
			<th>Age</th>
			<th>Email Address</th>
		</tr>
			<?php
				$i=0;
				
				$result = mysql_query("select * from ict");
				while($row=mysql_fetch_array($result)) 
				{
					$i++;
			?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['st_name']; ?></td>
						<td><?php echo $row['st_id']; ?></td>
						<td><?php echo $row['st_age']; ?></td>
						<td><?php echo $row['st_email']; ?></td>
					</tr>
			<?php
				}
			?>
		</table>
		<br>
		<a href="index.php">back to previous</a>
	</body>
</html>