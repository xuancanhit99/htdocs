<?php 	$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
		?>
   <div class="modal fade" id="payroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		
	 	<?php	
		
	
		$emp=(" select * from employee  where employee_id='$keys' ");
		$emp_query=$mysqli->QUERY($emp);
		$show=$emp_query->FETCH_ARRAY(MYSQLI_ASSOC);
		       $pos=$show['position'];
			   
			   	$q=("select * from salary where position='$pos'");
				$mq=$mysqli->query($q);
				$row=$mq->fetch_array(MYSQLI_ASSOC);
	?>
	<center>
	
	<form method="POST" action="payrollf.php" style="width:300px;" >
		
		Name: <input type="text" name="name" id="name" class="form-control" value="<?php echo $show['firstname']." ".$show['lastname']." , ".$show['middlename'];  ?>"  ></br>
		<?php
		

	
		?>
		Gross Income: <input type="text" id="gross_income" name="gross_income" class="form-control" value="<?php echo $row['month_rate']; ?> " ></br>
  
		Earned for the period: <input type="text" value="0"id="earned_period" name="earned_period" class="form-control"   onchange="net_sum()"></br>
		
        CSB Loan: <input type="text"value="0" id="csb_loan" name="csb_loan" class="form-control"  onchange="net_sum()"></br>
        PVB Loan: <input type="text" value="0"id="pvb_loan" name="pvb_loan" class="form-control" onchange="net_sum()"></br>
		
        W/Holdings: <input type="text"value="0" id="w_holding" name="w_holding" class="form-control" onchange="net_sum()"></br>
        Ret/Ins: <input type="text"value="0"  id="ret_ins" name="ret_ins" class="form-control" onchange="net_sum()"></br>
        Salary Loans: <input type="text" value="0"id="salary_loan" name="salary_loan" class="form-control" onchange="net_sum()"></br>
		
        Policy Loans: <input type="text"value="0" id="policy_loan"  name="policy_loan" class="form-control" onchange="net_sum()"></br>
        Med.: <input type="text"value="0"  id ="med" name="med" class="form-control" onchange="net_sum()"></br>
        HDMF Premium: <input type="text" value="0"id = "hdmf_pre" name="hdmf_pre"class="form-control"  onchange="net_sum()"></br>
		
        SOS/ Ecard-plus: <input type="text"value="0" id ="sos_ecard_plus" name="sos_ecard_plus" class="form-control" onchange="net_sum()"></br>
        UOLI/Educ.Asst: <input type="text" value="0"id="uoli_educ"  name="uoli_educ" class="form-control" onchange="net_sum()"></br>
        Emrglyn/ CEAP Pre-need: <input type="text"value="0" id="ceap_pre_need"  name="ceap_pre_need" class="form-control" onchange="net_sum()"></br>
		
        UCPB Loan: <input type="text" value="0" id="ucpb_loan" name="ucpb_loan" class="form-control" onchange="net_sum()"></br>
        ASSO. DUES COOP: <input type="text" value="0" id ="assoc_dues_coop" name="assoc_dues_coop" class="form-control" onchange="net_sum()"></br>
		
        INTEG. MNGT services: <input type="text"value="0" id="integ_mngt_ser" name="integ_mngt_ser" class="form-control" onchange="net_sum()"></br>

        Net Amt Received: <input type="text" value="0"id="net_amt_dis" name="net_amt" class="form-control" disabled></br>
		
        Net Amt Received: <input type="text" value="<?php echo $show['employee_id']; ?>"id="" name="emp_id" class="form-control" ></br>
		
        <input type="HIDDEN" id="net_amt" value="0"name="net_amt" class="form-control" ></br>
		
      <input type="HIDDEN" id="f1_total"value="0" name="f1_total" class="form-control" ></br>
	  
    

      
		  
  <button type="submit" name="save" class="btn btn-primary btn-lg"> &nbsp;<i class="glyphicon glyphicon-save"></i>&nbsp;	 Save </button>


   
				
				
		</br>
        </div>
</center>
   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <a href="ses_des.php"><button class="btn btn-danger">Logout</button></a>
		  		          </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <?php } ?>