<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$fn=$_POST['Position'];

$sal_id=$_POST['sal_id'];



$up_emp=("update salary set 
 Position='$fn'



 
 where  sal_id='$sal_id' ");
 
 
 
 $mysqli->query($up_emp);
 header('location:position.php');
}
else if(isset($_POST['delete']))
{

$sal_id=$_POST['sal_id'];
$del_emp=("delete from salary where sal_id='$sal_id' ");
$mysqli->query($del_emp);
 header('location:position.php');

}
else { echo "";}



?>



 




?>