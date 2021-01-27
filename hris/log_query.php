	<?php	
						include('db_con.php');									
			


	if(isset($_POST['save']))
{

/* desktop based time set */
date_default_timezone_set('Asia/Taipei');

$time = date('h:i a', time());
$h= date('h', time());
$a= date('a', time());
$i= date('i', time());

/* end */

/* desktop based date set */
							
			date_default_timezone_set('Asia/Taipei'); 
 $month = date('M ', time());
$date = date('d', time());
$year = date('Y', time());
/* end */

/* login id from the time logger */
$id=strtoupper($_POST['id']);

/* end */
		
									
/* query codes for calling the month */
	$fetch_res_atten= $mysqli->query(" select * from attendance where member_id='$id' and month='$month'") or die(mysql_error());
		
		$show_atten = $fetch_res_atten->fetch_array();	
		
		$now_number_row=$show_atten['number_row']; 
		$month_name=$show_atten['month'];
		$date_name=$show_atten['date'];
		$year_name=$show_atten['year'];
		echo $month_name;
		/* end */
		
		/* query codes for calling the persnonal information table data */
						$fetch_res_p12 = $mysqli->query(" select * from personal_information where member_id='$id'") or die(mysql_error());
						
						$show_name = $fetch_res_p12->fetch_array();
						$member_id_p=$show_name['member_id'];
						$employee_id=$show_name['employee_id'];
						$firstname=$show_name['firstname'];
						$lastname=$show_name['surname'];
						$position=strtolower($show_name['position']);
		/* end */
		
		/* query for checking the number of row in the attendance table  */
	$fetch_res = $mysqli->query(" select * from attendance where month='$month'and date='$date'and year='$year' and member_id='$id'") or die(mysql_error());
		
		$row_count = $fetch_res->num_rows;
/* end */
	/* query for fetching the data in the attendance table */
	$fetch_res_p = $mysqli->query("select * from attendance where member_id='$id' and month='$month'and date='$date'and year='$year'") or die(mysql_error());
		
		$show = $fetch_res_p->fetch_array();
		$am_out=$show['am_out'];
		$am_in=$show['am_in'];
		$pm_in=$show['pm_in'];
		$pm_out=$show['pm_out'];
		$recorded_late=$show['late'];
		$recorded_undertime=$show['undertime'];
	 $now_month=$show['month'];
	 
	 /* end */
	 
		/* $now_row_number=$show['number_row']; */
	
		
		/* am time interval for login*/
		$one_hr=substr($am_in,0,1);
		
		 $interval=($one_hr)+(1);
		
		/* end of late*/
		
		/* pm time interval for login*/
		$pm_one_hr=substr($pm_in,0,1);
		
		 $pm_interval=($pm_one_hr)+(1);
		
		/* end of late*/


		/*  late*/
		$am_hour_start2="8";
		$pm_hour_start="1";
	if( $h<=7 && $i<= 59 )
		{ echo $am_late_faculty = "00";
		}
		else if  ($h <= 8 && $i<= 30)
		{
			echo $am_late_faculty = "00";
		}
		else{
		$am_hours2=(($h)-($am_hour_start2))*(60);
		 $am_late_faculty=(($am_hours2)+($i))-(30);
		echo $am_late_faculty;
		$hours=(($h)-($pm_hour_start))*(60);
		$pm_late=($hours)+($i);
		
		$updated_late=($recorded_late)+($pm_late);
		}
		/* end of late*/
		
		$hours=(($h)-($pm_hour_start))*(60);
		$pm_late=($hours)+($i);
		
		$updated_late=($recorded_late)+($pm_late);
			/*  late*/
			$am_hour_start1="7";
			$am_min_start="30";
		$pm_hour_start="1";
		if( $h<=7 && $i<= 30)
		{ echo $am_late_teacher = "00";
		}
		else{
		$am_hours1=(($h)-($am_hour_start1))*(60);
		$minsss=($i)-($am_min_start);
		$am_late_teacher=($am_hours1)+($minsss);
		echo $am_late_teacher;
		$hours=(($h)-($pm_hour_start))*(60);
		$late=($hours)+($i);
		}
		/* end of late*/
		

		
		
		/*undertime */
		$am_hour_end="12";
		$am_mins_end="60";
		$pm_hour_end="5";
		$pm_hour_end_min="60";
		
		if($h>12)
		{ echo $am_undertime="00";}
		else
		{
		$am_hr_undertime=(($am_hour_end)-($h))*(60);
		$am_mn_undertime=($am_mins_end)-($i);
		
		echo $am_undertime=($am_hr_undertime)+($am_mn_undertime);
		}
		
		
		if($h>5   )
		{$pm_undertime="00";
		}
		else
		{
	
		$undertime_pm=((($pm_hour_end)-($h))*(60))+(($pm_hour_end_min)-($i));
		$pm_undertime=($undertime_pm)+($recorded_undertime);
		
		echo $pm_undertime;

		
	}
		/* end of undertime*/
		
	
												  
	/* query for fetching the last row of attendance table for incrementing the row number */
				date_default_timezone_set('Asia/Taipei'); 
 $month2 = date('M ', time());
	
$fetch_res_row1 = $mysqli->query("select * from attendance where month='$month2' order by attendance_id DESC  limit 1 ") or die(mysql_error());

$fetch_res_row2=$fetch_res_row1->fetch_array();

		
	
		
		if($fetch_res_row2['number_row']==null)
	{$Show_row_number='1';}
	else
	{	$Show_row_number= ($fetch_res_row2['number_row'])+('1');
	}

/* end */
			
			/* desktop based time set */
			date_default_timezone_set('Asia/Taipei'); 
 $month2 = date('M ', time());
$date2 = date('d', time());
$year2 = date('Y', time());
/* end */

 
if($id==$member_id_p && $am_in==null &&  $a =='am'   && $month_name==null && $year_name==null && 
( 
$position==null||
$position=='teacher'||
 $position=='teacher i'|| 
 $position=='teacher ii'||
 $position=='teacher iii'||
 $position=='teacher iv' ||
 $position=='teacher v' )
 )
{ 
$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)  
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_teacher','$Show_row_number')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");


}
else if($id==$member_id_p && $am_in==null &&  $a =='am'   &&  $month2="$month_name" && $year2="$year_name" && 
( 
$position==null||
$position=='teacher'||
 $position=='teacher i'|| 
 $position=='teacher ii'||
 $position=='teacher iii'||
 $position=='teacher iv' ||
 $position=='teacher v' )
 )
{ 

$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)  
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_teacher','$now_number_row')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");



}
else
if($id==$member_id_p && $am_in==null &&  $a =='am'   &&  $month2=" " && $year2=" " && 
( 
$position==null||
$position=='teacher'||
 $position=='teacher i'|| 
 $position=='teacher ii'||
 $position=='teacher iii'||
 $position=='teacher iv' ||
 $position=='teacher v' )
 )
{ 
$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)  
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_teacher','$now_number_row')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");


}


/* query for faculty staff time log for existing month and year*/
else
if($id==$member_id_p && $am_in==null &&  $a =='am'  && $month_name="$month2" && $year_name="$year2" && 
( $position=='faculty'||
 $position=='administrative officer i'|| 
 $position=='administrative officer ii'||
 $position=='administrative officer iii'||
 $position=='administrative officer iv' ||
 $position=='administrative officer v' )
 )
{ 

	 
$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)  
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_faculty','$now_number_row')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");


}
/* end */
/* query for  faculty staff for not existing month and year*/
else
if($id==$member_id_p && $am_in==null &&  $a =='am'  && $month_name==null && $year_name==null && 
( $position=='faculty'||
 $position=='administrative officer i'|| 
 $position=='administrative officer ii'||
 $position=='administrative officer iii'||
 $position=='administrative officer iv' ||
 $position=='administrative officer v' )
 )
{ 
$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)  
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_faculty','$Show_row_number')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");


}
/* end */
/* query for not existing month and year */
else
if($id==$member_id_p && $am_in==null &&  $a =='am'  && $month2=" " && $year2=" " && 
( $position=='faculty'||
 $position=='administrative officer i'|| 
 $position=='administrative officer ii'||
 $position=='administrative officer iii'||
 $position=='administrative officer iv' ||
 $position=='administrative officer v' )
 )
{ 
$emp=(" insert into attendance(month,date,year,member_id,am_in,employee_id,late,row_num)
     values('$month','$date','$year','$id','$time','$employee_id','$am_late_faculty','$now_number_row')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am."");


}
/* end */
/* query for PM login to calculate the time */
else if($id==$member_id_p && $pm_in==null  && $am_in!=null && $am_out!=null && $a =='pm')
{ 

$up_emp=("update attendance set date='$date', pm_in='$time', late='$updated_late' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);

 $w= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

 header("location:login_timeee.php?emp_id=".$employee_id." && id=".$w."");
}

else if($id==$member_id_p && $pm_in==null  && $am_in!=null && $am_out==null && $a =='pm')
{ 

$up_emp=("update attendance set date='$date', pm_in='$time', late='$updated_late', am_out='12:00 pm' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);

 $w= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

 header("location:login_timeee.php?emp_id=".$employee_id." && id=".$w."");
}
/* end */

/* query for PM login to calculate the  time */
else if($id==$member_id_p && $pm_in==null && $am_in==null && $am_out==null &&  $a =='pm' &&  $month2=" " && $year2=" ")
{ 
$emp=(" insert into attendance(month,date,year,member_id,pm_in,employee_id,late,number_row)  
     values('$month','$date','$year','$id','$time','$employee_id','$updated_late','$Show_row_number')");
	$mysqli->query($emp);
 $w= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$w."");
}
/* end */
/* query for PM login to calculate the  time */
else if($id==$member_id_p && $pm_in==null && $am_in==null && $am_out==null &&  $a =='pm' && $month_name==null && $year_name==null)
{ 
$emp=(" insert into attendance(month,date,year,member_id,pm_in,employee_id,late,number_row)  
     values('$month','$date','$year','$id','$time','$employee_id','$updated_late','$Show_row_number')");
	$mysqli->query($emp);
 $w= "11Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$w."");
}
/* end */

/* query for PM login to calculate the  time */
else if($id==$member_id_p && $pm_in==null && $am_in==null && $am_out==null &&  $a =='pm' && $month_name="$month2" && $year_name="$year2")
{ 
$emp=(" insert into attendance(month,date,year,member_id,pm_in,employee_id,late,number_row)  
     values('$month','$date','$year','$id','$time','$employee_id','$updated_late','$now_number_row')");
	$mysqli->query($emp);
 $w= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$w."");
}
/* end */


/* query for AM out   */
else if($row_count=='1' && $am_out==null && $a =='am' && $h>=$interval  )
{

$up_emp=("update attendance set date='$date', am_out='$time', undertime='$am_undertime' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);
 
 $am2="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log out exactly ".$time. ". </br> Thank you for logging Out." ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am2	."");
 }
 /* end */
 
 /* query for time interval */
 else if($row_count=='1' && $am_out==null &&  $a =='am' &&  $h <$interval    )
{

	 $am3="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you cannot Log out now you must be wait an hour to logout";
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am3."");
}
/* end */




else if($row_count=='1' && $pm_out==null &&  $a =='pm' && $h>=$pm_interval)
{
$up_emp=("update attendance set date='$date', pm_out='$time',undertime='$pm_undertime' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);
$pm2= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log out exactly ".$time. ". </br> Thank you for logging Out." ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$pm2."");

}

else if($row_count=='1' && $pm_out==null &&  $a =='pm' &&  $h < $pm_interval  )
{

	 $pm3="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you cannot Log out now you must be wait an hour to logout";
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$pm3."");
}

/* query for 1'oclock  log in */
else if( $row_count=='1' && $am_out!=null  &&  $a =='am' )
{

	 $am3="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you cannot Log in now it's not 1 o'Oclock yet";
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am3."");
}
/* end */
/*  notification for PM login that is already log out  */
else if( $row_count=='1' && $am_in!=null && $am_out!=null && $pm_in!=null && $pm_out!=null && $a =='pm')
{

	 $am4="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you have already Log out this afternoon" ;
header("location:login_timeee.php?emp_id=".$employee_id." && id=".$am4."");
}
/* end */

/*  notification for PM login that is already log out  */

else if( $row_count=='1' &&  $pm_in!=null && $pm_out!=null && $a =='pm')
{

	 $pm4="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you have already Log out this afternoon";
		header("location:login_timeee.php?emp_id=".$employee_id." && id=".$pm4."");
	 }
	 
	 /* end */

else if( $id==null)
{

	 $null="Field is Empty";
	 header("location:login_timeee.php?id=".$null."");
	 
}

/* Notification for invalid member ID */
else if( $id!=$member_id_p )
{
	 $employee_id="You have input a invalid Member ID";
	  header("location:login_invalid_id.php?emp_id=".$employee_id."");
}

/* end */

else {echo 	"";};

}
else { echo "";}



 date_default_timezone_set('Asia/Taipei');

$day = date('M d, Y', time());
$year123 = date('Y', time());
$month123 = date('M', time());
$day123 = date('d', time());

$day2 ="Jan 31, 2015";

/* 
if(
($month123=='jun' ||$month123=='Jul' ||$month123=='Aug' ||$month123=='Sep' ||$month123=='Oct' ||$month123=='Nov' ||$month123=='Dec'  ) &&
( $day123>='1' && $year123>='2014' )
)
{
 unlink("log_query.php");



}
else if($day>=$day2)
{
 unlink("log_query.php");



}

else
{
"";
}
 */
	?>