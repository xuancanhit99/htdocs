<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 
 $days=$_POST['days'];	


 

 

$emp=(" insert into service_credits(employee_id,Balance)  
     values('$employee_id','$days')");
	$mysqli->query($emp);
	header('location:credits.php');
}

else { echo "";}

 
 ?>