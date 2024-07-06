<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>File Upload in PHP with Validation</title>
	</head>
	<body>
		<?php
			if(isset($_POST['form1'])) {
				try {
					$uploaded_file = $_FILES['file1']['name'];
					
					$file_basename = substr($uploaded_file, 0, strripos($uploaded_file, '.')); // strip extention
					$file_ext = substr($uploaded_file, strripos($uploaded_file, '.')); // strip name
					$f1 = '1'. $file_ext;	
					
					$filesize = filesize($_FILES['file1']['tmp_name']) * .000204800; // bytes to KB
					echo "Your uploaded image size is " . $filesize  . "<br>";
					if($filesize > 30) {
						throw new Exception('file size exceeds (30KB is maximum)');
					}
					
					if(($file_ext!='.png')&&($file_ext!='.jpg')) {
						throw new Exception('file must be png or jpg');
					}	
					
					move_uploaded_file($_FILES['file1']['tmp_name'], 'upload/'.$f1);

					list($width, $height, $type, $attr) = getimagesize('upload/'.$f1);
					echo 'Width of image: '.$width.'<br>';
					echo 'Height of image: '.$height.'<br>';

					//$filesize = filesize($file) * .0009765625; // bytes to KB
					//$filesize = (filesize($file) * .0009765625) * .0009765625; // bytes to MB
					//$filesize = ((filesize($file) * .0009765625) * .0009765625) * .0009765625; // bytes to GB		
				}
				catch(Exception $e) {
					$error_message = $e->getMessage();
				}
			}
		?>

		<?php if(isset($error_message)) { echo $error_message; } ?>
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