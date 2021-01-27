<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $father_firstname=$_POST['father_firstname'];
 $father_middlename=$_POST['father_middlename'];
 $father_surname=$_POST['father_surname'];
 $mother_firstname=$_POST['mother_firstname'];
 $mother_middlename=$_POST['mother_middlename'];
 $mother_surname=$_POST['mother_surname'];
 


 

 

$emp=(" insert into parents(employee_id,father_firstname,father_middlename,father_surname,mother_firstname,mother_middlename,mother_surname)  
     values('$employee_id','$father_firstname','$father_middlename','$father_surname','$mother_firstname','$mother_middlename','$mother_surname')");
	$mysqli->query($emp);
	header('location:family_background.php');
}

else { echo "";}





 
 ?>
