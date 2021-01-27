<?php include('db_con.php');
/*$employee_id=$_POST['employee_id'];*/
?>

<html>
<head>
<title>
</title>
<style>
td{
width:25px;
}
</style>

</head>
<body style="margin-top:-20px;">

	
	

	

	
	<?php
	$year=$_POST['year'];
$month=$_POST['month'];
		/* loop  for  the print page*/
		$fetch_loop_data=$mysqli->query("select distinct(employee_id) as page_id from attendance where month='$month'");
		
		$page_row=$fetch_loop_data->num_rows;
		
		
		 $row_val=$page_row/15;
		
		if(substr($row_val,2,3)!=null || substr($row_val,3,4)!=null)
		{ $row_nums=$row_val+1;

		}
		else{  
	echo  $row_val;
		 echo $row_nums=$row_val;
		}
		
		
	
		echo '</br>';
	
	
	for ($i = 1; $i <= $row_nums; $i++) {
	
	


/*  end of loop */
	?>
	
	
	
     <div style="border:1px solid black; border-bottom:0px; width:1219px; height:90px;">
	 
	 <center><strong style="font-size:20px;"><center> Monthly Report </center></strong></center>
	  <center><h3 div style="margin-top:0px;">
	<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php 
	  $month_name=$_POST['month'];
	 
	

											 	if($_POST['month']=='Jan' || $_POST['month']=='Jan ')
										{echo "January";}
										else
										if ($_POST['month']=='Feb' || $_POST['month']=='Feb ' )
										{echo "febraury";}
										else
										if ($_POST['month']=='Mar' || $_POST['month']=='Mar ')
										{echo "March ";}
										else
										if ($_POST['month']=='Apr' || $_POST['month']=='Apr ')
										{echo "April";}
										else
										if ($_POST['month']=='May' || $_POST['month']=='May ')
										{echo "may";}
										else
										if ($_POST['month']=='Jun' ||  $_POST['month']=='Jun ')
										{echo "June";}
										else
										if ($_POST['month']=='Jul' || $_POST['month']=='Jul ')
										{echo "July";}
										else
										if ($_POST['month']=='Aug' || $_POST['month']=='Aug ')
										{echo "August";}
										else
										if ($_POST['month']=='Sep'||$_POST['month']=='Sep ')
										{echo "September";}
	 									else
										if ($_POST['month']=='Oct'|| $_POST['month']=='Oct')
										{echo "October";}
										else
										if ($_POST['month']=='Nov'||$_POST['month']=='Nov ')
										{echo "November";}
											else
											if ($_POST['month']=='Dec'||$_POST['month']=='Dec ')
										{echo "December";}
										else {echo "";} 
											  
								
											?>-
											
											  <?php 
	
	
											if( $_POST['year']!=null)
											
											{echo $_POST['year'];}
											else {echo "";}
										
echo "<div style='float:right; font-size:12px;'> Page 1 of $i";
											?>
										</center>
											
	  </h3></center>
	 </div>
	 <div style="border:1px solid black; width:1219px; height:820px; margin-top:-40px">
	 	<div style="border:0px solid red; height:750px; ">
	 	<table border="1">
		<thead>
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
</thead>

<tbody>

<?php	

		 
 $year=$_POST['year'];
 $month=$_POST['month'];
		$fetch_loop_data2=$mysqli->query("select distinct(employee_id) as page_id2 from attendance ");
		
		$page_row2=$fetch_loop_data2->num_rows;
		
		$rows=$page_row2;
		
		$row_start=('15' *"$i'")-'15';
		$row_end='15' *"$i'";
		
		
		$emp=("SELECT distinct(personal_information.employee_id) as emp_id ,
		
			personal_information.firstname,
			personal_information.middlename,
			personal_information.surname,
			personal_information.image,
			attendance.employee_id,
			attendance.date,
			attendance.am_in,
			attendance.am_out,
			attendance.pm_in,
			attendance.pm_out,
			attendance.late,
			attendance.undertime,
			attendance.month,
			attendance.year,
			attendance.row_num
				FROM personal_information
				jOIN attendance ON personal_information.employee_id=attendance.employee_id
				where month='$month' and year='$year'  order by  personal_information.firstname ASC ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
	while($showtd = $fetch_res->fetch_array(MYSQLI_ASSOC))
	{$id2=$showtd['emp_id'];


	?>
	

	<tr>
 <?php	
		$emp=("

			SELECT distinct(personal_information.employee_id) as id,

			personal_information.firstname,personal_information.middlename,personal_information.surname,
			personal_information.image,attendance.employee_id,attendance.date,
			attendance.am_in,attendance.am_out,attendance.pm_in,attendance.pm_out,attendance.late,attendance.undertime,
			attendance.month,attendance.date,attendance.year
				FROM personal_information
				jOIN attendance
				ON personal_information.employee_id=attendance.employee_id and personal_information.employee_id='$id2'  ;") or die(mysql_error());
		$fetch_resname = $mysqli->query($emp);
		
	$showname = $fetch_resname->fetch_array();

		
	?>
<td style="border-bottom:0px; padding-top:5px;  width:200px; font-size:12px;">&nbsp;<?php  echo strtoupper($showname['firstname']." ".$showname['surname']) ?> </td>	 
<td style="background-color:grey; font-size:12px;">Late </td>	 
 
<td>
 
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="11";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='01' and employee_id='$id2'

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




// While %d will only output the number of days not already covered by the
// month.


?>
 </td>	

<td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='02' and employee_id='$id2'

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
 
 
<td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='03'and employee_id='$id2'

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
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='04'and employee_id='$id2'

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




 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='05'and employee_id='$id2'

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





 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='06'and employee_id='$id2'

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
 
 
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='07'and employee_id='$id2'

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
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='08'and employee_id='$id2'

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
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='09'and employee_id='$id2'

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
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];


 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='10'and employee_id='$id2'

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
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='11'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='12'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='13'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='14'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='15'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='16'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='17'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='18'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='19'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='20'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='21'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='22' and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='23'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='24'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='25'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='26'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='27'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='28'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='29'and employee_id='$id2'

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
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='30'and employee_id='$id2'

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
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='31'and employee_id='$id2'

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
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT sum(late) as total_late from attendance where  month='$month' and year='$year' and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);

 echo $show1['total_late'];
 
?>
 </td>
 
</tr>	
	
	
 <tr>
 <?php	
		$emp=("

			SELECT distinct(personal_information.employee_id) as id,

			personal_information.firstname,personal_information.middlename,personal_information.surname,
			personal_information.image,attendance.employee_id,attendance.date,
			attendance.am_in,attendance.am_out,attendance.pm_in,attendance.pm_out,attendance.late,attendance.undertime,
			attendance.month,attendance.date,attendance.year
				FROM personal_information
				jOIN attendance
				ON personal_information.employee_id=attendance.employee_id and personal_information.employee_id='$id2'  ;") or die(mysql_error());
		$fetch_resname = $mysqli->query($emp);
		
	$showname = $fetch_resname->fetch_array();

		
	?>
<td style="border-top:0px;"> </td>	 
<td style="background-color:grey; font-size:12px;">Undertime </td>	 
 
<td>
 
<?php
$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="11";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='01' and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}




// While %d will only output the number of days not already covered by the
// month.


?>
 </td>	

<td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='02' and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>	  
 
 
<td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='03'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>	  
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='04'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>	




 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='05'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>	 





 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='06'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='07'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='08'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='09'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];


 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='10'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='11'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='12'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='13'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='14'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='15'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='16'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='17'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='18'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='19'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='20'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='21'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='22' and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='23'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='24'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='25'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='26'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='27'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='28'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='29'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='30'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT * from attendance where  month='$month' and year='$year' and date='31'and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);
		
$late=$show1['undertime'];
if ($late==null)
{echo "A";}
else if($late=='0' || $late=='00')
{echo "00";}
else {
		echo $late; 
		}


?>
 </td>
 
 
 <td>
 
<?php

$year=$_POST['year'];
$month=$_POST['month'];
$space=" ";

 $day1="30";



		$emp1=(" 
		SELECT sum(undertime) as total_undertime from attendance where  month='$month' and year='$year' and employee_id='$id2'

		") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
$show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC);

 echo $show1['total_undertime'];
 
?>
 </td>
 
</tr>	

<?php } ?>

</tbody>

	 </table>
	 </div>
	 <center>
	 <div style="float:bottom;">
	 </br>
	 	 _____________________</br>
	 Signature of Time Keeper
	 
	 </div>
	  </center>
	 </div>
	 </br>
	 </br>
	 </br>
	 </br>

	 </br>
	 </br>
	 </br>
	 </br>
	 </br>
	 
	 <?php } ?>
</body>
</html>