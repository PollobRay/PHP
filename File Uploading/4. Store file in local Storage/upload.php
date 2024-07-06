<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dbtuts";

    mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
    mysql_select_db($dbname) or die('database selection problem');

    if(isset($_POST['btn-upload']))
    {    
        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];
        $folder="uploads/";
        
        move_uploaded_file($file_loc,$folder.$file);
        $sql="INSERT INTO tbl_uploads(file,type,size) VALUES('$file','$file_type','$file_size')";
        mysql_query($sql); 
    
    }
    
    header('location: imageInsertForm.php?message=1'); // Returning First Page
?>