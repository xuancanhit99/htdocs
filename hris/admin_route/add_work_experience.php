<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $position_title=$_POST['position_title'];
 $work_place=$_POST['work_place'];
 $monthly_salary=$_POST['monthly_salary'];
 $salary_grade_step_inc=$_POST['salary_grade_step_inc'];
 $status_appointment=$_POST['status_appointment'];
 $gov_service=$_POST['gov_service'];
 


 

 

$emp=(" insert into work_experience(employee_id,dates_from,dates_to,position_title,work_place,monthly_salary,salary_grade_step_inc,status_appointment,gov_service)  
     values('$employee_id','$dates_from','$dates_to','$position_title','$work_place','$monthly_salary','$salary_grade_step_inc','$status_appointment','$gov_service')");
	$mysqli->query($emp);
	header('location:user_work_experience.php');
}

else { echo "";}





 
 ?>
