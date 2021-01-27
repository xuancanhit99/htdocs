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
			
  
			 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Payroll <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				 <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll List</a></li>
        
                     
                
                  </ul>
                </li>
			 
			 <li class="dropdown  active">
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
                    <li><a href="department.php">Department</a></li>
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

    $id=$_GET['sal']; 
	
		$emp=("select * from department where dep_id='$id'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($row = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		

  ?>
 </br>
 
 <form method="POST" action="E_D_deptf.php" >
  <div class="form-group">
 <div class="row">

    <div class="col-lg-4"></div> <div class="col-lg-1" style="font-size:20px;"> Department:  
	</div> <div class="col-lg-2"> 
	<input type="text" name ="dep_name" class="form-control" value="<?php echo $row['dep_name']; ?>" >  </div>
	<input type="hidden" name ="dep_id" class="form-control" value="<?php echo $row['dep_id']; ?>" >  

  </div>
  </br>
  

  



  </br>
  
  
   
        <div class="row">
     <div class="col-lg-4"></div><div class="col-lg-1" style="font-size:20px;text-align:left;"></div>
    <div class="col-lg-2">
 <button type="submit" name="save"  class="btn btn-info" onclick="salary_rate2()">
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
        <p>&copy; 2013 , Victorias National High School. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
