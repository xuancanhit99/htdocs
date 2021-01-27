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
     <div style="border:1px solid black; width:1000px; height:100px;">
	 
	 <center>	<h1> Monthly Report</h1></center>
	  <center><h3 div style="position:relative; top:-10px;">November to December</h3></center>
	 </div>
	 <div style="border:1px solid black; width:1000px; height:550px;">
	 	<table border="1">
		<tr>
	 <th><div style="border:solid 1px black; background-color:silver;">NAME</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">Type</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">1</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">2</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">3</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">4</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">5</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">6</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">7</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">8</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">9</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">10</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">11</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">12</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">13</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">14</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">15</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">16</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">17</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">18</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">19</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">20</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">21</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">22</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">23</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">24</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">25</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">26</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">27</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">28</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">29</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">30</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">31</div></th>
	 <th><div style="border:solid 1px black; background-color:silver;">Total</div></th>
	
	 </tr>
<tr>

<?php 
$name=$_POST['name'];
$year=substr($_POST['year'],6,10);
$month=$_POST['month'];


		include('db_con.php');
		
		$emp=(" SELECT * from attendance where   year='$year' and month='$month' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{	


?>

<td><?php echo $show['name'];  ?> </td>	 
<td style="background-color:grey;">Late </td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="01")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="02")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td>

<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="03")
{echo "A";}
else
{echo $show['late'];}
?>

 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="04")
{echo "A";}
else
{echo $show['late'];}
?>
</td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="05")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="06")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="07")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="08")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="09")
{echo "A";}
else
{echo $show['late'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="10")
{echo "A";}
else
{echo $show['late'];}
?>
</td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="11")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="12")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="13")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="14")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="15")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="16")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="17")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="18")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="19")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="20")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="21")
{echo "A";}
else
{echo $show['late'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="22")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="23")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="24")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="25")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="26")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="27")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="28")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="29")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="30")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="31")
{echo "A";}
else
{echo $show['late'];}
?> </td>	 
<td style="background-color:grey">27 </td>	 
</tr>	 

<tr>
<td><?php echo $show['name'];  ?> </td>	 
<td style="background-color:silver;">Undertime </td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="01")
{echo "A";}
else
{echo $show['undertime'];}
?>
</td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="02")
{echo "A";}
else
{echo $show['undertime'];}
?>
</td>	 

<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="03")
{echo "A";}
else
{echo $show['undertime'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="04")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="05")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="06")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="07")
{echo "A";}
else
{echo $show['undertime'];}
?>
</td>	 
<td>
<?php
$d1=$show['date'];
 if (substr($d1,0,2) !="08")
{echo "0";}
else
{echo $show['undertime'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="09")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="10")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="11")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="12")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="13")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="14")
{echo "0";}
else
{echo $show['undertime'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="15")
{echo "0";}
else
{echo $show['undertime'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="16")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="17")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="18")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="19")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="20")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="21")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="22")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="23")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="24")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="25")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="26")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="27")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="28")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="29")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="30")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="31")
{echo "0";}
else
{echo $show['undertime'];}
?> </td>
<td style="background-color:silver;">5 </td>	 
 
</tr>	
	 
	 
 <?php } ?>
	 </table>
	 
	 </div>
	 
	 
	 
</body>
</html>