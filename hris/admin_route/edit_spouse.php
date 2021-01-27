<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $employee_id=$_POST['employee_id'];
 $spouse_id=$_POST['spouse_id'];
 $spouse_firstname=$_POST['spouse_firstname'];
 $spouse_middlename=$_POST['spouse_middlename'];
 $spouse_surname=$_POST['spouse_surname']; 
 $occupation=$_POST['occupation'];
 $employer_bus_name=$_POST['employer_bus_name'];
 $business_address=$_POST['business_address'];
 $telephone_no=$_POST['telephone_no'];





$up_emp=("update spouse set 
 spouse_firstname='$spouse_firstname',
 spouse_middlename='$spouse_middlename',
 spouse_surname='$spouse_surname',
 occupation='$occupation',
 employer_bus_name='$employer_bus_name',
 business_address='$business_address',
 telephone_no='$telephone_no'

 where  spouse_id='$spouse_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_family_background_details.php?id=".$employee_id."");
}
else if(isset($_POST['delete']))
{
 $spouse_id=$_POST['spouse_id'];
 $employee_id=$_POST['employee_id'];
$del_emp=("delete from spouse where spouse_id='$spouse_id' ");
$mysqli->query($del_emp);
header("location:user_family_background_details.php?id=".$employee_id."");

}
else { echo "";}



?>

