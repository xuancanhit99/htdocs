<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->

   
        <!-- /.navbar-static-top -->
<STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
              
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
                     		 <?php	$id=$_GET['id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
											
											
											
										?>
									
									<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px" >
																
							<center><?php echo $show['firstname']." ".$show['surname']; ?></center>
                           </li>		
								<?php /*
					$id=$_SESSION['employee_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					*/
					?>
			
				         <li>
                                <a href="personal_info.php?id=<?php echo $id; ?>" class="not_active">
								<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
								Employee
							</a>
                            </li>
										<li class="active">
                        <a href="#" >
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						PDS Information<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="personal_information.php?id=<?php echo $id; ?>"class="not_active">Personal Information 
								</a>
							
                            </li>
							
							
							
                            <li>
                                <a href="family_background_details.php?id=<?php echo $id; ?>" class="not_active">
								Family Background
							</a>
                            </li>
					
							       <li>
                                <a href="Educational_Background.php ?id=<?php echo $id; ?>" class="not_active">Educational Background</a>
                            </li>
							       <li>
                                <a href="civil_service.php?id=<?php echo $id; ?>" class="not_active">Civil Service</a>
                            </li>
							       <li>
                                <a href="work_experience.php?id=<?php echo $id; ?>" class="active_nav">Work Experience</a>
                            </li>
							       <li>
                                <a href="voluntary_work.php?id=<?php echo $id; ?>" class="not_active">Voluntary Work</a>
                            </li>
							       <li>
                                <a href="training_programs.php?id=<?php echo $id; ?>" class="not_active">Training Programs</a>
                            </li>
							       <li>
                                <a href="other_information.php?id=<?php echo $id; ?>"class="not_active"  >Other Information</a>
                            </li>
							       <li>
                                <a href="account.php?id=<?php echo $id; ?>" class="not_active">Account</a>
                            </li>
							      
							    
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
							 
									       <li>
                              
							   <a href="service_credits.php?id=<?php echo $id; ?>" class="not_active" >
							    <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Service Credits</a>
                            </li>
							       <li>
                           
							  <a href="attendance.php?id=<?php echo $id; ?>" class="not_active">
							   <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Attendance</a>
                            </li>
							
                  
                        <!-- /.nav-second-level -->
         
                 
                   
                   
                  
                   
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</STRONG>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
	
                </div>
                <!-- /.col-lg-12 -->
            </div>
			</br>
			</br>
            <!-- /.row -->
      
			
				   <div class="row-blue">
				          <b style="color:#fff;">  <b style="color:#fff; font-size:25px;"> <center> Work Experince</center></b></b>
                       
	
   <div class="row">

			    <div class="col-lg-12">
                <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
                    </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>INCLUSIVE DATES </br> From-To</th>
                                            <th>POSITION TITLE</th>
                                            <th>DEPARTMENT / </br>AGENCY /</br> OFFICE / COMPANY</th>
                                            <th>MONTHLY SALARY</th>
                                            <th>SALARY GRADE &</br> STEP INCREMENT</br> (Format "00-0")</th>
                                            <th>STATUS </br>OF </br> APPOINTMENT</th>
                                            <th>GOV'T SERVICE</th>
                                
                                 
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
											$emp=(" select * from work_experience") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['dates_from']."-".$show['dates_from']; ?></td>
                                            <td><?php echo $show['position_title']; ?></td>
                                            <td><?php echo $show['work_place']; ?></td>
                                            <td><?php echo $show['monthly_salary']; ?></td>
											<td><?php echo $show['salary_grade_step_inc']; ?></td>
                                            <td><?php echo $show['status_appointment']; ?></td>
                                            <td><?php echo $show['gov_service']; ?></td>
                                       
                                          
                                        </tr>
                                    <?php }; ?>
                                    </tbody>
                                </table>
							
                            </div>
                            <!-- /.table-responsive -->
                           		
	
                 
                        </div>
								  	       <div class="panel-footer">
										   
                          					    <div class="form-group">
                      <div class="col-lg-2 pull-right">
       
                    </div>
                  </div>
				
                 
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
					

                    </div>
                    </div>
         
				 <form action="add_work_experience.php" method="post">
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">V.Work Experience</h4>
                                        </div>
                                        <div class="modal-body">
                    

					<div class="input-group input-sm">

												<span class="input-group-addon input-sm">Select Employee:</span>
								 <select name="employee_id" class="form-control input-sm">
				 <option value=""> </option>
						<?php		
						
														$query=("SELECT * FROM personal_information WHERE NOT EXISTS 
														(select * from work_experience Where personal_information.employee_id = work_experience.employee_id)
														
														;");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{	?>
													<option value="<?php echo $rowp['employee_id']; ?>"><?php echo $rowp['firstname'].$rowp['middlename'].$rowp['surname']; ?> </option>
				
				<?php } ?>
				</select>
				
											</div>
					
          								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position Title:</span>
												<input type="text" name="position_title" class="form-control input-sm" >
											</div>
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">DEPARTMENT:</span>
												<input type="text" name="work_place" class="form-control input-sm" />
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">MONTHLY SALARY:</span>
												<input type="text" name="monthly_salary" class="form-control input-sm" />
											</div>
												  
               	<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SALARY GRADE & STEP INCREMENT:</span>
												<input type="text" name="salary_grade_step_inc" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">STATUS OF APPOINTMENT:</span>
												<input type="text" name="status_appointment" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GOV'T SERVICE:</span>
												<input type="text" name="gov_service" class="form-control input-sm" />
											
									</div>
									
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date From:</span>
												<input type="date" name="dates_from" class="form-control input-sm" />
											
									</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">To:</span>
												<input type="date" name="dates_to" class="form-control input-sm" />
											
									</div>
										
									
									
						
								
									  	
									  
									  </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
				
				<form>
				
                 <div class="row">
				 
				 
				 
				 
									<div class="col-lg-5">
									
									
									
									
									
									
									
									
										
									  
									  
									  </div>
									
									  


              
                
                </div>
             
				
				
				

                <!-- /.col-lg-12 -->
           
									
			
									
									
									
									
			</div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
      
            <!-- /.row -->

            <!-- /.row -->
			
            </div>
			
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<div class="modal fade" id="child" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Spouse's Information</h4>
      </div>
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		

									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname::</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Occupation:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employe/Bus. Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Business Address:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:
:</span>
												<input type="tel" name="firstname" class="form-control input-sm" />
											</div>
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
