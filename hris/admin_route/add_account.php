<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 


 

 

$emp=(" insert into user(username,password,birthdate)  
     values('$username','$password','$birthdate')");
	$mysqli->query($emp);
header("location:family_background_details.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>