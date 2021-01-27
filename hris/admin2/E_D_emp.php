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
	
		$emp=("select * from employee where employee_id='$id'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($row = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$row['employee_id'];
		

  ?>
 </br>
 
 <form method="POST" action="E_D_empf.php" role="form" >
  <div class="form-group">
 <div class="row">

    <div class="col-lg-4"></div> <div class="col-lg-1" style="font-size:20px;"> Firstname:  
	</div> <div class="col-lg-2"> 
	<input type="text" name ="fn" class="form-control" value="<?php echo $row['firstname']; ?>" reqiured>  </div>

  </div>
  </br>
  

  
   <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;">   Lastname:  </div>
    <div class="col-lg-2">
 <input type="text" name ="ln" class="form-control" value="<?php echo $row['lastname']; ?>" >
  </div>
  </div>
  </br>
  
  
     <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">   Middlename:  </div>
    <div class="col-lg-2">
 <input type="text" name="mn" class="form-control" value="<?php echo $row['middlename']; ?>"reqiured >
  </div>
  </div>
  </br>
  
  
  
  
     <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">   Age  :  </div>
    <div class="col-lg-2">
 <input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>" reqiured >
  </div>
  </div>
  </br>
  
  
  <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Gender:</div>
    <div class="col-lg-2">
	<select name="gender" class="form-control" reqiured>
	<option name="Male"> Male</option>
	<option name="Male"> Female</option>
	</select>
  </div>
  </div>
  </br>
  
  
  <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Address:</div>
    <div class="col-lg-2">
 <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>"  reqiured>
  </div>
  </div>
  </br>
  
    
  <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Birthplace:</div>
    <div class="col-lg-2">
 <input type="text" name ="birthplace" class="form-control" value="<?php echo $row['birthplace']; ?>"  reqiured>
  </div>
  </div>
  </br>
      
  <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Birthdate:</div>
    <div class="col-lg-2">
 <input type="text" name="birthdate" class="form-control" value="<?php echo $row['birthdate']; ?>"  reqiured>
  </div>
  </div>
  </br>
  
    <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Civil Status:</div>
    <div class="col-lg-2">
 <input type="text" name="civil_status" class="form-control" value="<?php echo $row['civil_status']; ?>"  reqiured>
  </div>
  </div>
  </br>
  
  
      <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Contact No.:</div>
    <div class="col-lg-2">
 <input type="text" name="contact_no" class="form-control" value="<?php echo $row['contact_no']; ?>"  reqiured>
  </div>
  </div>
  </br>
  
 
      <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Religion:</div>
    <div class="col-lg-2">
 <input type="text" name="religion" class="form-control" value="<?php echo $row['religion']; ?>"reqiured >
  </div>
  </div>
  </br>
  
       <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Date Employed:</div>
    <div class="col-lg-2">
 <input type="text"  name="date_employed" class="form-control" value="<?php echo $row['date_employed']; ?>" reqiured >
  </div>
  </div>
  </br>
    
       <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Employee Status:</div>
    <div class="col-lg-2">
 <input type="text"name="employee_status" class="form-control" value="<?php echo $row['employee_status']; ?>" reqiured >
  </div>
  </div>
  </br>
           <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Department:</div>
    <div class="col-lg-2">
	<select name="department"  class="form-control" reqiured >
	 <option value=""> </option>
	<?php 
	
	
	
	
	$dep=("select * from department ");
	
	$fetch_dep = $mysqli->query($dep);
	
	
	while($row_dep = $fetch_dep->fetch_array(MYSQLI_ASSOC))
		
	
	{
	?>
	<option value="<?php echo $row_dep['dep_name']; ?>"><?php echo $row_dep['dep_name']; ?></option>

 
 <?php } ?>
 </select>
  </div>
  </div>
  </br>
    
              <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Position:</div>
    <div class="col-lg-2">
 <input type="text" name = "position" class="form-control" value="<?php echo $row['position']; ?>" reqiured>
  </div>
  </div>
  </br>        

  <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">TIN No.:</div>
    <div class="col-lg-2">
 <input type="text" name="tin_no" class="form-control" value="<?php echo $row['tin_no']; ?>"  reqiured>
  </div>
  </div>
  </br>
    
    <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">SSS No.:</div>
    <div class="col-lg-2">
 <input type="text" name="sss_no" class="form-control" value="<?php echo $row['sss_no']; ?>" reqiured >
  </div>
  </div>
  </br>
        <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;">Pag-ibig No.:</div>
    <div class="col-lg-2">
 <input type="text" name="pagibig_no" class="form-control" value="<?php echo $row['pagibig_no']; ?>"reqiured >
  </div>
  </div>
  </br>
  
        <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-2">
 <input type="hidden" name="employee_id" class="form-control" value="<?php echo $access; ?>"  >
  </div>
  </div>
  </br>
  

    
   
        <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-2">
 <button type="submit" name="save"  class="btn btn-info">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <i class="glyphicon glyphicon-floppy-save"></i>
 &nbsp;Save&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  </div>
  

  </div>
  </br>	
  
          <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-2">
 <button type="submit" name="delete"  class="btn btn-danger">
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
        <p>&copy; 2013 , Victorias National High School. &middot; </p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
