<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

 $voluntary_work_id=$_POST['voluntary_work_id'];
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $name_address_organization=$_POST['name_address_organization'];
 $number_hours=$_POST['number_hours'];
 $position=$_POST['position'];



$up_emp=("update voluntary_work set 
 dates_from='$dates_from',
 dates_to='$dates_to',
 name_address_organization='$name_address_organization',
 number_hours='$number_hours',
 position='$position'



 where  voluntary_work_id='$voluntary_work_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_voluntary_work.php?id=".$employee_id."");
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
