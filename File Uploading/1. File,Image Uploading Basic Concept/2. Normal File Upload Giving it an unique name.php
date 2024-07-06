<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>File Upload in PHP with Validation</title>
	</head>
	<body>
		<?php
			$connection = mysql_connect('localhost','root','','ray');
			if(isset($_POST['form1'])) {
				$file_name = uniqid().date("Y-m-d-H-i-s"). $_FILES['file1']['name'];
				$destination = "upload/".$file_name;
				$tmp_filename = $_FILES['file1']['tmp_name'];
					
				//alternative way
				//move_uploaded_file($_FILES['file1']['tmp_name'], 'upload/'.$file_name);			
				if(move_uploaded_file($tmp_filename,$destination))	
				{
					$sql = "insert into image(destination) values('', '$destination')";
					mysql_query('$connection','$sql');
					
					$sql="SELECT * FORM image";
					$obj =   mysql_query('$connection','$sql');
					foreach($obj as $key=>$value)
					{
						echo "<img style = 'width=150px;' src= " .$value['destination'].">";
					}
				}		
				else{
					echo "error";
				}
			}
		?>
		<form action="" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Upload your file</td>
					<td><input type="file" name="file1"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UPLOAD" name="form1"></td>
				</tr>
			</table>
		</form>
	</body>
</html>