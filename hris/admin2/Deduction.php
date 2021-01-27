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
                <li ><a href="admin.php<?php  echo '?access='.$keys; ?>">Home</a></li>
            
                <li class="active"><a href="Payroll_list.php<?php  echo '?access='.$keys; ?>">Salary</a></li>
      
                <li><a href="department.php<?php  echo '?access='.$keys; ?>">Department</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
				               
									
              </ul>
			<ul class="nav navbar-nav navbar-right">
					 			
					<p><div style="color:white; font-size:25xp;">
					</div><div style="color:white; font-size:20xp;"> 	Welcome &nbsp;&nbsp;&nbsp;
					<?php
				
				$resultp=("select * from employee where position='HR-Manager'");
				$fetch=$mysqli->query($resultp);
                $rowp=$fetch->fetch_array(MYSQL_ASSOC)	
			
				 ?>
					
					
				<?php echo $rowp['firstname']." " .$rowp['lastname'] ;  ?>
				  &nbsp; <a data-toggle="modal" href="#logout" class="btn btn-primary btn-sm"> &nbsp;<i class="glyphicon glyphicon-log-out"></i>&nbsp;	 Logout </a>

	
	
 
  
  
  
  
  
					</div> </p>
				
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>


   

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
<div class="col-lg-12">
<?php	include('modal.php'); ?>
</br>
</br>
</br>
</br>
  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"> &nbsp;<i class="glyphicon glyphicon-usd"></i>Deduction </a>


</br>
</br>
  <div style="overflow:hidden; width:1185PX;">
  <div style="overflow:scroll; height:auto ; width:1200px;">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
        	<th>Name</th>
	<th>gross_income</th>
	<th>earned_period	</th>
	<th>csb_loan</th>
	<th>pvb_loan</th>
	<th>w_holding</th>
	<th>ret_ins</th>
	<th>salary_loan</th>
	<th>policy_loan</th>
	<th>med</th>
	<th>hdmf_pre</th>
	<th>sos_ecard_plus</th>
	<th>uoli_educ</th>
	<th>ceap_pre_need</th>
	<th>ucpb_loan</th>
	<th>assoc_dues_coop</th>
	<th>integ_mngt_ser</th>
	<th>net_amt</th>

	
	
									
                                   
                                </tr>
                            </thead>
                            <tbody>
<form 	 method="POST">
	 	<?php	
		
		/*
		$fetch_row=mysql_query("select gen_pay_id,name, gross_income form general_payroll ") or die(mysql_error());
		
	*/
		$gp=(" select * from general_payroll  ") ;
		$emp=$mysqli->query($gp);
		while($show=$emp->fetch_array(MYSQLI_ASSOC))
		{$id=$show['gen_pay_id'];
	
		
		
		
		
	
		
	?>
	 <tr>
	 <td><a href="E_D_emp.php <?php  echo '?emp='.$id;?>"><?php  echo $show['name'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?> "><?php  echo $show['gross_income'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?> "> <?php  echo $show['earned_period'];  ?> <a/></td>
		 <td> <a href="payroll.php <?php echo '?access='.$id;?> "><?php  echo $show['csb_loan'];  ?> </a></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['pvb_loan'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['w_holding'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['ret_ins'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['salary_loan'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['policy_loan'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['med'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['hdmf_pre'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['sos_ecard_plus'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['uoli_educ'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['ceap_pre_need'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['ucpb_loan'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['assoc_dues_coop'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['integ_mngt_ser'];  ?> </a></center></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>"><?php  echo $show['net_amt'];  ?> </a></center></td>


												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>	
						<tr>
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
								
										from general_payroll");
										
										$val=$mysqli->query($sum_q);
						  $sum=$val->fetch_array(MYSQL_ASSOC);
						  
						  ?>
							 <td>Total Amount</td>
						  <td><?php echo $sum['gross_income']; ?></td>
						  <td><?php echo $sum['earned_period']; ?></td>
						  <td><?php echo $sum['csb_loan']; ?></td>
						  <td><?php echo $sum['pvb_loan']; ?></td>
						  <td><?php echo $sum['w_holding']; ?></td>
						  <td><?php echo $sum['ret_ins']; ?></td>
						  <td><?php echo $sum['salary_loan']; ?></td>
						  <td><?php echo $sum['policy_loan']; ?></td>
						  <td><?php echo $sum['med']; ?></td>
						  <td><?php echo $sum['hdmf_pre']; ?></td>
						  <td><?php echo $sum['sos_ecard_plus']; ?></td>
						  <td><?php echo $sum['uoli_educ']; ?></td>
						  <td><?php echo $sum['ceap_pre_need']; ?></td>
						  <td><?php echo $sum['ucpb_loan']; ?></td>
						  <td><?php echo $sum['assoc_dues_coop']; ?></td>
						  <td><?php echo $sum['integ_mngt_ser']; ?></td>
						  <td><?php echo $sum['net_amt']; ?></td>
				
						</tr>
						
</form>
                            </tbody>
                        </table>
  
  
  </div>

  


	 
</div>
</div>
	


      <!-- FOOTER -->
      <footer></BR>
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
