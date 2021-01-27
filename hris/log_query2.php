	<?php	
						include('db_con.php');									
			


	if(isset($_POST['save']))
{		
date_default_timezone_set('Asia/Taipei');
$time = date('h:i a', time());
$h= date('h', time());
$a= date('a', time());
$i= date('i', time());


$date=$_POST['date'];
$id=$_POST['id'];



	$fetch_res_p = $mysqli->query(" select * from personal_information where member_id='$id'") or die(mysql_error());
		
		$show_name = $fetch_res_p->fetch_array();
		$member_id_p=$show_name['member_id'];
		$employee_id=$show_name['employee_id'];
		$firstname=$show_name['firstname'];
		$lastname=$show_name['surname'];
		
	$fetch_res = $mysqli->query(" select * from attendance where date='$date' and member_id='$id'") or die(mysql_error());
		
		$row_count = $fetch_res->num_rows;

	
	$fetch_res_p = $mysqli->query("select * from attendance where member_id='$id' and date='$date'") or die(mysql_error());
		
		$show = $fetch_res_p->fetch_array();
		$am_out=$show['am_out'];
		$am_in=$show['am_in'];
		$pm_in=$show['pm_in'];
		$pm_out=$show['pm_out'];
		$late_time=$show['late'];
			/*  late*/
			$late_time;
		$am_hour_start="8";
		$pm_hour_start="1";

		$am_hours=(($h)-($am_hour_start))*(60);
		$am_late=($am_hours)+($i);
		
		$hours=(($h)-($pm_hour_start))*(60);
		$late_pm=(($hours)+($i))+($late_time);
		/* end of late*/
		
		/*  late*/
		$am_hour_start="8";
		$pm_hour_start="1";

		$am_hours=(($h)-($am_hour_start))*(60);
		$am_late=($am_hours)+($i);
		
		$hours=(($h)-($pm_hour_start))*(60);
		$late=($hours)+($i);
		/* end of late*/
		
		/*undertime */
		$am_hour_end="12";
		$pm_hour_end="5";
		$am_min_end="60";
		
		if($h>5)
		{$pm_late_under="00";
		$am_late_under=($am_min_end)-($i);
		}
		else
		{
	
		$pm_late_under=(($h)-($pm_hour_end))*(60);
		$am_late_under=($am_hour_end)+($i);
		
	}
		
		/* end of undertime*/
		
	
if($id==$member_id_p && $am_in==null &&  $a =='am')
{ 
$emp=(" insert into attendance(date,member_id,am_in,employee_id,late)  
     values('$date','$id','$time','$employee_id','$am_late')");
	$mysqli->query($emp);
	 
$am="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;

header("location:login_timee.php?id=".$am."");


}

	
else if($id==$member_id_p && $pm_in==null &&  $a =='pm')
{ 
$emp=(" insert into attendance(date,member_id,pm_in,employee_id,late)  
     values('$date','$id','$time','$employee_id','$am_late')");
	$mysqli->query($emp);
 $w= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging in. Have a nice day :)" ;
header("location:login_timee.php?id=".$w."");
}

else if($row_count=='1' && $am_out==null && $a =='am' )
{

$up_emp=("update attendance set date='$date', am_out='$time',undertime='$am_late_under' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);
 
 $am2="Good Morning"." ". $show_name['firstname']." ".$show_name['surname']." you have log out exactly ".$time. ". </br> Thank you for logging Out." ;
header("location:login_timee.php?id=".$am2	."");
 }
else if( $row_count=='1' && $pm_in==null && $a =='pm')
{

$up_emp=("update attendance set date='$date', pm_in='$time',late='$late'  where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);
 $pm="Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log in exactly ".$time. ". </br> Thank you for logging In." ;
 header("location:login_timee.php?id=".$pm."");
}
else if($row_count=='1' && $pm_out==null &&  $a =='pm')
{
$up_emp=("update attendance set date='$date', pm_out='$time',undertime='$pm_late_under' where   member_id='$id' and date='$date' ");
 $mysqli->query($up_emp);
$pm2= "Good Afternoon"." ". $show_name['firstname']." ".$show_name['surname']." you have log out exactly ".$time. ". </br> Thank you for logging Out." ;
header("location:login_timee.php?id=".$pm2."");

}
else if( $row_count=='1' && $am_out!=null &&  $a =='am')
{

	 $am3="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you cannot Log in now it's not 12 o'Oclock yet";
header("location:login_timee.php?id=".$am3."");
}
else if( $row_count=='1' && $am_in!=null && $am_out!=null && $pm_in!=null && $pm_out!=null && $a =='pm')
{

	 $am4="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you have already Log out this afternoon" ;
header("location:login_timee.php?id=".$am4."");
}

else if( $row_count=='1' &&  $pm_in!=null && $pm_out!=null && $a =='pm')
{

	 $pm4="Sorry "." ". $show_name['firstname']." ".$show_name['surname'].  ",  you have already Log out this afternoon";
		header("location:login_timee.php?id=".$pm4."");
	 }

else if( $id==null)
{

	 $null="Field is Empty";
	 header("location:login_timee.php?id=".$null."");
	 
}
else if( $id!=$member_id_p )
{
	 $invalid="Invalid Member ID";
	  header("location:login_timee.php?id=".$invalid."");
}

else {echo 	"";};

}
else { echo "";}




	?>