<?php
    include('config.php'); // connecting php and mysql

    if(isset($_POST['form1'])) // Getting all informatin in form1 and veryfy
    {
        try{ 
            if(empty($_POST['st_name'])){
                throw new Exception('Name con not be empty '); 
            }

            if(empty($_POST['st_id'])){
                throw new Exception('ID can not be empty '); 
            }
            
            if(empty($_POST['st_age'])){
                throw new Exception('Age can not be empty '); 
            }

            if(empty($_POST['st_email'])){
                throw new Exception('Email can not be empty '); 
            }

            $result = mysql_query ("insert into ict (st_name, st_id, st_age, st_email)       
            values('$_POST[st_name]', '$_POST[st_id]', '$_POST[st_age]', '$_POST[st_email]')" ); // If no error data will inter into database

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
        <h1>Insert Data </h1>

        <?php
            if(isset($error_message)) { echo $error_message; }  // Show err message
            if(isset($success_message)) { echo $success_message; }  // Show success message
        ?>

        <form action ="" method="post" >
            <table>
                <tr>
                    <td> Name : </td>
                    <td> <input type="text"  name="st_name" ></td>
                </tr>
                <tr>
                    <td> ID : </td>
                    <td> <input type="text"  name="st_id" ></td>
                </tr>
                <tr> 
                    <td> Age : </td>
                    <td> <input type="text"  name="st_age" ></td>
                </tr>
                <tr>
                        <td> Email : </td>
                        <td> <input type="text"  name="st_email" ></td>
                </tr>  
                <tr>
                    <td> </td>
                    <td> <input type="submit"  value="Insert"  name="form1" ></td>
                </tr>
            </table>
            <a href="index.php"> Back to previous Page</a>
        </form> 
    </body>
</html>