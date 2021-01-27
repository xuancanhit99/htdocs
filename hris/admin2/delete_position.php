<?php
include('db_con.php');
 if(isset($_POST['delete']))
{

$sal_id=$_POST['sal_id'];
$del_emp=("delete from salary where sal_id='$sal_id' ");
$mysqli->query($del_emp);
 header('location:position.php');

}
?>