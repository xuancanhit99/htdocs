<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php');?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
<strong>
 <STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
              
              
                     		 <?php	$id=$_SESSION['employee_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
											$position=$show['position'];
											
											
										?>
                           
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px">
                            </li>   		
								<?php /*
					$id=$_SESSION['employee_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					*/
					?>
			
				
										<li class="active">
                        <a href="#">
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						PDS Information<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="user_personal_information.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								Personal Information 
								</a>
							
                            </li>
							
							
							
                            <li>
                                <a href="user_family_background_details.php?id=<?php echo $id; ?>" class="not_active">
							&nbsp;&nbsp;
								Family Background
							</a>
                            </li>
					
							       <li>
                                <a href="user_Educational_Background.php ?id=<?php echo $id; ?>" class="not_active">
								&nbsp;&nbsp;
								Educational Background</a>
                            </li>
							       <li>
                                <a href="user_civil_service.php?id=<?php echo $id; ?>" class="not_active">
							&nbsp;&nbsp;
								Civil Service</a>
                            </li>
							       <li>
                                <a href="user_work_experience.php?id=<?php echo $id; ?>" class="active_nav">
						&nbsp;&nbsp;
								Work Experience</a>
                            </li>
							       <li>
                                <a href="user_voluntary_work.php?id=<?php echo $id; ?>" class="not_active">
							&nbsp;&nbsp;
								Voluntary Work</a>
                            </li>
							       <li>
                                <a href="user_training_programs.php?id=<?php echo $id; ?>" class="not_active">
					&nbsp;&nbsp;
								Training Programs</a>
                            </li>
							       <li>
                                <a href="user_other_information.php?id=<?php echo $id; ?>"class="not_active"  >
							&nbsp;&nbsp;
								Other Information</a>
                            </li>
							       <li>
                                <a href="user_account.php?id=<?php echo $id; ?>" class="not_active">
							&nbsp;&nbsp;
								Account</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
							 
									       <li>
                              
							   <a href="user_service_credits.php?id=<?php echo $id; ?>" class="not_active" >
							    <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Service Credits</a>
                            </li>
							       <li>
                           
							  <a href="user_attendance.php?id=<?php echo $id; ?>" class="not_active">
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
	
   <div class="row">

			    <div class="col-lg-12">
                <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
                          <b style="color:#fff;">  <b style="color:#fff; font-size:25px;"> <center> Work Experince</center></b></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>INCLUSIVE DATES </br> From-To</br> (Year-Month-Date)</th>
                                            <th>POSITION TITLE</th>
                                            <th>DEPARTMENT / </br>AGENCY /</br> OFFICE / COMPANY</th>
                                            <th>MONTHLY SALARY</th>
                                            <th>SALARY GRADE &</br> STEP INCREMENT</br> (Format "00-0")</th>
                                            <th>STATUS </br>OF </br> APPOINTMENT</th>
                                            <th>GOV'T SERVICE</th>
                                            <th>Action</th>
                                 
                                          
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
                                            <td><?php echo $show['dates_from']."</br>".$show['dates_to']; ?></td>
                                            <td><?php echo $show['position_title']; ?></td>
                                            <td><?php echo $show['work_place']; ?></td>
                                            <td><?php echo $show['monthly_salary']; ?></td>
											<td><?php echo $show['salary_grade_step_inc']; ?></td>
                                            <td><?php echo $show['status_appointment']; ?></td>
                                            <td><?php echo $show['gov_service']; ?></td>
                                       <td>
                                         
											
											
														<div class="col-lg-1">
												
														<button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal_wor_exp<?php echo $show['work_experience_id'];?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
									
												</div>
												</td>
                                          
                                        </tr>
										
										<div class="modal fade" id="myModal_wor_exp<?php echo $show['work_experience_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
										<form action="edit_wor_exp.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>WORK EXPERIENCE INFORMATION</center></h4>
                                        </div>
									
                                        <div class="modal-body">
                                      
                                   
										<div class="input-group input-sm">
											<input type="hidden" name="work_experience_id" class="form-control input-sm" value="<?php echo $show['work_experience_id'];  ?>"/>
														<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
									</DIV>
										
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Inclusives Dates from:</span>
												<input type="text" name="dates_from" class="form-control input-sm " value="<?php echo $show['dates_from'];  ?>" />
											</div>	

											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Inclusives Dates to:</span>
												<input type="text" name="dates_to" class="form-control input-sm" value="<?php echo $show['dates_to'];  ?>" />
											</div>

											
											<div class="input-group input-sm">
													<span class="input-group-addon input-sm">POSITION TITLE:</span>
												<input type="text" name="position_title" class="form-control input-sm" value="<?php echo $show['position_title'];  ?>"/>
											</div>	
											
											<div class="input-group input-sm">
													<span class="input-group-addon input-sm">DEPARTMENT/AGENCY/OFFICE/COMPANY:</span>
												<input type="text" name="work_place" class="form-control input-sm" value="<?php echo $show['work_place'];  ?>"/>
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">MONTHLY SALARY:</span>
												<input type="text" name="monthly_salary" class="form-control input-sm" value="<?php echo $show['monthly_salary'];  ?>"/>
											</div>	

											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SALARY GRADE & STEP INCREMENT (Format "00-0"):</span>
												<input type="text" name="salary_grade_step_inc" class="form-control input-sm" value="<?php echo $show['salary_grade_step_inc'];  ?>"/>
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">STATUS OF APPOINTMENT:</span>
												<input type="text" name="status_appointment" class="form-control input-sm" value="<?php echo $show['status_appointment'];  ?>"/>
											</div>		

											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GOV'T SERVICE:</span>
												<input type="text" name="gov_service" class="form-control input-sm" value="<?php echo $show['gov_service'];  ?>"/>
											</div>
				
								
        
										
										
									</div>
								
									
									
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                        </div>
                                   
                                    </div>
									</form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
										
										
                                    <?php }; ?>
                                    </tbody>
                                </table>
								   <div class="col-lg-2 pull-right">
								        <button class="btn btn-outline btn-info btn-sm" data-toggle="modal" data-target="#myModal">
                                Add Work Experince
                            </button>
        
                            </div>
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
                                            <h4 class="modal-title" id="myModalLabel"><center>WORK EXPERIENCE</center></h4>
                                        </div>
                                        <div class="modal-body">
                    


					
          								
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
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
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
