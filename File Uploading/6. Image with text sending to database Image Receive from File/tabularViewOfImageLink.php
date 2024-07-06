
<table width="80%" border="1">
    <tr>
	    <td> 	ano</td>
        <td>aname</td>
	    <td>adetails</td>
	    <td> 	aphoto</td>
        <td>File Type</td>
        <td>File Size(KB)</td>
        <td>View</td>
    </tr>
    <?php
	    include('config.php');
        $sql="SELECT * FROM animaldata ";
        $result_set=mysql_query($sql);
        while($row=mysql_fetch_array($result_set))
        {
    ?>
    <tr>
		<td><?php echo $row['ano'] ?></td>
		<td><?php echo $row['aname'] ?></td>
		<td><?php echo $row['adetails'] ?></td>
        <td><?php echo $row['aphoto'] ?></td>
        <td><?php echo $row['file_type'] ?></td>
        <td><?php echo $row['file_size'] ?></td>
        <td><a href="uploads/<?php echo $row['aphoto'] ?>" target="_blank">view file</a></td>
	
    </tr>
    <?php
        }
    ?>
</table>
<a href="index.php">back to previous</a>