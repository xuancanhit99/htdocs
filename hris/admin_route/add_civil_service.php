<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $career_service=$_POST['career_service'];
 $rating=$_POST['rating'];
 $date_examination_conferment=$_POST['date_examination_conferment'];
 $place_examination_conferment=$_POST['place_examination_conferment'];
 $license_number=$_POST['license_number'];
 $license_date_release=$_POST['license_date_release'];
 


 

 

$emp=(" insert into civil_service_eligibility(employee_id,career_service,rating,date_examination_conferment,place_examination_conferment,license_number,license_date_release)  
     values('$employee_id','$career_service','$rating','$date_examination_conferment','$place_examination_conferment','$license_number','$license_date_release')");
	$mysqli->query($emp);
	header("location:user_civil_service.php?id=".$employee_id."");

}

else { echo "";}





 
 ?>
