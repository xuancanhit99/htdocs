<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 $spouse_firstname=$_POST['spouse_firstname'];
 $spouse_middlename=$_POST['spouse_middlename'];
 $spouse_surname=$_POST['spouse_surname'];
 $occupation=$_POST['occupation'];
 $employer_bus_name=$_POST['employer_bus_name'];
 $business_address=$_POST['business_address'];
  $class="in";
 $telephone_no=$_POST['telephone_no'];
 


 

 

$emp=(" insert into spouse(employee_id,spouse_firstname,spouse_middlename,spouse_surname,occupation,employer_bus_name,business_address,telephone_no)  
     values('$employee_id','$spouse_firstname','$spouse_middlename','$spouse_surname','$occupation','$employer_bus_name','$business_address','$telephone_no')");
	$mysqli->query($emp);
header("location:user_family_background_details.php?id=".$employee_id."&&class=".$class."");
}

else { echo "";}





 
 ?>