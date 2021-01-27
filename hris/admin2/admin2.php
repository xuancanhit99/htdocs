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
			   <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li> <a data-toggle="modal" href="#myModal" > &nbsp;&nbsp;Add Employe</a></li>

                
                  </ul>
                </li>
			
    <li> <a data-toggle="modal" href="#payroll" > &nbsp;&nbsp;	Search Payroll</a></li>
			 
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
                    <li><a href="department.php">Department</a></li>
                       <li> <a data-toggle="modal" href="#dept" > &nbsp;&nbsp;	 Add Department</a></li>
                     
                
                  </ul>
                </li>
                
				
          
               
				               
									
              </ul>
						
			<ul class="nav navbar-nav navbar-right">
					 			
					<p><div style="color:white; font-size:25xp;">
					</div><div style="color:white; font-size:20xp;"> 	Welcome  &nbsp;&nbsp;&nbsp;
					<?php

				$query=("select * from employee where position='HR-Manager' order by position ASC" );
				
				$result = $mysqli->query($query);
				
				$rowp = $result->fetch_array(MYSQLI_ASSOC);
			
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
	
	




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
</br>
</br>
    <div class="container marketing">
<div class="row">
<div class="col-lg-12">

	<?php	include('modal.php'); ?>

  
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i><center>&nbsp;Employee Table</center></strong>
                            </div>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
        
                                 
                                    <th>DTR</th>
                                </tr>
                            </thead>
                            <tbody>
							
                              	<?php	
		
		
		
		
		$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
							  
							  
                                    <tr>
                         
	 <td><a href="E_D_emp.php <?php  echo '?emp='.$id;?>	 "><?php  echo $show['firstname']." ".$show['middlename']." ".$show['lastname'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?>  "><?php  echo $show['position'];  ?> </a></td>
	
	
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>">DTR</a></center></td>

												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>	
                      
                         
						 
                            </tbody>
                        </table>
  
  
  
  


	 
</div>
</div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer></BR>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 , Victorias National High School. &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
