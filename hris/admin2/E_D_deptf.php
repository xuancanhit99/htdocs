<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$dep_name=$_POST['dep_name'];
$dep_id=$_POST['dep_id'];



$up_emp=("update department set 
 dep_name='$dep_name'


 
 where  dep_id='$dep_id' ");
 
 
 
 $mysqli->query($up_emp);
 header('location:department.php');
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



 




?>