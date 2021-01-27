<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $name_address_organization=$_POST['name_address_organization'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $number_hours=$_POST['number_hours'];
 $position=$_POST['position'];

 


 

 

$emp=(" insert into voluntary_work(employee_id,name_address_organization,dates_to,dates_from,number_hours,position)  
     values('$employee_id','$name_address_organization','$dates_to','$dates_from','$number_hours','$position')");
	$mysqli->query($emp);

		header("location:user_voluntary_work.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>
