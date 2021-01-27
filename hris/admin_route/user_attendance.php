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
			
				
										<li>
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
							       <li  class="active">
                           
							  <a href="user_attendance.php?id=<?php echo $id; ?>" class="active_nav">
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
            <!-- /.row -->
	

  <div class="row-blue">
 <div class="row">

 <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
                          <b style="color:#fff;">Attendance Table</b>
                        </div>
                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>PICTURE</th>
                                            <th>NAME</th>
                                            <th>DATE</th>
                                            <th>AM IN</th>
                                            <th>AM OUT</th>
                                            <th>PM IN</th>
                                            <th>PM OUT</th>
                                            <th>LATE</br> (MIN)</th>
                                            <th>UNDERTIME</br> (MIN)</th>
                                       
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									$id=$_SESSION['employee_id'];
		$emp=("

			SELECT
			personal_information.firstname,personal_information.middlename,personal_information.surname,
			personal_information.image,personal_information.employee_id,attendance.employee_id,attendance.date,
			attendance.am_in,attendance.am_out,attendance.pm_in,attendance.pm_out,attendance.late,attendance.undertime
				FROM personal_information
				JOIN attendance
				ON personal_information.employee_id=attendance.employee_id where attendance.employee_id=".$id.";") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX">
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
											</td><td><?php  echo $show['firstname']." ".$show['surname'];  ?></td>
                                            <td>
											<?php	
											$date=$show['date'];
											$t=substr($date,0,2);
											$r=substr($date,2,9);
											
											if($t=="01")
											{
											echo "January" .$r;
											}
											else if($t=="02")
											{
											echo "Febraury" .$r;
											}
											else if($t=="03")
											{
											echo "March" .$r;
											}
											else if($t=="04")
											{
											echo "April" .$r;
											}
											else if($t=="05")
											{
											echo "May" .$r;
											}
											else if($t=="06")
											{
											echo "June" .$r;
											}
											else if($t=="07")
											{
											echo "July" .$r;
											}
												else if($t=="08")
											{
											echo "August" .$r;
											}
												else if($t=="09")
											{
											echo "September" .$r;
											}
												else if($t=="10")
											{
											echo "October" .$r;
											}
												else if($t=="11")
											{
											echo "November" .$r;
											}
												else if($t=="12")
											{
											echo "December" .$r;
											}
											else 
											{echo "";}
											?>
											</td>
                                            <td><?php	echo $show['am_in'];  ?></td>
                                            <td><?php	echo $show['am_out'];  ?></td>
                                            <td><?php	echo $show['pm_in']; ?></td>
                                            <td><?php	echo $show['pm_out'];  ?></td>
                                            <td><?php	echo $show['late'];  ?></td>
                                            <td>
											<?php echo	$show['undertime'];
											  ?>
											</td>
                                   
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
					
						   
					
								<form action="attendance_report.php" method="post">
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
									<div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Month:</span>
     
                
		<select name="month" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="01">January</option>
                <option value="02">Febraury</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
			</select>
		 
                  </div>
				  </br>
				   <div class="input-group">
                    <span class="input-group-addon input-sm" >Year:</span>
     
                
		<select name="year" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
        
			</select>
		 
                  </div>
				  
				  
                                       </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
								</form>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
												<select name="sex" class="form-control input-sm">
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<input type="text" name="residential_address" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<input type="text" name="permanent_address" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal"  >
															<option value=""></option>
															<option value="Male">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
															<option value="Others">Others, specify</option>
														</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" name="height" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm" />
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success">
											</div>
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" />
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm" />
											</div>
											
													<?php		
													$query=("SELECT employee_id FROM personal_information ORDER BY employee_id DESC LIMIT 1");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{
											
											?>
												<input type="hidden" name="employee_id" value="<?php echo $rowp['employee_id']; ?>"  style="display:none;" />
											<?php }?>
									</DIV>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm" />
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm" />
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm" />
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
