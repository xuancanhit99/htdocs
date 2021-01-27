<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

 $other_information_id=$_POST['other_information_id'];
 $employee_id=$_POST['employee_id'];
 $special_skills=$_POST['special_skills'];
 $non_academic_distinctions_recognition=$_POST['non_academic_distinctions_recognition'];
 $membership_association_organization=$_POST['membership_association_organization'];




$up_emp=("update other_information set 
 special_skills='$special_skills',
 non_academic_distinctions_recognition='$non_academic_distinctions_recognition',
 membership_association_organization='$membership_association_organization'




 where  other_information_id='$other_information_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_other_information.php?id=".$employee_id."");
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
