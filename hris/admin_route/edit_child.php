<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $employee_id=$_POST['employee_id'];
 $name=$_POST['name'];
 $birthdate=$_POST['birthdate'];
 $child_id=$_POST['child_id']; 






$up_emp=("update child set 
 name='$name',
 birthdate='$birthdate'


 where  child_id='$child_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_family_background_details.php?id=".$employee_id."");
}
else if(isset($_POST['delete']))
{

 $employee_id=$_POST['employee_id'];
 $child_id=$_POST['child_id']; 
$del_emp=("delete from child where child_id='$child_id' ");
 $mysqli->query($del_emp);
header("location:user_family_background_details.php?id=".$employee_id."");

}
else { echo "";}



?>

