<?php

      include('config.php'); // connecting php and mysql

      if(isset($_POST['form1'])) // Getting all informatin in form1 and veryfy
      {
            try{
                  $aname= $_POST['aname'];
                  $adetails = $_POST['adetails'];	
                        
                  $file = rand(1000,100000)."-".$_FILES['aphoto']['name'];
                  $file_loc = $_FILES['aphoto']['tmp_name'];
                  $file_size= $_FILES['aphoto']['size'];
                  $file_type = $_FILES['aphoto']['type'];
                  $folder="uploads/"; 		
                  move_uploaded_file($file_loc,$folder.$file);	
       
                  $result = mysql_query ("insert into animaldata     
                  values('', '$aname', '$adetails', '$file' , '$file_type','$file_size')" ); // If no error data will inter into database

                  $success_message = "Data has been inserted successfully";	
            }

            catch(Exception $e){
                   $error_message = $e->getMessage();	// If find any error data can not inter DB . Catch block show error message
            }
      }
?>



<html>
      <head>
            <title>
                  <meta charset="UTF-8">
                  Data Insertation
            </title>	  
      </head>

      <body> 
            <h1>Submission form </h1>
            <?php
                  if(isset($error_message)) { echo $error_message; }  // Show err message
                  if(isset($success_message)) { echo $success_message; }  // Show success message
            ?>
            <form action ="" method="post"  enctype="multipart/form-data" >
                  <table >          
                        <tr>
                              <td>Animal Name : </td>
                              <td> <input type="text"  name="aname" ></td>
                        </tr>       
                        <tr> 
                              <td> Animal Description : </td>
                              <td> <input type="text"  name="adetails" ></td>
                        </tr>
                        <tr>
                              <td> Animal Photo : </td>              
                              <td><input type="file" name="aphoto"></td>
                        </tr>  
                        <tr>
                              <td></td>
                              <td><input type="submit" value="Store Information" name="form1"></td>
                        </tr>
                  </table>
                  <a href="index.php"> Back to previous Page</a>
            </form> 
      </body>
</html>