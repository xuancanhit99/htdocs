<?php
	include('head_plg_ins.php'); 
		include('db_con.php');
		$access=$_GET['emp'];

		include('emp_session.php');
		

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
			   <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li> <a  href="admin.php" > &nbsp;&nbsp; Employe</a></li>
                       <li> <a data-toggle="modal" href="#myModal" > &nbsp;&nbsp;Add Employe</a></li>

                
                  </ul>
                </li>
			
  
			 <li class="dropdown">
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
				
				$query=("select * from employee where position='HR-Manager'" );
				
				$result = $mysqli->query($query);
				
				$rowp = $result->fetch_array(MYSQLI_ASSOC);
			
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


    <!-- Carousel
    ================================================== -->
   
</BR>
</BR>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
<div class="col-lg-12">
<?php	include('modal.php'); ?>


  
  <?php 

    $id=$_GET['emp']; 
	
		$emp=("select * from general_payroll where gen_pay_id='$id'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($row = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$row['gen_pay_id'];
		

  ?>
 </br>
 
 <form method="POST" action="E_D_payf.php" role="form" >
  <div class="form-group">
 <div class="row">

    <div class="col-lg-3"></div> <div class="col-lg-2" style="font-size:20px;text-align:RIGHT;"> Name:  
	</div> <div class="col-lg-3"> 
	<input type="text" name ="name" class="form-control" value="<?php echo $row['name']; ?>" >  </div>

  </div>
  </br>
  

  
   <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">   Month:  </div>
    <div class="col-lg-3">
	
<SELECT	name="month"  class="form-control">


<option value="<?php echo $row['month']; ?>" > <?php echo $row['month']; ?></option>


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
<select>
  </div>
  </div>
  </br>
  
  
     <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">   Gross Income:  </div>
    <div class="col-lg-3">
 <input type="text" name="gross_income" class="form-control" value="<?php echo $row['gross_income']; ?>" >
  </div>
  </div>
  </br>
  
  
  
  
     <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">   Earned Period  :  </div>
    <div class="col-lg-3">
 <input type="text" name="earned_period" class="form-control" value="<?php echo $row['earned_period']; ?>" >
  </div>
  </div>
  </br>
  
  
  <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">CBS Loan:</div>
    <div class="col-lg-3">
 <input type="text" name="csb_loan" class="form-control" value="<?php echo $row['csb_loan']; ?>" >
  </div>
  </div>
  </br>
  
  
  <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">PVB Laon:</div>
    <div class="col-lg-3">
 <input type="text" name="pvb_loan" class="form-control" value="<?php echo $row['pvb_loan']; ?>" >
  </div>
  </div>
  </br>
  
    
  <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">With Holdings:</div>
    <div class="col-lg-3">
 <input type="text" name ="w_holding" class="form-control" value="<?php echo $row['w_holding']; ?>" >
  </div>
  </div>
  </br>
      
  <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Ret Ins:</div>
    <div class="col-lg-3">
 <input type="text" name="ret_ins" class="form-control" value="<?php echo $row['ret_ins']; ?>" >
  </div>
  </div>
  </br>
  
    <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Salary Loans:</div>
    <div class="col-lg-3">
 <input type="text" name="salary_loan" class="form-control" value="<?php echo $row['salary_loan']; ?>" >
  </div>
  </div>
  </br>
  
  
      <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Policy Loans:</div>
    <div class="col-lg-3">
 <input type="text" name="policy_loan" class="form-control" value="<?php echo $row['policy_loan']; ?>" >
  </div>
  </div>
  </br>
  
 
      <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">MED:</div>
    <div class="col-lg-3">
 <input type="text" name="med" class="form-control" value="<?php echo $row['med']; ?>" >
  </div>
  </div>
  </br>
  
       <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">HDMF Pre:</div>
    <div class="col-lg-3">
 <input type="text"  name="hdmf_pre" class="form-control" value="<?php echo $row['hdmf_pre']; ?>" >
  </div>
  </div>
  </br>
    
       <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">SOS E-Card Plus:</div>
    <div class="col-lg-3">
 <input type="text"name="sos_ecard_plus" class="form-control" value="<?php echo $row['sos_ecard_plus']; ?>" >
  </div>
  </div>
  </br>
           <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">UOLI Educ:</div>
    <div class="col-lg-3">
	
 <input type="text"name="uoli_educ" class="form-control" value="<?php echo $row['uoli_educ']; ?>" >
  </div>
  </div>
  </br>
    
              <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Ceap Pre Need:</div>
    <div class="col-lg-3">
 <input type="text" name = "ceap_pre_need" class="form-control" value="<?php echo $row['ceap_pre_need']; ?>" >
  </div>
  </div>
  </br>        

  <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">UCPB Loan:</div>
    <div class="col-lg-3">
 <input type="text" name="ucpb_loan" class="form-control" value="<?php echo $row['ucpb_loan']; ?>" >
  </div>
  </div>
  </br>
    
    <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Assoc Dues Coop:</div>
    <div class="col-lg-3">
 <input type="text" name="assoc_dues_coop" class="form-control" value="<?php echo $row['assoc_dues_coop']; ?>" >
  </div>
  </div>
  </br>
        <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Integ Mngt Ser:</div>
    <div class="col-lg-3">
 <input type="text" name="integ_mngt_ser" class="form-control" value="<?php echo $row['integ_mngt_ser']; ?>" >
  </div>
  </div>
  </br>
       
        <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-2" style="font-size:20px;text-align:RIGHT;">Net Amount:</div>
    <div class="col-lg-3">
 <input type="text" name="net_amt" class="form-control" value="<?php echo $row['net_amt']; ?>" ><br>
 <input type="hidden" name="gen_pay_id" class="form-control" value="<?php echo $row['gen_pay_id']; ?>" >
  </div>
  </div>

  
	   
        <div class="row">
     <div class="col-lg-3"></div><div class="col-lg-1" style="font-size:20px;text-align:RIGHT;"></div>
    <div class="col-lg-3">
 <input type="hidden" name="employee_id" class="form-control" value="<?php echo $access; ?>" >
  </div>
  </div>
  </br>
  

    
   
        <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-3">
 <button type="submit" name="save"  class="btn btn-info form-control">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <i class="glyphicon glyphicon-floppy-save"></i>
 &nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
  

  </div>
  </br>	
  
          <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-3">
 <button type="submit" name="delete"  class="btn btn-danger form-control">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <i class="glyphicon glyphicon-trash"></i>
 &nbsp;Delete&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
  

  </div>
  </br>

   






  <?php }?>

  
  </form>
	 
</div>
</div>


	 <!-- Three columns of text below the carousel -->
     
      <!-- /END THE FEATURETTES -->


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
