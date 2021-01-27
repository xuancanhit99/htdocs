 <?php	include('db_con.php');

if(isset($_POST['save']))
{
 $Username=$_POST['name'];
/* $Password=$_POST['Password'];
 $firstname=$_POST['Firstname'];
 $Lastname=$_POST['Lastname'];
 $Middlename=$_POST['Middlename'];
 $age=$_POST['age'];
 $Birthdate=$_POST['Birthdate'];
 $Birthplace=$_POST['Birthplace'];
 $contact=$_POST['contact'];
 $TIN=$_POST['TIN'];
 $SSS=$_POST['SSS'];
 $pagibig=$_POST['pagibig'];
 $gender=$_POST['gender'];
 $department=$_POST['department'];
 $position=$_POST['position'];
 $emp_status=$_POST['emp_status'];
 $address=$_POST['address'];
 $civil_status=$_POST['civil_status'];
 $religion=$_POST['religion'];
 $date_emp=$_POST['date_emp'];
 $stat="unchecked"; */

 

$emp=(" insert into employee(username ,password,firstname,lastname,middlename,age,gender,address,birthplace,birthdate,civil_status,contact_no,religion,date_employed,employee_status,deprtment,position,tin_no,sss_no,pagibig_no,payroll_status)  
     values('$Username','$Password','$firstname','$Lastname','$Middlename','$age','$gender','$address','$Birthplace','$Birthdate','$civil_status','$contact','$religion','$date_emp', '$emp_status','$department','$position','$TIN','$SSS','$pagibig','$stat')");
	$mysqli->query($emp);
	header('location:admin.php');
}

else { echo "";}

 
 ?>