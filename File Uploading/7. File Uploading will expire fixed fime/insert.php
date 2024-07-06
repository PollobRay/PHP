<?php

    include('config.php'); // connecting php and mysql

    if(isset($_POST['form1']))
    {
        try{
            $aname= $_POST['aname'];
            $adetails = $_POST['adetails'];	
            
            if(empty($_POST['aname'])){
                throw new Exception('Name can not be empty '); 
            }	
            
            if(empty($_POST['adetails'])){
                throw new Exception('ID can not be empty '); 
            }	
                
            if($_FILES['aphoto']['size'] == 0) {
                throw new Exception('Please Select a file '); 
            }
            else {
                $file_name = $_FILES['aphoto']['name'];   
                $file_loc = $_FILES['aphoto']['tmp_name'];
                $file_size= $_FILES['aphoto']['size'];
                $file_type = $_FILES['aphoto']['type'];
                $folder="uploads/"; 		
                move_uploaded_file($file_loc,$folder.$file_name);	

                $submission_date = date("y:m:d h:i:s a"  , time());   
                
                $expire_date = ("2016/07/25 11:59:59 a ") ;
                $a = strtotime($expire_date) ;
                
                $current_time = time();
                if($a>$current_time )     
                {		
                    $result = mysql_query ("insert into animaldata     
                    values('', '$aname', '$adetails', '$file_name' , '$file_type','$file_size','$submission_date')" ); // If no error data will inter into database
                    $success_message = "Data has been inserted successfully";	
                }
                else {
                    throw new Exception('Submission date is Expair Last Date was :2016/07/23 11:59:59pm ')  ;  
                }
            }	

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
                    <td> Student Name : </td>
                    <td> <input type="text"  name="aname" ></td>
                </tr>       
                <tr> 
                    <td> Student ID:  </td>
                     <td> <input type="text"  name="adetails" ></td>
                </tr>
                <tr>
                    <td> Student File or Photo  : </td>              
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