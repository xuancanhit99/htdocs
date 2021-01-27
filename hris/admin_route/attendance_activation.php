<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('attendance_session.php');  
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
<strong>
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
           
                   
                   
			
                 
				
                   
              	   		 <li>
                        <a  href="admin_attendance.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>Attendance
			 </a>
                
                        <!-- /.nav-second-level -->
                    </li> 
					 <li>
                        <a  href="attendance.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>Login Activation
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right fa-1x fa-lg"></i> </a>
                
                        <!-- /.nav-second-level -->
                    </li> 
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</strong>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
          
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	

  <div class="row-blue">
         <b style="color:#fff; font-size:25px;"> <center>Attendance Table</center></b>
                       
 <div class="row">

 <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
             </div>
                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>USERNAME</th>
                               
                                            <th>ACTION</th>
                                       
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
		$emp=("

			SELECT * from personal_information where position='attendance' ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX">
                                 
											<td><?php  echo $show['firstname']." ".$show['surname'];  ?></td>
                                            
                                            <td>    <button class="btn btn-outline btn-warning btn-sm"data-toggle="modal" data-target="#myModal">
                               EDIT
                            </button></td>
                  
                                 
                                   
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
					
					
					
								<form action="attendance_account_edit.php" method="post">
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Attendance Account Activation</h4>
                                        </div>
									<?php	
		$emp=("

			SELECT
			personal_information.firstname,personal_information.middlename,personal_information.surname,
			personal_information.image,personal_information.employee_id,user.username,user.password
				FROM  user
				JOIN personal_information
				ON user.employee_id=personal_information.employee_id  where personal_information.position='attendance' ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>                                 <div class="modal-body">
									<div class="form-group">
                  <div class="input-group">
		<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="firstname" class="form-control input-sm" value="<?php echo $show['username']; ?>">
											</div>
		 
                  </div>
				  </br>
				   <div class="input-group">
		<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Password:</span>
												<input type="password" name="firstname" class="form-control input-sm"  value="<?php echo $show['username']; ?>">
											</div>
		 
                  </div>
				  
				  
                                       </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
									
									<?php } ?>
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
        <h4 class="modal-title" id="myModalLabel"></h4>
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
