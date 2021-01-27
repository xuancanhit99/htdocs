<?php 		
include('db_con.php');



if(isset($_POST['save']))
{


 $civil_service_eligibility_id=$_POST['civil_service_eligibility_id'];
 $employee_id=$_POST['employee_id'];
 $career_service=$_POST['career_service'];
 $rating=$_POST['rating'];
 $date_examination_conferment=$_POST['date_examination_conferment'];
 $place_examination_conferment=$_POST['place_examination_conferment'];
 $license_number=$_POST['license_number'];
 $license_date_release=$_POST['license_date_release'];




$up_emp=("update civil_service_eligibility set 
 career_service='$career_service',
 rating='$rating',
 date_examination_conferment='$date_examination_conferment',
 place_examination_conferment='$place_examination_conferment',
 license_number='$license_number',
 license_date_release='$license_date_release'


 where  civil_service_eligibility_id='$civil_service_eligibility_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_civil_service.php?id=".$employee_id."");
}
else if(isset($_POST['delete']))
{

$dep_id=$_POST['dep_id'];
$del_emp=("delete from department where dep_id='$dep_id' ");
$mysqli->query($del_emp);
 header('location:department.php');

}
else { echo "";}



?>
