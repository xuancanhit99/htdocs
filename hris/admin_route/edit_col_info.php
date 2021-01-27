<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $college_id=$_POST['college_id'];
 $employee_id=$_POST['employee_id'];
 
 $school_name=$_POST['school_name'];
 
 /*$degree_course=$_POST['degree_course'];
 degree_course='$degree_course',*/
 
 $year_graduated=$_POST['year_graduated'];
 $highest_grade_level_units_earned=$_POST['highest_grade_level_units_earned']; 
 /* highest_grade_level_units_earned='$highest_grade_level_units_earned',*/ 
  $degree_course=$_POST['degree_course'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $scholar_academic_honors=$_POST['scholar_academic_honors'];






$up_emp=("update college set 
 degree_course='$degree_course',
 school_name='$school_name',
 year_graduated='$year_graduated',
 dates_from='$dates_from',
 dates_to='$dates_to',
 scholar_academic_honors='$scholar_academic_honors',
 highest_grade_level_units_earned='$highest_grade_level_units_earned'

 where  college_id='$college_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_educational_background.php?id=".$employee_id."");
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

