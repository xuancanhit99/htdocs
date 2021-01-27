<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $id=$_POST['id'];	
 $Balance=$_POST['Balance'];	
 $leave_type=$_POST['leave_type'];	
 $availed=$_POST['Availed'];	
 
 
 $days= $Balance - $availed ;	



	 
$up_emp=("update service_credits set 
Balance='$days',leave_type='$leave_type'
 where  service_credits_id='$id' ");
 
 
	$mysqli->query($up_emp);
	header('location:credits.php');
}

else { echo "";}

 
 ?>