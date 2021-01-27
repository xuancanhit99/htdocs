<?php

	include('db_con.php');
		include('admin_session.php');
?>

<html>
<head>
<title>
</title>

</head>
<body>  
<table border="1 solid black">

                <tr >
        	<th>NAME</th>
	<th>GROSS INCOME</th>
	<th>MONTH</th>
	<th>EARNED FOR THE PERIOD	</th>
	<th>CSB LOAN</th>
	<th>PVB LOAN</th>
	<th>W/HOLDING</th>
	<th>RET/INS</th>
	<th>SALARY LOAN</th>
	<th>POLICY LOAN</th>
	<th>MED</th>
	<th>HDMF Premium</th>
	<th>SOS/ E-Card Plus</th>
	<th>UOLI EDUC</th>
	<th>CEAP PRE NEED</th>
	<th>UCPB LOAN</th>
	<th>ASSOC DUES COOP</th>
	<th>INTEG MNGT SER</th>
	<th>NET AMOUNT</th>

	
	
									
                                   
                                </tr>
								
								
								
								<tr>
								
								
									 	<?php	
		$month=$_POST['month'];
		$year=$_POST['year'];
		/*
		$fetch_row=mysql_query("select gen_pay_id,name, gross_income form general_payroll ") or die(mysql_error());
		
	*/
		$gp=(" select * from general_payroll where  month='$month' ") ;
		$emp=$mysqli->query($gp); 
		while($show=$emp->fetch_array(MYSQLI_ASSOC))
		{$id=$show['gen_pay_id'];
	
		
		
		
		
	
		
	?>
	<tr>
	 <td><center><?php  echo $show['name'];  ?></center></td>	
	 <td><center> <?php  echo $show['month'];  ?> </center></td>
	 <td><center> <?php  echo $show['gross_income'];  ?> </center></a></td>
	 <td><center>  <?php  echo $show['earned_period'];  ?> </center><a/></td>
		 <td> <center><?php  echo $show['csb_loan'];  ?></td>
<td><center> <?php  echo $show['pvb_loan'];  ?> </center></td>
<td><center> <?php  echo $show['w_holding'];  ?> </center></td>
<td><center> <?php  echo $show['ret_ins'];  ?> </center></td>
<td><center> <?php  echo $show['salary_loan'];  ?> </center></td>
<td><center> <?php  echo $show['policy_loan'];  ?> </center></td>
<td><center> <?php  echo $show['med'];  ?> </center></td>
<td><center> <?php  echo $show['hdmf_pre'];  ?> </center></td>
<td><center> <?php  echo $show['sos_ecard_plus'];  ?></center></td>
<td><center> <?php  echo $show['uoli_educ'];  ?></center></td>
<td><center> <?php  echo $show['ceap_pre_need'];  ?> </center></td>
<td><center> <?php  echo $show['ucpb_loan'];  ?> </center></td>
<td><center> <?php  echo $show['assoc_dues_coop'];  ?> </center></td>
<td><center> <?php  echo $show['integ_mngt_ser'];  ?></center></td>
<td><center><?php  echo $show['net_amt'];  ?> </center></td>


												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>	
					
						  <?php $sum_q=("select sum(gross_income) as gross_income,
										sum(earned_period) as earned_period,
										sum(csb_loan) as csb_loan,
										sum(pvb_loan) as pvb_loan,
										sum(w_holding) as w_holding,
										sum(ret_ins) as ret_ins,
										sum(med) as med,
										sum(hdmf_pre) as hdmf_pre,
										sum(sos_ecard_plus) as sos_ecard_plus,
										sum(uoli_educ) as uoli_educ,
										sum(ceap_pre_need) as ceap_pre_need,
										sum(ucpb_loan) as ucpb_loan,
										sum(assoc_dues_coop) as assoc_dues_coop,
										sum(salary_loan) as salary_loan,
										sum(policy_loan) as policy_loan,
										sum(integ_mngt_ser) as integ_mngt_ser,
										sum(net_amt) as net_amt
								
										from general_payroll where  month='$month'");
										
										$val=$mysqli->query($sum_q);
						  $sum=$val->fetch_array(MYSQL_ASSOC);
						  
						  ?>	<tr>
							 <td>Total Amount</td>
							 	  <td><center></center></td>
						  <td><center><?php echo $sum['gross_income']; ?></center></td>
					
						  <td><center><?php echo $sum['earned_period']; ?></center></td>
						  <td><center><?php echo $sum['csb_loan']; ?></center></td>
						  <td><center><?php echo $sum['pvb_loan']; ?></center></td>
						  <td><center><?php echo $sum['w_holding']; ?></center></td>
						  <td><center><?php echo $sum['ret_ins']; ?></center></td>
						  <td><center><?php echo $sum['salary_loan']; ?></center></td>
						  <td><center><?php echo $sum['policy_loan']; ?></center></td>
						  <td><center><?php echo $sum['med']; ?></center></td>
						  <td><center><?php echo $sum['hdmf_pre']; ?></center></td>
						  <td><center><?php echo $sum['sos_ecard_plus']; ?></center></td>
						  <td><center><?php echo $sum['uoli_educ']; ?></center></td>
						  <td><center><?php echo $sum['ceap_pre_need']; ?></center></td>
						  <td><center><?php echo $sum['ucpb_loan']; ?></center></td>
						  <td><center><?php echo $sum['assoc_dues_coop']; ?></center></td>
						  <td><center><?php echo $sum['integ_mngt_ser']; ?></center></td>
						  <td><center><?php echo $sum['net_amt']; ?></center></td>
				
						</tr>
								
								</table>

</body>




</html>