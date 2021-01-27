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
	  <center><h3 div style="position:relative; top:-10px;">
	  <?php 
	
	
											 $t=$_POST['month'];
										
											
											if($t=="01")
											{
											echo "January";
											}
											else if($t=="02")
											{
											echo "Febraury";
											}
											else if($t=="03")
											{
											echo "March" ;
											}
											else if($t=="04")
											{
											echo "April";
											}
											else if($t=="05")
											{
											echo "May" ;
											}
											else if($t=="06")
											{
											echo "June";
											}
											else if($t=="07")
											{
											echo "July";
											}
												else if($t=="08")
											{
											echo "August";
											}
												else if($t=="09")
											{
											echo "September";
											}
												else if($t=="10")
											{
											echo "October";
											}
												else if($t=="11")
											{
											echo "November";
											}
												else if($t=="12")
											{
											echo "December";
											}
											else 
											{echo "";}
											?>
	  </h3></center>
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

$year=$_POST['year'];
$month=$_POST['month'];



		include('db_con.php');
		
		$emp=(" 
		SELECT personal_information.firstname,personal_information.surname,personal_information.employee_id,
		attendance.employee_id,attendance.date,attendance.late,attendance.undertime
		FROM personal_information
		JOIN attendance
		ON personal_information.employee_id=attendance.employee_id where date like '%$month%' and date like '%$year%'
		") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
				include('db_con.php');
		
		$emp2=(" 
		SELECT * from attendance 

		") or die(mysql_error());
		$fetch_res2 = $mysqli->query($emp2);	
		$show2 = $fetch_res2->fetch_array(MYSQLI_ASSOC);
		$date=$show2['date'];
		$employee_id=$show2['employee_id'];
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{	


?>

<td><?php echo $show['firstname']." ".$show['surname'];  ?> </td>	 
<td style="background-color:grey;">Late </td>	 
<td>
 
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="01";



		$emp1=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day1%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="02";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo "A"; 
		}

?>
 </td>	 
<td>
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="03";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="04";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
</td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="05";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="06";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="07";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="08";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="09";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
 </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="10";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?>
</td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="11";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="12";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="13";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day14="14";



		$emp14=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day14%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res14 = $mysqli->query($emp14);
		
$show14 = $fetch_res14->fetch_array(MYSQLI_ASSOC);
		$late=$show14['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo "A"; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="15";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="16";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="17";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="18";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="19";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="20";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo "A" ;
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="21";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="22";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="23";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="24";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="25";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="26";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="27";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="28";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="29";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?> </td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="30";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td><?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="31";



		$emp12=(" 
		SELECT * from attendance where  date like '%$month%' and  date like '%$day2%' and  date like '%$year%'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);
		$late=$show12['late'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $show12['late']; 
		}

?></td>	 
<td style="background-color:grey">
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day2="17";



		$emp12=(" 
		SELECT sum(late) as etal from attendance where  date like '%$month%'and  date like '%$year%' and employee_id='$employee_id'

		") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
$show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC);

		echo $show12['etal']; 
	

?>
</td>	 
</tr>	 

<tr>
<td><?php echo $show['firstname']." ".$show['surname'];  ?>  </td>	 
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
{echo "A";}
else
{echo $show['undertime'];}
?>
 </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="09")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="10")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="11")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="12")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="13")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="14")
{echo "A";}
else
{echo $show['undertime'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="15")
{echo "A";}
else
{echo $show['undertime'];}
?></td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="16")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="17")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="18")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="19")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="20")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="21")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="22")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="23")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="24")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="25")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="26")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="27")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="28")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="29")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="30")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>	 
<td><?php
$d1=$show['date'];
 if (substr($d1,0,2) !="31")
{echo "A";}
else
{echo $show['undertime'];}
?> </td>
<td style="background-color:silver;"><?php $un=substr($show['undertime'],1); echo $un; ?> </td>	 
 
</tr>	
	 
	 
 <?php } ?>
	 </table>
	 
	 </div>
	 
	 
	 
</body>
</html>