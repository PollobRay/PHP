<?php
include('config.php'); // connecting php and mysql

	if(isset($_REQUEST['id']))  //When we send from link then use $_REQUEST
	{
		$id=$_REQUEST['id']	;

		$result=mysql_query( "delete from ict where st_id = '$id' ");

		header('location:view.php'); 	
	}
	else
	{
		header('location:view.php'); 
	}
?>