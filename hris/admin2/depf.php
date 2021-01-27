 <?php	include('db_con.php');

if(isset($_POST['save']))
{
 $Department=$_POST['Department'];


$dept=(" insert into department(dep_name)  
     values('$Department')");
	 $mysqli->query($dept);
		 header('location:department.php');
}

else { echo "";}

 
 ?>