	<?php
	include('db_con.php');



if (isset($_POST['save'])){

$UserName=$_POST['user'];
$Password=$_POST['pass'];


$admin_query=("select * from user where username='$UserName' and password='$Password' and position='Administrative Officer IV'");

$admin=$mysqli->query($admin_query);
$row= $admin->fetch_array(MYSQLI_BOTH);





$empquery=("select * from user where username='$UserName' and password='$Password'");
$employee=$mysqli->query($empquery);
$empl= $employee->fetch_array(MYSQLI_BOTH);





if ($row > 0){

session_start();
$_SESSION['user_id']=$row['user_id'];
header('location:admin/admin_page.php');



}

else if ($empl > 0){

session_start();
$_SESSION['employee_id']=$empl['user_id'];
$keys =$_SESSION['employee_id'];
header('location:admin/user.php');



}






else{
header('location:login_error.php');
?>
   
	
<?php } 

}

?>	