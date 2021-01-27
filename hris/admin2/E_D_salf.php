<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$mn=$_POST['mn'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$birthplace=$_POST['birthplace'];
$birthdate=$_POST['birthdate'];
$civil_status=$_POST['civil_status'];
$contact_no=$_POST['contact_no'];
$religion=$_POST['religion'];
$date_employed=$_POST['date_employed'];
$employee_status=$_POST['employee_status'];
$deprtment=$_POST['deprtment'];
$position=$_POST['position'];
$tin_no=$_POST['tin_no'];
$sss_no=$_POST['sss_no'];
$pagibig_no=$_POST['pagibig_no'];
$employee_id=$_POST['employee_id'];


$up_emp=("update employee set 
 firstname='$fn',
 lastname='$ln',
 middlename='$mn',
 age='$age',
  gender='$gender',
address='$address',
 birthplace='$birthplace',
 birthdate='$birthdate',
 civil_status='$civil_status',
 contact_no='$contact_no',
 religion='$religion',
 date_employed='$date_employed',
 employee_status='$employee_status',
 deprtment='$deprtment',
 position='$position',
 tin_no='$tin_no',
 sss_no='$sss_no',
 pagibig_no='$pagibig_no'

 
 where  employee_id='$employee_id' ");
 
 
 
 $mysqli->query($up_emp);
 header('location:admin.php');
}
else if(isset($_POST['delete']))
{

$employee_id=$_POST['employee_id'];
$del_emp=("delete from employee where employee_id='$employee_id' ");
$mysqli->query($del_emp);
 header('location:admin.php');

}
else { echo "";}



?>



 




?>