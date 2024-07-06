<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>File Upload in PHP with Validation</title>
	</head>
	<body>
		<?php
			if(isset($_POST['form1'])) {
				$uploaded_file = $_FILES['file1']['name'];
				move_uploaded_file($_FILES['file1']['tmp_name'], 'upload/'.$uploaded_file);			
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