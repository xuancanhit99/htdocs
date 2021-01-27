<!DOCTYPE html>
<?php include('db_con.php'); ?>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VNHS|HRIS</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">VNHS|HRIS</a>
            </div>
            <!-- /.navbar-header -->

           <?php include('nav.php'); ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-table fa-fw"></i> Table</a>
                    </li>
                    <li  class="active">
                        <a href="#"><i class="fa fa-plus fa-fw"></i> Add Employee<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">I.Personal Information</a>
                            </li>
                            <li>
                                <a href="morris.html">II.Family Background</a>
                            </li>
							       <li>
                                <a href="morris.html">III.Educational Background</a>
                            </li>
							       <li>
                                <a href="morris.html">IV.Civil Service</a>
                            </li>
							       <li>
                                <a href="morris.html">V.Work Experience</a>
                            </li>
							       <li>
                                <a href="morris.html">VI.Voluntary Work</a>
                            </li>
							       <li>
                                <a href="morris.html">VII.Training Programs</a>
                            </li>
							       <li>
                                <a href="morris.html">VIII.Other Information</a>
                            </li>
							
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                 
                   
                   
                  
                   
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">I.Personal Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	
            <div class="row">
                <div class="col-lg-12">
				  <form action="add_personal_info.php" method="post" enctype="multipart/form-data">
                   <div class="row">
				       <div class="panel panel-success">
					   
              <div class="panel-heading">
                <h3 class="panel-title">&nbsp;</h3>
              </div>
              <div class="panel-body">
           <form method="post">
	<?php	   		

	$employee_id=$_POST['employee_id'];
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
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id='$employee_id' ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
		
	
		
	?>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" value="<?php echo $show['firstname']; ?>" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
												<select name="sex" class="form-control input-sm">
												<option value="<?php echo  $show['sex']; ?>"></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<input type="text" name="residential_address" class="form-control input-sm"  value="<?php echo  $show['residential_address']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<input type="text" name="permanent_address" class="form-control input-sm"  value="<?php echo  $show['permanent_address']; ?>"/>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal"  >
															<option  value="<?php echo  $show['civil_status']; ?>"></option>
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
												<input type="text" name="height" class="form-control input-sm" value="<?php echo  $show['height']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" value="<?php echo  $show['position']; ?>" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm"  value="<?php echo  $show['gsis_id_no']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm"  value="<?php echo  $show['philhealth_no']; ?>"/>
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success"  value="<?php echo  $show['image']; ?>">
											</div>
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm"  value="<?php echo  $show['middlename']; ?>"/>
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth" class="form-control input-sm"  value="<?php echo  $show['date_of_birth']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm"  value="<?php echo  $show['ra_zip_code']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm"  value="<?php echo  $show['pa_zip_code']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm"  value="<?php echo  $show['citizenship']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" value="<?php echo  $show['weight']; ?>" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm"  value="<?php echo  $show['department']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm"  value="<?php echo  $show['agency_employee_no']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm"  value="<?php echo  $show['cis_no']; ?>"/>
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
												<input type="text" name="surname" class="form-control input-sm"  value="<?php echo  $show['surname']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm"  value="<?php echo  $show['place_birth']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm"  value="<?php echo  $show['ra_telephone_no']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm"  value="<?php echo  $show['pa_telephone_no']; ?>"/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm"  value="<?php echo  $show['email_address']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" value="<?php echo  $show['bloodtype']; ?>" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm"  value="<?php echo  $show['cellphone_no']; ?>"/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm"  value="<?php echo  $show['tin']; ?>"/>
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm"  value="<?php echo  $show['sss_no']; ?>"/>
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm"  value="<?php echo  $show['pag_ibig_id_no']; ?>"/>
											</div>	
									
											
											
									</div>
									
				</form>
				  
			</div>
			    <div class="panel-footer">
									<div class="form-group">
                    <div class="col-lg-1 pull-right">
                      <button type="submit" name="submit" class="btn btn-success btn-sm">&nbsp;Save&nbsp;</button> 
                    </div>
                  </div>
                          &nbsp;
                        </div>
			
			</div>
			
			

              </div>
              </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
				
				</form>
            </div>
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
