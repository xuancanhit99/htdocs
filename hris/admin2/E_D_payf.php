 <?php	include('db_con.php');

if(isset($_POST['save']))
{
 $name=$_POST['name'];
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
 $gen_pay_id=$_POST['gen_pay_id'];

 

 $up_emp=("update general_payroll set 
 name='$name',
 gross_income='$gross_income',
 earned_period='$earned_period',
 csb_loan='$csb_loan',
  pvb_loan='$pvb_loan',
w_holding='$w_holding',
 ret_ins='$ret_ins',
 salary_loan='$salary_loan',
 policy_loan='$policy_loan',
 med='$med',
 hdmf_pre='$hdmf_pre',
 sos_ecard_plus='$sos_ecard_plus',
 uoli_educ='$uoli_educ',
 ceap_pre_need='$ceap_pre_need',
 ucpb_loan='$ucpb_loan',
 assoc_dues_coop='$assoc_dues_coop',
 integ_mngt_ser='$integ_mngt_ser',
 net_amt='$net_amt',
 month='$month'

 
 where  gen_pay_id='$gen_pay_id' ");

 
 
 $mysqli->query($up_emp);
 header('location:payroll_list_all.php');
 
 
 }
 
else if(isset($_POST['delete']))
{

 $gen_pay_id=$_POST['gen_pay_id'];
$del_emp=("delete from general_payroll where gen_pay_id='$gen_pay_id' ");
$mysqli->query($del_emp);
 header('location:payroll_list_all.php');

}
 
 
 
else { echo "hala ka!";}

 
 ?>