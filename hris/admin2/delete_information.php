<?php

include('db_con.php');
if(isset($_POST['delete']))
{

$employee_id=$_POST['employee_id'];
$del_emp=("delete from employee where employee_id='$employee_id' ");
$mysqli->query($del_emp);
 header('location:admin.php');


}

?>