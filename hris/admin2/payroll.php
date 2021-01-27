<?php
	include('head_plg_ins.php'); 
		include('db_con.php');
		include('admin_session.php');
		
	
 ?>

<!-- NAVBAR
================================================== -->
  <body>
    
  
     <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">VNHS|HRMS</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
			   <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li> <a  href="admin.php" > &nbsp;&nbsp; Employe</a></li>
                       <li> <a data-toggle="modal" href="#myModal" > &nbsp;&nbsp;Add Employe</a></li>

                
                  </ul>
                </li>
			
  
			 <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Payroll <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				 <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll List</a></li>
        
                     
                
                  </ul>
                </li>
			 
			 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Salary <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  <!--  <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll </a></li>-->
                       <li> <a href="salary_list.php" > &nbsp;&nbsp;	 Salary  List</a></li>
                       <li> <a data-toggle="modal" href="#salary_rate" > &nbsp;&nbsp;	 Salary  Rate</a></li>
                     
                
                  </ul>
                </li>
      
	  
	  	 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Department <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  <!--  <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll </a></li>-->
                    <li><a href="department.php<?php  echo '?access='.$keys; ?>">Department</a></li>
                       <li> <a data-toggle="modal" href="#dept" > &nbsp;&nbsp;	 Add Department</a></li>
                     
                
                  </ul>
                </li>
                
				
          
               
				               
									
              </ul>
						
						
			<ul class="nav navbar-nav navbar-right">
					 			
					<p><div style="color:white; font-size:25xp;">
					</div><div style="color:white; font-size:20xp;"> 	Welcome 
					<?php
		
				$resultp=("select * from employee where position='HR-Manager'");
				$res_query=$mysqli->QUERY($resultp);
                $rowp=$res_query->FETCH_ARRAY(MYSQL_ASSOC)	
			
				 ?>
					
					
				<?php echo $rowp['firstname']." " .$rowp['lastname'] ;  ?>
					  &nbsp; <a data-toggle="modal" href="#logout" class="btn btn-primary btn-sm"> &nbsp;<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i>&nbsp;	 Employee </a>

	
	
 
  
  
  
  
  
					</div> </p>
				
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>
</br>
</br>
</br>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
<div class="col-lg-12">
<?php	include('modal.php'); ?>

  

	 	<?php	
		
		$keys=$_GET['access'];
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
		
     <input type="hidden" value="<?php echo $show['employee_id']; ?>"id="" name="emp_id" class="form-control" ></br>
		
        <input type="HIDDEN" id="net_amt" value="0"name="net_amt" class="form-control" ></br>
		
      <input type="HIDDEN" id="f1_total"value="0" name="f1_total" class="form-control" ></br>
	  
    

      
		  
  <button type="submit" style="width:300px;margin-top:-70px;" name="save" class="btn btn-primary btn-lg"> &nbsp;<i class="glyphicon glyphicon-save"></i>&nbsp;	 Save </button>


   
				
				
		</br>
        </div>
</center>

					

    
  
  
  
  


	 
</div>
</div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 , Victorias National High School. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
