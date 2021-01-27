<?php
include('db_con.php');
 if(isset($_POST['delete']))
{

$attendance_id=$_POST['attendance_id'];
$del_emp=("delete from attendance where attendance_id='$attendance_id' ");
$mysqli->query($del_emp);
 header('location:attendance.php');

}
?>