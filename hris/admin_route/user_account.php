<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php'); ?>
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
                                <a href="user_other_information.php?id=<?php echo $id; ?>"class="not_active"  >
							&nbsp;&nbsp;
								Other Information</a>
                            </li>
							       <li>
                                <a href="user_account.php?id=<?php echo $id; ?>" class="active_nav">
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
     
	
 </br>

  <div class="row-blue">
 <div class="row">

 <div class="col-lg-12">

                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
                          <b style="color:#fff; font-size:25px;">Account</b>
                        </div>
                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>PICTURE</th>
                                            <th>NAME</th>
                                            <th>Username</th>
                                            <th>Member ID</th>
   
                                            <th>Action</th>
                                   
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									$id=$_SESSION['employee_id'];
		$emp=("

			SELECT
			personal_information.firstname,personal_information.middlename,personal_information.surname,personal_information.member_id,
			personal_information.image,personal_information.employee_id,user.username,user.user_id,
			user.employee_id
				FROM personal_information
				JOIN user
				ON personal_information.employee_id=user.employee_id where user.employee_id=".$id."  ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		$rows = $fetch_res->num_rows;
		
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX">
                                            <td><img src="upload/<?php  echo $show['image'];?>" alt="Smiley face" height="42" width="42"> </td>
                                            <td><?php  echo $show['firstname']." ".$show['surname'];  ?></td>
											
                                            <td><?php	echo $show['username'];  ?></td>
                                            <td><?php	echo $show['member_id'];  ?></td>
                                            <td>  &nbsp; <a data-toggle="modal" href="#user<?php echo $show['user_id']; ?>" class="btn btn-outline btn-warning"> &nbsp;&nbsp;Edit</a>
</td>
                                       
                                  
                                        </tr>
										<div class="modal fade" id="user<?php echo $show['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>User Account</center></h4>
                                        </div>
											<form action="edit_account.php" method="POST">
                                        <div class="modal-body" style="overflow:hidden;">
										
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" value="<?php echo $show['username'];  ?>" >
												<input type="hidden" name="user_id" class="form-control input-sm" value="<?php echo $show['user_id'];  ?>" >
											</div>
											
											
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Old Password:</span>
												<input type="password" name="password" class="form-control input-sm" value="" >
											</div>
											
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">New Password:</span>
												<input type="password" name="new_password" class="form-control input-sm" >
												<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
											
													
											</br>
											</br>
											</br>
											</br>
											</br>
											</br>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
									</form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
								
                            <!-- /.modal -->
					</div>
								  	       <div class="panel-footer">
										   
                          					    <div class="form-group">
                      <div class="col-lg-2 pull-right">
       
                    </div>
                  </div>
				
                 
							
                        </div>
                        <!-- /.panel-body -->
                    </div>
                                     <?php } ?>
                                    </tbody>
									
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
					
					<?php 
					if ($rows==null)
					{echo
						'<button class="btn btn-outline btn-info btn-md pull-right"data-toggle="modal" data-target="#myModal">
                             Create Account
                            </button>';}
							else
							{echo"";}
					
					?>
					</br>
					</br>
					
				
							
						
					
					
					
					
					
					
					
					
					
                    </div>
	
	
	
            
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<!-- Button trigger modal -->

<!-- Modal -->


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
