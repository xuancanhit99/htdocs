<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
include('nav_user.php'); ?>

            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
               
                     <li>
					
                        <a href="#">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						<b>Personal Information</b> &nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right fa-1x fa-lg"></i></a>
                        <ul class="nav nav-second-level">
                            
							
                        </ul>
						
						
                       
					   
                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li>
                        <a href="service_credits.php"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-table fa-fw fa-lg"></i> </button><b>Service Credits</b>
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   
                   
				   		 <li>
                        <a  href="attendance.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Attendance</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                    </li>
			
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            
            <!-- /.row -->
	</br>
   <div class="row-blue">
   &nbsp;
   <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                     
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs --><strong>
                            <ul class="nav nav-pills" style="font-size:11px;">
                                <li class="active"><a href="#home" data-toggle="tab">Personal Information</a>
                                </li>
                                <li><a href="#profile" data-toggle="tab">Family Background</a>
                                </li>
                                <li><a href="#messages" data-toggle="tab">Educational Background</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">Civil Service</a>
                                </li>
								<li><a href="#settings" data-toggle="tab">Wprk Experience</a>
                                </li>
								<li><a href="#settings" data-toggle="tab">Voluntary Work</a>
                                </li>
								<li><a href="#settings" data-toggle="tab">Training Programs</a>
                                </li>
								<li><a href="#settings" data-toggle="tab">Other Information</a>
                                </li>
								
                            </ul></strong>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="home">
                                  
                                        <div class="panel-body">
          
	<?php	   		
include('db_con.php'); 
	$employee_id=$_GET['id'];
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
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id=".$employee_id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
		
	
	
	?>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" value="<?php echo $show['firstname']; ?>" Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
													<input type="text" name="firstname" class="form-control input-sm" value="<?php echo  $show['sex']; ?>" Disabled>

											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<input type="text" name="residential_address" class="form-control input-sm"  value="<?php echo  $show['residential_address']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<input type="text" name="permanent_address" class="form-control input-sm"  value="<?php echo  $show['permanent_address']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
											  	<input type="text" name="permanent_address" class="form-control input-sm"  value="<?php echo  $show['civil_status']; ?>"Disabled>
											
												 
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" name="height" class="form-control input-sm" value="<?php echo  $show['height']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" value="<?php echo  $show['position']; ?>" Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm"  value="<?php echo  $show['gsis_id_no']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm"  value="<?php echo  $show['philhealth_no']; ?>"Disabled>
											</div>
									
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show['middlename']; ?>"Disabled>
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="text" name="date_of_birth" class="form-control input-sm"  value="<?php echo  $show['date_of_birth']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm"  value="<?php echo  $show['ra_zip_code']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm"  value="<?php echo  $show['pa_zip_code']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm"  value="<?php echo  $show['citizenship']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" value="<?php echo  $show['weight']; ?>" Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm"  value="<?php echo  $show['department']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm"  value="<?php echo  $show['agency_employee_no']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm"  value="<?php echo  $show['cis_no']; ?>"Disabled>
											</div>
											
													<?php		
													$query=("SELECT employee_id FROM personal_information ORDER BY employee_id DESC LIMIT 1");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{
											
											?>
												<input type="hidden" name="employee_id" value="<?php echo $rowp['employee_id']; ?>"  style="display:none;" Disabled>
											<?php }?>
									</DIV>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm"  value="<?php echo  $show['surname']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm"  value="<?php echo  $show['place_birth']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm"  value="<?php echo  $show['ra_telephone_no']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm"  value="<?php echo  $show['pa_telephone_no']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm"  value="<?php echo  $show['email_address']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" value="<?php echo  $show['bloodtype']; ?>" Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm"  value="<?php echo  $show['cellphone_no']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm"  value="<?php echo  $show['tin']; ?>"Disabled>
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm"  value="<?php echo  $show['sss_no']; ?>"Disabled>
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm"  value="<?php echo  $show['pag_ibig_id_no']; ?>"Disabled>
											</div>	
									
											
											
									</div>
									
				
				  
			</div>  
			</div>
                                <div class="tab-pane fade" id="profile">
                                     <div class="panel-body">
          
	<?php	   		
include('db_con.php'); 
	$employee_id=$_GET['id'];
		$emp=(" 
	select		personal_information.employee_id,
				parents.employee_id,
				parents.father_firstname,
				parents.father_middlename,
				parents.father_surname,
				parents.mother_firstname,
				parents.mother_middlename,
				parents.mother_surname
			
FROM personal_information
INNER JOIN parents
ON personal_information.employee_id=parents.employee_id where personal_information.employee_id=".$employee_id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
		
	
	
	?>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Father's Name</span>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
													<input type="text" name="firstname" class="form-control input-sm" value="<?php echo  $show['father_firstname']; ?>" Disabled>

											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="residential_address" class="form-control input-sm"  value="<?php echo  $show['father_middlename']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="permanent_address" class="form-control input-sm"  value="<?php echo  $show['father_surname']; ?>"Disabled>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Mother's Maiden Name</span>
				
												 
											</div>	
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Firstname</span>
											  	<input type="text" name="permanent_address" class="form-control input-sm"  value="<?php echo  $show['mother_firstname']; ?>"Disabled>
											
												 
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="height" class="form-control input-sm" value="<?php echo  $show['mother_middlename']; ?>"Disabled>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="position" class="form-control input-sm" value="<?php echo  $show['mother_surname']; ?>" Disabled>
											</div>
									
									
									</div>

									<div class="col-lg-8">
									
											<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Child name</span>
											</DIV>
											
											

									</DIV>
									<div class="col-lg-6">

													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Child Birth Date</span>
										</DIV>

									</DIV>
									
		<?php	   		
include('db_con.php'); 
	$employee_id=$_GET['id'];
		$emp=(" 
	select		personal_information.employee_id,
				child.employee_id,
				child.name,
				child.birthdate
			
			
FROM personal_information
INNER JOIN child
ON personal_information.employee_id=child.employee_id where personal_information.employee_id=".$employee_id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show2 = $fetch_res->fetch_array(MYSQLI_ASSOC))
		{
		
	
	
	?>
									<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Name:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show2['name']; ?>"Disabled>
											</DIV>
											
											

									</DIV>
									<div class="col-lg-6">

													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Birth Date:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show2['birthdate']; ?>"Disabled>
											</DIV>

									</DIV>
													
							<?php } ?>	
									</DIV>
						
									<div class="col-lg-8">
									
											<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Spouse Name</span>
											</DIV>
											
											

									</DIV>
									<div class="col-lg-6">

													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Spouse employment Infomation</span>
										</DIV>

									</DIV>
								<?php	   		
include('db_con.php'); 
	$employee_id=$_GET['id'];
		$emp3=(" 
	select		personal_information.employee_id,
				spouse.employee_id,
				spouse.spouse_firstname,
				spouse.spouse_middlename,
				spouse.spouse_surname,
				spouse.occupation,
				spouse.employer_bus_name,
				spouse.business_address,
				spouse.telephone_no
			
			
FROM personal_information
INNER JOIN spouse
ON personal_information.employee_id=spouse.employee_id where personal_information.employee_id=".$employee_id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp3);
		
		while($show3 = $fetch_res->fetch_array(MYSQLI_ASSOC))
		{
		
	
	
	?>
									<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Firstname:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['spouse_firstname']; ?>"Disabled>
											</DIV>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['spouse_middlename']; ?>"Disabled>
											</DIV>
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Surname:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['spouse_surname']; ?>"Disabled>
											</DIV>
											

									</DIV>
									<div class="col-lg-6">

													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Occupation:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['occupation']; ?>"Disabled>
											</DIV>
														<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employer Business Name:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['employer_bus_name']; ?>"Disabled>
											</DIV>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Business Address:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['business_address']; ?>"Disabled>
											</DIV>
											
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show3['telephone_no']; ?>"Disabled>
											</DIV>


									</DIV>
													
							<?php } ?>	
						
				
				  
			</div>
                      
			</div>
                                <div class="tab-pane fade" id="messages">
                                    <h4>Messages Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div class="tab-pane fade" id="settings">
                                    <h4>Settings Tab</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
                <!-- /.col-lg-6 -->
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

</body>

</html>
