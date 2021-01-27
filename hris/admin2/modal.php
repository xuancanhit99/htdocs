
  <div class="modal fade" id="addpayroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Search Payroll</center></h4>
        </div>
        <div class="modal-body">
     

		
	<form method="POST" action="payrollf2.php"  >
	 Name:
		<select name="name"class="form-control" required>
		<option value=""></option>
		


					<?php 
		$month = $_POST['month'];
		$year = $_POST['year'];
	
		
		$q=("select * from employee");
		$fetch_emp=$mysqli->query($q);
		while($fetch_row=$fetch_emp->fetch_array(MYSQLI_ASSOC))
		
		{

		?>
		<option value="<?php echo $fetch_row['firstname']."  ".$fetch_row['middlename']."  ".$fetch_row['lastname'] ; ?>"><?php echo $fetch_row['firstname'].$fetch_row['middlename'].$fetch_row['lastname'] ; ?></option>
	
	
	<?php } ?>
		</select></br>
	Month:
		<select name="month"class="form-control" required>
		<option value=""></option>
		<option value="January-Febraury">January-Febraury </option>
		<option value="Febraury-March"> Febraury-March</option>
		<option value="March-April"> March-April</option>
		<option value="April-May"> April-May</option>
		<option value="May-June"> May-June</option>
		<option value="June-July"> June-July</option>
		<option value="July-August"> July-August</option>
		<option value="August-September"> August-September</option>
		<option value="September-October"> September-October</option>
		<option value="October-November"> October-November</option>
		<option value="November-December"> November-December</option>
		<option value="December-January"> December-January</option>
		</select></br>


		Year: <input type="text" id="gross_income" name="year" class="form-control" value="" ></br>
		Gross Income: <input type="text" id="gross_income" name="gross_income" class="form-control" value="" ></br>
  
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
		
 

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save" onclick="net_sum()">Save changes</button>
		      <input type="hidden" value="<?php echo $show['employee_id']; ?>"id="" name="emp_id" class="form-control" ></br>
		
        <input type="HIDDEN" id="net_amt" value="0"name="net_amt" class="form-control" ></br>
		
      <input type="HIDDEN" id="f1_total"value="0" name="f1_total" class="form-control" ></br>
	  
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  
  
  
  
  <div class="modal fade" id="payroll" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Search Payroll</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="payroll_list.php">
		
		Month:
		<select name="month"class="form-control" required>
		<option value=""></option>
		<option value="January-Febraury">January-Febraury </option>
		<option value="Febraury-March"> Febraury-March</option>
		<option value="March-April"> March-April</option>
		<option value="April-May"> April-May</option>
		<option value="May-June"> May-June</option>
		<option value="June-July"> June-July</option>
		<option value="July-August"> July-August</option>
		<option value="August-September"> August-September</option>
		<option value="September-October"> September-October</option>
		<option value="October-November"> October-November</option>
		<option value="November-December"> November-December</option>
		<option value="December-January"> December-January</option>
		</select></br>
		

		Year:
		<select name="year" class="form-control" required>
		
		<option> </option> 
				<?php 
		$q_year=('select distinct(year) as q from general_payroll');
		$fetch_q= $mysqli->query($q_year);
		while($fetch_rowq= $fetch_q->fetch_array(MYSQLI_ASSOC))
		{
		?>
		<option value="<?php  echo $fetch_rowq['q']; ?>"><?php  echo $fetch_rowq['q']; ?> </option> 
	<?php } ?>
		


			
		  </select>


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Search</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  <div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Print</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="print.php">
		
		Month:
		<select name="month"class="form-control" required>
		<option value=""></option>
		<option value="January-Febraury">January-Febraury </option>
		<option value="Febraury-March"> Febraury-March</option>
		<option value="March-April"> March-April</option>
		<option value="April-May"> April-May</option>
		<option value="May-June"> May-June</option>
		<option value="June-July"> June-July</option>
		<option value="July-August"> July-August</option>
		<option value="August-September"> August-September</option>
		<option value="September-October"> September-October</option>
		<option value="October-November"> October-November</option>
		<option value="November-December"> November-December</option>
		<option value="December-January"> December-January</option>
		</select></br>
		
		
		Year: <input type="text" name="year" class="form-control" required></br>
		
    
		  


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  <div class="modal fade" id="dept" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Add Department</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="depf.php">
		
		Department: <input type="text" name="Department" class="form-control" required></br>
    
		  


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Employee's Personal Information</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="addemployee_data.php">
		
		Username: <input type="text" name="Username" class="form-control" required></br>
        Password: <input type="password" name="Password" class="form-control"required ></br>
        Firstname: <input type="text" name="Firstname" class="form-control"required ></br>
        Lastname: <input type="text" name="Lastname" class="form-control" required></br>
        Middlename: <input type="text" name="Middlename" class="form-control" required></br>
        Address: <input type="text" name="address" class="form-control" required></br>
        Age: <input type="text" name="age" class="form-control" required></br>
        Birthdate: <input type="text" name="Birthdate" class="form-control" required></br>
        Birthplace: <input type="text" name="Birthplace" class="form-control" required></br>
        Contact No.: <input type="text" name="contact"class="form-control" required></br>
        TIN No.: <input type="text" name="TIN" class="form-control" required></br>
        SSS No.: <input type="text" name="SSS" class="form-control" required></br>
        Pag-ibig No.: <input type="text" name="pagibig" class="form-control" required></br>
        civil Status: <input type="text" name="civil_status" class="form-control" required></br>
        Religion: <input type="text" name="religion" class="form-control" required></br>
        Date Employed: <input type="text" name="date_emp" class="form-control" required></br>
        Gender: <select name="gender" class="form-control" required> 
					<option></option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select></br>
				
				Department: <select name="department" class="form-control"> 
					<option></option>
					<option value="male">Department1</option>
					<option value="female">Department2</option>
				</select></br>
				
					
				Position: <select name="position" class="form-control" required> 
					<option></option>
					
					<?php  $q=("select * from salary " );
					$mq=$mysqli->query($q);
					while($row=$mq->fetch_array(MYSQLI_ASSOC))
					{
					?>
					<option value="<?php echo $row['position']; ?>"><?php echo $row['position']; ?></option>
				
				<?php } ?>
				</select></br>
				
				Emplyee Status: <select name="emp_status" class="form-control" required> 
					<option></option>
					<option value="Active">Active</option>
					<option value="Inactive"> Inactive</option>
				</select></br>
				
			
				<label for="file">Photo:</label>
          <input type="file" name="file" id="file" class="form-control"><br>
		  


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  
  
  
  <div class="modal fade" id="m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Search Payroll</center></h4>
        </div>
        <div class="modal-body">
     

				From:
		<select name="from"class="form-control" required>
		<option value=""><--Select Month--> </option>
		<option value="January">January </option>
		<option value="Febraury"> Febraury</option>
		<option value="March"> March</option>
		<option value="April"> April</option>
		<option value="May"> May</option>
		<option value="June"> June</option>
		<option value="July"> July</option>
		<option value="August"> August</option>
		<option value="September"> September</option>
		<option value="October"> October</option>
		<option value="November"> November</option>
		<option value="December"> December</option>
		</select></br>
				
				From:
		<select name="from"class="form-control" required>
		<option value=""><--Select Month--> </option>
		<option value="January">January </option>
		<option value="Febraury"> Febraury</option>
		<option value="March"> March</option>
		<option value="April"> April</option>
		<option value="May"> May</option>
		<option value="June"> June</option>
		<option value="July"> July</option>
		<option value="August"> August</option>
		<option value="September"> September</option>
		<option value="October"> October</option>
		<option value="November"> November</option>
		<option value="December"> December</option>
		</select></br>
				
				Emplyee Status: <select name="emp_status" class="form-control" required> 
					<option></option>
					<option value="HR_Manager">status A</option>
					<option value="Teacher">status B</option>
					<option value="Jonitor">status C</option>
				</select></br>
				
			
				<label for="file">Photo:</label>
          <input type="file" name="file" id="file" class="form-control"><br>
		  


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  
  
  
  <div class="modal fade" id="salary_rate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Salary Rate</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="addsalary_data.php">
		
		
				Position: <input type="text"value="" id="position" name="position" class="form-control" required></br>
				
		Daily Rate: <input type="text" value="0" id="daily_rate" name="daily_rate" class="form-control" onchange="salary_rate()"required ></br>
		
		 <!-- Monthly Rate: --> <input type="hidden"value="0" id="month_rate" name="month_rate" class="form-control" required></br>
		
		<!-- Hourly Rate: --> <input type="hidden"value="0"  id="hourly_rate" name="hourly_rate" class="form-control" required></br>
		
		<!-- Minute Rate: --> <input type="hidden" value="0" id="min_rate" name="min_rate" class="form-control"required ></br>


		<input type="hidden" id="hour" name="hour" class="form-control" value="8"></br>
		
		<input type="hidden" id="min" name="min" class="form-control" value="60"></br>
		
		<input type="hidden" id="month" name="month" class="form-control" value="20"></br>

   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save" onchange="salary_rate()">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  <div class="modal fade" id="deduction_rate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Deduction Rate</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="adddeduction_data.php">
		
		
		
		Absent: <input type="text" value="0" id="daily_rate" name="daily_rate" class="form-control" onchange="salary_rate()" required ></br>
		
		Monthly Rate: <input type="text"value="0" id="month_rate" name="month_rate" class="form-control"  required></br>
		
		Hourly Rate:  <input type="text"value="0"  id="hourly_rate" name="hourly_rate" class="form-control"  required></br>
		
		 Minute Rate: <input type="text" value="0" id="min_rate" name="min_rate" class="form-control" required></br>


		<input type="hidden" id="hour" name="hour" class="form-control" value="8"></br>
		
		<input type="hidden" id="min" name="min" class="form-control" value="60"></br>
		
		<input type="hidden" id="month" name="month" class="form-control" value="20"></br>

   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save" >Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to logout?</center></h4>
   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <a href="ses_des.php"><button class="btn btn-danger">Logout</button></a>
		  		          </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  
  