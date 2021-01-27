<?php 

include('db_con.php'); 
include('head_plg_ins.php'); 
include('session.php'); 
$name=$_GET['keys'];

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
                <li class="active"><a href="#">Home</a></li>
				
                <li><a href="dtr.php">DTR</a></li>
                <li><a href="contact.php <?php  echo '?name='.$name; ?>">Contact</a></li>
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
					 			
					<p><div style="color:white; font-size:25xp;">Welcome &nbsp; &nbsp; &nbsp;
					<?php $name=("select * from employee where  employee_id='$name'");
							$fetch=$mysqli->query($name);
							$row = $fetch->fetch_array(MYSQL_ASSOC);?> 
							<?php echo $row['firstname']; ?>
					<?php include('logout_mem.php'); ?>
		
						  &nbsp; <a data-toggle="modal" href="#logout_mem" class="btn btn-primary btn-sm"> &nbsp;<i class="glyphicon glyphicon-log-out"></i>&nbsp;	 Logout </a>
</div> </p>
		
	
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>

	</br>
	</br>
<div class="row">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
        	<th>NAME</th>
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
	 	<?php	$name=$_GET['keys'];
			$nameq=(" select * from employee  where employee_id='$name' ") ;
		$nameemp=$mysqli->query($nameq);
$empname=$nameemp->fetch_array(MYSQLI_ASSOC);

$employee=$empname['firstname']." ".$empname['lastname']." , ".$empname['middlename'];  
		/*
	
		$fetch_row=mysql_query("select gen_pay_id,name, gross_income form general_payroll ") or die(mysql_error());
		
	*/
			$gp=(" select * from general_payroll where name='$employee'") ;
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
						
						
</form>
                            </tbody>
                        </table>

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
