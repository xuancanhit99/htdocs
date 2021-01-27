<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

 $work_experience_id=$_POST['work_experience_id'];
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $position_title=$_POST['position_title'];
 $work_place=$_POST['work_place'];
 $monthly_salary=$_POST['monthly_salary'];
 $salary_grade_step_inc=$_POST['salary_grade_step_inc'];
 $status_appointment=$_POST['status_appointment'];
 $gov_service=$_POST['gov_service'];


$up_emp=("update work_experience set 
 dates_from='$dates_from',
 dates_to='$dates_to',
 position_title='$position_title',
 work_place='$work_place',
 monthly_salary='$monthly_salary',
 salary_grade_step_inc='$salary_grade_step_inc',
 status_appointment='$status_appointment',
 gov_service='$gov_service'


 where  work_experience_id='$work_experience_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_work_experience.php?id=".$employee_id."");
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
