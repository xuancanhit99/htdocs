<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $id=$_POST['id'];
 $old_days=$_POST['old_days'];	
 $new_days=$_POST['days'];	
 
 $days= $old_days + $new_days ;	



	 
$up_emp=("update service_credits set 
 Balance='$days'
 where  service_credits_id='$id' ");
 
 
	$mysqli->query($up_emp);
	header('location:credits.php');
}

else { echo "";}

 
 ?>