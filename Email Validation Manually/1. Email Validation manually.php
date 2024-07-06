<html>
	<head>
		<title>
				<meta charset="UTF-8">
				POST Method
		</title> 	 
	</head>
	<body>
		<form action ="" method="post" >
			<table>
				<tr>
					<td> Name : </td>
					<td> <input type="text"  name="std_name" ></td>
				</tr>
				<tr>
					<td> ID : </td>
					<td> <input type="text"  name="std_id" ></td>
				</tr>
				<tr>
					<td> Email : </td>
					<td> <input type="text"  name="std_email" ></td>
				</tr>
				<tr> 
					<td> Password : </td>
					<td> <input type="password"  name="pass" ></td>
				</tr>
				<tr>
					<td> </td>
					<td> <input type="submit"  value="SEND"  name="myForm" ></td>
				</tr>
			</table>
		</form>
	</body>
</html>

   
<?php

if(isset($_POST['myForm']))
{
	if(empty($_POST['std_email']))
	{
		echo "InValid  <br>"; 
	}	

	$email=$_POST['std_email'];	
		
	$c1=substr_count($email,"@"); // Counting number of @

	$c2=substr_count($email,".com"); //Counting number of Dot(.com)

	if(($c1!=1)||($c2!=1)) // @ and .com must be one ime
	{
		echo "problem :More than 1/less than 1  of @ or .com";
	}
	else{
		$len=strlen($email);//Finding length of array/string
		$p1=strpos($email ,"@"); //Finding position of @
			
		if(($p1==0) || ($p1==$len-1))
		{
			echo "Invalid Email:@ First/Last Position";
		}
		else{
			$p2=strpos($email ,".com");  
			if(($p2==0) || ($p2==$len-1)){
				echo "Invalid Email : .com is First/Last Position";
			}
			else {
				if($p2<$p1)
				{
					echo "Invalid Email: @ must be before .com"; 
				}
				else{
					if($p2-$p1==1)
					{
						echo "Invalid Email: Need character between @ and .com";
					}
						
				}
			}
		}
	}
}
?>
 