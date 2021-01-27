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
			   <li class="dropdown ">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li> <a href="admin.php" > &nbsp;&nbsp; Employe</a></li>
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
					</div><div style="color:white; font-size:20xp;"> 	Welcome &nbsp;&nbsp;&nbsp;
					<?php
				
				$resultp=("select * from employee where position='HR-Manager'");
				$fetch=$mysqli->query($resultp);
                $rowp=$fetch->fetch_array(MYSQL_ASSOC)	
			
				 ?>
					
					
				<?php echo $rowp['firstname']." " .$rowp['lastname'] ;  ?>
				  &nbsp; <a data-toggle="modal" href="#logout" class="btn btn-info btn-sm"> &nbsp;<i class="glyphicon glyphicon-log-out"></i>&nbsp;	 Logout </a>

	
	
 
  
  
  
  
  
					</div> </p>
				
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>


   </br>
</br>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
<div class="col-lg-12">
<?php	include('modal.php'); ?>





  <div style="overflow:hidden; width:1183PX;">
  <div style="overflow:scroll; height:auto ; width:1200px;">
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
   <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i><center>&nbsp;Payroll</center></strong>
                            </div>    
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp; 
				  <a data-toggle="modal" href="#addpayroll" class="btn btn-info btn-sm">  &nbsp;  &nbsp;  &nbsp;  Add Payroll  &nbsp;  &nbsp;  &nbsp;  &nbsp;   </a>
							</br>
							</br>
						  <thead>
                                <tr>
        	<th>NAME</th>

	<th>Month</th>
		<th>GROSS INCOME</th>
	<th>Earned for the Period	</th>
	<th>CSB Loan</th>
	<th>PVB Loan</th>
	<th>W/Holding</th>
	<th>Ret/Ins</th>
	<th>Salary Loan</th>
	<th>Policy Loan</th>
	<th>MED</th>
	<th>HDMF Premium</th>
	<th>SOS/E-Card-Plus</th>
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
		$gp=(" select * from general_payroll ") ;
		$emp=$mysqli->query($gp);
		while($show=$emp->fetch_array(MYSQLI_ASSOC))
		{$id=$show['gen_pay_id'];
	
		
		
		
		
	
		
	?>
	 <tr>
	 <td><center><a href="E_D_pay.php <?php  echo '?emp='.$id;?>"><?php  echo $show['name'];  ?></a></center></td>	
	 <td><center> <a href="E_D_pay.php <?php echo '?emp='.$id;?> "><?php  echo $show['month'];  ?> </center></a></td>
	 <td><center> <a href="E_D_pay.php <?php echo '?emp='.$id;?> "><?php  echo $show['gross_income'];  ?> </center></a></td>
	 <td><center> <a href="E_D_pay.php <?php echo '?emp='.$id;?> "> <?php  echo $show['earned_period'];  ?> </center><a/></td>
		 <td> <center><a href="payroll.php <?php echo '?access='.$id;?> "><?php  echo $show['csb_loan'];  ?> </a></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['pvb_loan'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['w_holding'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['ret_ins'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['salary_loan'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['policy_loan'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['med'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['hdmf_pre'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['sos_ecard_plus'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['uoli_educ'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['ceap_pre_need'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['ucpb_loan'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['assoc_dues_coop'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['integ_mngt_ser'];  ?> </a></center></td>
<td><center> <a href="E_D_pay.php<?php echo '?emp='.$id;?>"><?php  echo $show['net_amt'];  ?> </a></center></td>


												
										
                                      
                                       
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
								
										from general_payroll   order by gross_income ");
										
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
						
</form>
                            </tbody>
		
                        </table>
						
						
						
						<table border="1">
						<tr>
						
						</tr>
											

  </table>
  
  </div>

  


	 
</div>
</div>

</br>
	<div class="row">
	 <div class="col-lg-11"></div>
				  &nbsp; <a data-toggle="modal" href="#print" class="btn btn-info btn-sm"> &nbsp;<i class="glyphicon glyphicon-log-out"></i>&nbsp;	 Print </a>
</div>

      <!-- FOOTER -->
      <footer></BR>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 , Victorias National High School. &middot; </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
