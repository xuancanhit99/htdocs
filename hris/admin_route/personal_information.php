<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
include('nav.php'); ?>

            <!-- /.navbar-top-links -->

        </nav>
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
						
                                <a href="personal_information.php?id=<?php echo $id; ?>"class="active_nav">Personal Information 
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
                                <a href="work_experience.php?id=<?php echo $id; ?>" class="not_active">Work Experience</a>
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
					
						
                        <!-- /.nav-second-level -->
                    </li></ul>
							 
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
            
            <!-- /.row -->
	
   <div class="row-blue" style="width:600px;">
       <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>Personal Information</b></center></b>
   <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="panel panel-default" >
                     <div class="panel-heading" style="background-color:#46b8da;">
					
                      
                        </div>
					   	<div class="row">            </div>
						</br></br>
                <!--   <div class="col-lg-12">
                   <center> <h1 class="page-header">Personal Information</h1></center>
                </div> -->
                <!-- /.col-lg-12 -->

		
            
                <!-- /.col-lg-12 -->
			
				
		<div class="row">
            	
						</br>
						</br>
						</br>
       
                        <!-- /.panel-heading -->
						<div class="col-lg-12" style="position:relative; top:-90px;width:580px;">
						   	<div class="row-blue-inner" style="overflow:hidden;">
                       <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody >
									<?php	
									$id=$_GET['id'];
		$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX" >
                                            <td style="width:20px;padding-left:10px;">
											<?php 
											$image=$show['image'];
											if ($image!=null)
											{
											echo "<img src='upload/$image' height='42' width='42' style='border-radius:3px;'>";
											} 
											else{
											
												echo "<img src='upload/download (1).jpg' height='42' width='42' style='border-radius:3px;'>";
											
											}
												?>
											</td>
                                            <td style="width:200px;"><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></td>
                                            
											<td>
											<div class="row">
										
											
										<!--	<div class="col-lg-1" >
										<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-info">View</button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
											</div>-->
												
											<!--<div class="col-lg-1" style="margin-left:50px;margin-right:50px;">
												<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-warning">Edit</button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div> -->
												 <?php	   		

	$id=$_GET['id'];
		$emp=(" 
	select		personal_information.employee_id,
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.place_birth,
				personal_information.sex,
				personal_information.civil_status,
				personal_information.department,
				personal_information.image,
				personal_information.cis_no,
				personal_information.position,
				personal_information.date_of_birth,
				employee_details.employee_id,
				employee_details.citizenship,
				employee_details.height,
				employee_details.weight,
				employee_details.bloodtype,
				employee_details.gsis_id_no,
				employee_details.pag_ibig_id_no,
				employee_details.philhealth_no,
				employee_details.sss_no,
				employee_details.residential_address,
				employee_details.ra_zip_code,
				employee_details.ra_telephone_no,
				employee_details.permanent_address,
				employee_details.pa_zip_code,
				employee_details.pa_telephone_no,
				employee_details.email_address,
				employee_details.cellphone_no,
				employee_details.agency_employee_no,
				employee_details.tin
	
FROM personal_information
INNER JOIN employee_details
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id=".$id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
		

		
	?>
												<?PHP
												$pb=$show['place_birth'];
												$db=$show['date_of_birth'];
									
												
												/*if($pb==null && $db==null )
												{echo
												'
												<div class="col-lg-1" style="margin-left:40px;">
											
											 <button class="btn btn-outline btn-info" data-toggle="modal" data-target="#myModal">Add Information</button>
											 
													<input type="hidden" name="id" value="<?php echo $show["employee_id"];?> 
										
												</div>';
												
												}
												else
												{ echo
										
														
												
												' 
											<div class="col-lg-1" style="margin-left:40px;" >
												<form	action="personal_information.php" method="post">
											 <button class="btn btn-outline btn-info" data-toggle="modal" data-target="#myModal">
										View</button>
													<input type="hidden" name="id" value="<?php echo $show["employee_id"]; ?> 
											</form>
												</div>
												
												<div class="col-lg-1" style="margin-left:40px;" >
											
											 <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal">Edit</button>
													<input type="hidden" name="id" value="<?php echo $show["employee_id"]; ?>
												</div>';
												}*/
												?>
												<div class="col-lg-1" style="margin-left:40px;" >
											
											 <button class="btn btn-outline btn-info" data-toggle="modal" data-target="#view_myModal">View Information</button>
												</div>
												
												</div>
												
												 </td>
										
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                               <!--      <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">
add employee Information
</button>-->

                                    <!-- <button class="btn btn-block btn-outline btn-info btn-lg pull-right" data-toggle="modal" data-target="#user_account">
<strong>Add Personal Information</strong>-->
</button>
                        </div>
                        </div>
                        </div>
						
						
                        <!-- /.panel-body -->
                    	
						 <div class="col-md-1">
						 </br>
						 &nbsp;
						 </div>
						 
					</div>
					</div>
	

                        <!-- /.panel-body -->

                    </div>
                    </div>
                    </div>
					
					
					
					
					
					
					
					
					
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
	
	<?php	   		

	$employee_id=$_GET['id'];
		$emp=(" 
	select		personal_information.employee_id,
				personal_information.date_of_birth,
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.place_birth,
				personal_information.sex,
				personal_information.civil_status,
				personal_information.department,
				personal_information.image,
				personal_information.cis_no,
				personal_information.position,
				employee_details.employee_id,
				employee_details.citizenship,
				employee_details.height,
				employee_details.weight,
				employee_details.bloodtype,
				employee_details.gsis_id_no,
				employee_details.pag_ibig_id_no,
				employee_details.philhealth_no,
				employee_details.sss_no,
				employee_details.residential_address,
				employee_details.ra_zip_code,
				employee_details.ra_telephone_no,
				employee_details.permanent_address,
				employee_details.pa_zip_code,
				employee_details.pa_telephone_no,
				employee_details.email_address,
				employee_details.cellphone_no,
				employee_details.agency_employee_no,
				employee_details.tin
				
	
FROM personal_information
JOIN employee_details
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id=".$employee_id." ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
while( $show = $fetch_res->fetch_array(MYSQLI_ASSOC))

{
		
	include('view_user_personal_information.php'); 
	
	}
		
	?>



	<!-- /.modal -->

<div class="modal fade" id="user_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;min-height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:240px;overflow:hidden">
<div class="col-lg-12">

	<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" required>
										</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>
											</br>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
												
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade " id="asdas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:100px;overflow:hidden">
<div class="col-lg-12">
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" />
												<input type="hidden" name="sex" class="form-control input-sm" value=" " />
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
									
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>

</html>
