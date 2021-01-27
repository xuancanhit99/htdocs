<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $name=$_POST['name'];
 $date=$_POST['inputDate'];	
 
 $am_in=$_POST['am_in'];
 $am_in_standard="8";

 $am_in_1=$_POST['am_in'];
 
  
 $pm_in=$_POST['pm_in'];
 
 $pm_in_standard="1";

 if (substr($am_in,0,1)=="1" )
 {

  $am_in_2=(substr($am_in_1,0,2))-($am_in_standard);
 
   $am_in_min=substr($am_in_1,3,4);
   
     $totalhr= (($am_in_2)*60)+($am_in_min);

     $pm_in_2=(substr($pm_in,0,1))-($pm_in_standard);
	 
	 $pm_in_min=substr($pm_in,2,4);
	 
	 
	  $totalhr2= (($pm_in_2)*60)+($pm_in_min);
	 
	 $total=($totalhr2)+($totalhr);
	 
   


 }

 
 else{ 
$am_in_2=(substr($am_in_1,0,1))-($am_in_standard);

   $am_in_min=substr($am_in_1,2,4);
   
   
  $totalhr= (($am_in_2)*60)+($am_in_min);
  
  
  
     $pm_in_2=(substr($pm_in,0,1))-($pm_in_standard);
	 
	 $pm_in_min=substr($pm_in,2,4);
	 
	 
	  $totalhr2= (($pm_in_2)*60)+($pm_in_min);
	  
	  $total=($totalhr2)+($totalhr);
 }
 
 

 $am_out=$_POST['am_out'];	
 $am_out_hr=substr($am_out,0,2);
 $am_out_min=substr($am_out,3,5);
 $am_out_standard_hr="12";	
 $am_out_standard_min="60";	
 
 $total_undertime=(
					((
						(($am_out_standard_hr)-($am_out_hr))*60
					)
					+
					(
						($am_out_standard_min)-($am_out_min)
					))
					+
					((
						(($pm_out_standard_hr)-($pm_out_hr))*60
					)
					+
					(
						($pm_out_standard_min)-($pm_out_min)
					))
					
					);
 
 
 

	
 $pm_out=$_POST['pm_out'];	
 $pm_out_hr=substr($pm_out,0,1);
 $pm_out_min=substr($pm_out,2,5);
 $pm_out_standard_hr="1";	
 $pm_out_standard_min="60";	

 
 

 

 

 

$emp=(" insert into attendance(name,date,am_in,am_out,pm_in,pm_out,late,undertime)  
     values('$name','$date','$am_in_1','$am_out','$pm_in','$pm_out','$total','$total_undertime')");
	$mysqli->query($emp);
	header('location:attendance.php');
}

else { echo "";}

 
 ?>