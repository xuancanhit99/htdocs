<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 $name=$_POST['name'];
 $birthdate=$_POST['birthdate'];
 


 

 

$emp=(" insert into child(employee_id,name,birthdate)  
     values('$employee_id','$name','$birthdate')");
	$mysqli->query($emp);
header("location:user_family_background_details.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>