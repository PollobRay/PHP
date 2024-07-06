
<table width="80%" border="1">
    <tr>
	  <td>File ID</td>
        <td>File Name</td>
        <td>File Type</td>
        <td>File Size(KB)</td>
        <td>View</td>
    </tr>

    <?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "dbtuts";
        mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
        mysql_select_db($dbname) or die('database selection problem');

            
        $sql="SELECT * FROM tbl_uploads";
        $result_set=mysql_query($sql);
        while($row=mysql_fetch_array($result_set))
        {
    ?>
        <tr>
		    <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['file'] ?></td>
            <td><?php echo $row['type'] ?></td>
            <td><?php echo $row['size'] ?></td>
            <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>	
        </tr>
        <?php
            }
        ?>
</table>