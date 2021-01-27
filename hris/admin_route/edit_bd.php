<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $employee_id=$_POST['employee_id'];
 $parents_id=$_POST['parents_id'];
 $father_firstname=$_POST['father_firstname'];
 $father_middlename=$_POST['father_middlename'];
 $father_surname=$_POST['father_surname']; 
 $mother_firstname=$_POST['mother_firstname'];
 $mother_middlename=$_POST['mother_middlename'];
 $mother_surname=$_POST['mother_surname'];





$up_emp=("update parents set 
 father_firstname='$father_firstname',
 father_middlename='$father_middlename',
 father_surname='$father_surname',
 mother_firstname='$mother_firstname',
 mother_middlename='$mother_middlename',
 mother_surname='$mother_surname'

 where  parents_id='$parents_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_family_background_details.php?id=".$employee_id."");
}
else if(isset($_POST['delete']))
{

$dep_id=$_POST['dep_id'];
$del_emp=("delete from department where dep_id='$dep_id' ");
$mysqli->query($del_emp);
header("location:user_family_background_details.php?id=".$employee_id."");

}
else { echo "";}



?>

