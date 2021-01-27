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
                <li ><a href="#">Home</a></li>
                <li><a href="employee.php<?php  echo '?access='.$keys; ?>">Employee</a></li>
                <li class="active"><a href="Salary.php<?php  echo '?access='.$keys; ?>">Salary</a></li>
                <li><a href="Deduction.php<?php  echo '?access='.$keys; ?>">Deduction</a></li>
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

</br>
</br>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
 
<div class="col-lg-12">

  
  
  
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
          <a href="ses_des.php <?php  echo'?access='.$keys;?>">Logout</a>
		

        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php	include('modal.php'); ?>

   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
        	<th>DATE</th>
	<th>A.M. IN</th>
	<th>A.M. OUT</th>
	<th>P.M. IN</th>
	<th>P.M. OUT</th>
	<th>Hours </th>
	<th>dtr</th>
	
	

									
                                   
                                </tr>
                            </thead>
                            <tbody>
	<!--(MID(AM_in,1,2)*3600) -->
	 	<?php	
		
	
		
	

		$emp=(" SELECT date,AM_in,AM_out,PM_in,PM_out,  ((MID(AM_out,1,2)-MID(AM_in,1,2)) + ((MID(PM_out,1,2)-MID(PM_in,1,2))) )  AS total_hours FROM dtr   ;") or die(mysql_error()); 
		$result = $mysqli->query($emp);
		while($show = $result->fetch_array(MYSQLI_ASSOC))
		{$id=$show
		
	?>
	 <tr>
	 <td><a href="E_D_emp.php <?php  echo '?access='.$id;?>	 "><?php  echo $show['date'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?>  "><?php  echo $show['AM_in'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?>  "><?php  echo $show['AM_out'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> <?php  echo $show['PM_in'];  ?> <a/></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> <?php  echo $show['PM_out'];  ?> <a/></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> <?php  echo $show['total_hours']." ";  ?>Hours <a/></td>



<td><center> <a href="Salary.php<?php echo '?access='.$id;?>">DTR</a></center></td>

												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>					

                            </tbody>
                        </table>
  
  
  
  


	 
</div>
</div>
	
      <hr class="featurette-divider">

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
