<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $position=$_POST['position'];
 $daily_rate=$_POST['daily_rate'];
 $month_rate=$_POST['month_rate'];
 $hourly_rate=$_POST['hourly_rate'];
 $min_rate=$_POST['min_rate'];



 

 

$emp=(" insert into salary(position,daily_rate,month_rate,hourly_rate,min_rate)  
     values('$position','$daily_rate','$month_rate','$hourly_rate','$min_rate')");
	$mysqli->query($emp);
	header('location:salary_list.php');
}

else { echo "";}

 
 ?>