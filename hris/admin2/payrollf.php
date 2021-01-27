 <?php	include('db_con.php');

if(isset($_POST['save']))
{
 $name=$_POST['name'];
 $emp_id=$_POST['emp_id'];
 $gross_income=$_POST['gross_income'];
 $earned_period=$_POST['earned_period'];
 $csb_loan=$_POST['csb_loan'];
 $pvb_loan=$_POST['pvb_loan'];
 $w_holding=$_POST['w_holding'];
 $ret_ins=$_POST['ret_ins'];
 $salary_loan=$_POST['salary_loan'];
 $policy_loan=$_POST['policy_loan'];
 $med=$_POST['med'];
 $hdmf_pre=$_POST['hdmf_pre'];
 $sos_ecard_plus=$_POST['sos_ecard_plus'];
 $uoli_educ=$_POST['uoli_educ'];
 $ceap_pre_need=$_POST['ceap_pre_need'];
 $ucpb_loan=$_POST['ucpb_loan'];
 $assoc_dues_coop=$_POST['assoc_dues_coop'];
 $integ_mngt_ser=$_POST['integ_mngt_ser'];
 $net_amt=$_POST['net_amt'];
 $stats="check";
 $month=$_POST['month'];


 

 

$query=(" insert into general_payroll(name,gross_income,earned_period,csb_loan,pvb_loan,w_holding,ret_ins,salary_loan,policy_loan,med,
hdmf_pre,sos_ecard_plus,uoli_educ,ceap_pre_need,ucpb_loan,assoc_dues_coop,integ_mngt_ser,net_amt,month)  

     values('$name','$gross_income','$earned_period','$csb_loan','$pvb_loan','$w_holding','$ret_ins','$salary_loan','$policy_loan','$med','$hdmf_pre',
	 '$sos_ecard_plus','$uoli_educ','$ceap_pre_need', '$ucpb_loan','$assoc_dues_coop','$integ_mngt_ser','$net_amt','$month')");
$mysqli->Query($query);	
		
		$up_query = ("update employee set payroll_status='$stats' where employee_id='$emp_id' ");
		$mysqli->Query($up_query);
			header('location:payroll_list.php');
		
		
}

else { echo "";}

 
 ?>