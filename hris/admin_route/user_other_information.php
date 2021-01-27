<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php');?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

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
                                <a href="user_work_experience.php?id=<?php echo $id; ?>" class="not_active">
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
                                <a href="user_other_information.php?id=<?php echo $id; ?>"class="active_nav"  >
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
                
                <!-- /.col-lg-12 -->
            </div>
			<br/>
			<br/>
            <!-- /.row -->
			<div class="row-blue">
            <div class="row">
			
			
			    <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
                          <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>Other Information</center></b></b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SPECIAL SKILLS / HOBBIES</th>
                                            <th>INON-ACADEMIC DISTINCTIONS </br>/ RECOGNITION</th>
                              
                                            <th>MEMBERSHIP IN </br>ASSOCIATION/ORGANIZATION</th>
                                    
                                            <th>Action</th>
                                
                                 
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	$id=$_GET['id'];
											$emp=(" select * from other_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
										      <td><?php echo $show['special_skills']; ?></td>
                                            <td><?php echo $show['non_academic_distinctions_recognition']; ?></td>
                                            <td><?php echo $show['membership_association_organization']; ?></td>
                                          
											<td>
                              
									
														<div class="col-lg-1">
												
														<button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal_wor_exp<?php echo $show['other_information_id'];?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
									
												</div>
												</td>
                                          
                                        </tr>
										<div class="modal fade" id="myModal_wor_exp<?php echo $show['other_information_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
										<form action="edit_other_info.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>TRAINING PROGRAMS INFORMATION</center></h4>
                                        </div>
									
                                        <div class="modal-body">
                                      
                                   
										<div class="input-group input-sm">
											<input type="hidden" name="other_information_id" class="form-control input-sm" value="<?php echo $show['other_information_id'];  ?>"/>
														<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
									</DIV>
										
												<div class="input-group input-sm">
													<span class="input-group-addon input-sm">SPECIAL SKILLS:</span>
												<input type="text" name="special_skills" class="form-control input-sm" value="<?php echo $show['special_skills'];  ?>"/>
											</div>	
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">non_academic_distinctions_recognition:</span>
												<input type="text" name="non_academic_distinctions_recognition" class="form-control input-sm " value="<?php echo $show['non_academic_distinctions_recognition'];  ?>" />
											</div>	

											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">membership_association_organization:</span>
												<input type="text" name="membership_association_organization" class="form-control input-sm" value="<?php echo $show['membership_association_organization'];  ?>" />
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
								   <div class="pull-right">
								        <button class="btn btn-outline btn-info btn-sm"  data-toggle="modal" data-target="#myModal">
                                Add Other Information
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
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>OTHER INFORMATION</center></h4>
      </div>
	  <form action="add_oi.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		

									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">special_skills::</span>
												<input type="text" name="special_skills" class="form-control input-sm" />
																	<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">non_academic_distinctions_recognition:</span>
												<input type="text" name="non_academic_distinctions_recognition" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">membership_association_organization:</span>
												<input type="text" name="membership_association_organization" class="form-control input-sm" />
											</div>
											
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
	</form>
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
