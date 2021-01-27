<?php include('db_con.php');
/*$employee_id=$_POST['employee_id'];*/
?>

<html>
<head>
<title>
</title>
</head>
<body>
	<?php	
		/*include('db_con.php');
		
		$employee_id=$_POST['employee_id'];
		
		
		$emp=(" select * from employee where employee_id='$employee_id' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		*/
	?>
	

	
	
	<?php /*} */ ?>
     
	 <div style="border:1px black solid; width:900px; height:190px; font-family:Arial black; ">
	<h1><center style="font-size:40px;"> PERSONAL DATA SHEET</center>			</h1>										

	
	<div style="border:1px solid black ; color:white; width:130px; background-color:grey; position:relative; left:500px; top:65px;">
	1. CS ID No.	</div>
<input type="text"style="position:relative; left:630px;top:40px; width:270px;height:25px;"  value="                             (to be filled up by CSC)			
">
	 </div>
	 	
	  <div style="border:1px black solid; width:900px; height:980px;">
	  <div style="border:1px black solid;color:white; font-size:25px;
	  width:900px; height:30px;background-color:grey;font-family:calibri; ">
	  
	 <i > I. PERSONAL INFORMATION</i>													

	 </div>
	 
	 <div style="border:1px black solid; width:200px; height:110px; background-color:silver;">
	 2.	SURNAME</br></br>
	&nbsp; &nbsp;FIRST NAME</br></br>
	&nbsp; &nbsp;MIDDLE NAME 
	 </div>
	  
	 <div style="border:1px black solid; width:698; height:111px;  position:relative; left:200px;top:-113px;">
	&nbsp;&nbsp;<input type="text" value="Ramirez" style="width:698px; height:35px; position:relative; top:-23px;"></br></br>
	&nbsp;&nbsp;<input type="text" value="Micheal" style="width:698px; height:38px; position:relative; top:-65px;"></br></br>
	&nbsp;&nbsp;<input type="text" value="Escario" style="width:308px; height:38px; position:relative; top:-85px; left:-8px;">
	<div style="border:1px solid black;width:250px; background-color:silver; height:35px;position:relative; top:-122px; left:308px;">3. NAME EXTENSION (e.g. Jr., Sr.)</div>
	<input type="text" value="jr" style="width:137px; height:38px; position:relative; top:-160px; left:561px;">
	
	</div>
	 
	 
	 
	 </div>
	 
	 
	 </table>
	 
	 
</body>
</html>