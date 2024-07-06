<?php
    include('config.php'); // connecting php and mysql
    
    if(isset($_REQUEST['id']))  //When we send from link then use $_REQUEST
    {
        $id=$_REQUEST['id']	;  
    }
    else
    {
        header('location:view.php'); 
    }

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

            $result = mysql_query("update ict set st_name='$_POST[st_name]',st_id='$_POST[st_id]',st_age='$_POST[st_age]',st_email='$_POST[st_email]' where st_id='$id'");
                
            $success_message = "Data has been Updated successfully";
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
            Data Update
        </title>	  
        
    </head>
    <body> 

        <h1>Data Update</h1>
        <?php
            if(isset($error_message)) { echo $error_message; }  // Show err message
            if(isset($success_message)) { echo $success_message; }  // Show success message

        ?>
        <br>
        <?php
            $result = mysql_query("select * from ict where st_id='$id'");
            while($row=mysql_fetch_array($result)) 
            {
                    
                $st_name_old = $row['st_name'];
                $st_id_old = $row['st_id'];
                $st_age_old = $row['st_age'];
                $st_email_old = $row['st_email'];			
                    
            }
        ?>

        <form action ="" method="post" >
            <table>
                <tr>
                    <td> Name : </td>
                    <td> <input type="text"  name="st_name"  value= "<?php echo $st_name_old ;?>"  ></td>
                </tr>
                <tr>
                    <td> ID : </td>
                    <td> <input type="text"  name="st_id" value= "<?php echo $st_id_old ;?>"   ></td>
                </tr>
                <tr> 
                    <td> Age : </td>
                    <td> <input type="text"  name="st_age"  value= "<?php echo $st_age_old ;?>" > </td>
                </tr>
                <tr>
                    <td> Email : </td>
                    <td> <input type="text"  name="st_email" value= "<?php echo $st_email_old ;?>"  ></td>
                </tr>  
                <tr>
                    <td> </td>
                    <td> <input type="submit"  value="Update"  name="form1" ></td>
                </tr>
            </table>
            <input type = "hidden" name = "id" value = "<?php echo $id; ?>"> 
        </form> 
         <br>
        <a href="index.php"> Back to previous Page</a>
    </body>
</html>