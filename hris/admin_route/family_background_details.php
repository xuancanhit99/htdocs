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
						
                                <a href="personal_information.php?id=<?php echo $id; ?>"class="not_active">Personal Information 
								</a>
							
                            </li>
							
							
							
                            <li>
                                <a href="family_background_details.php?id=<?php echo $id; ?>" class="active_nav">
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
     </br>
			     <div class="row">
           
                <!-- /.col-lg-12 -->
            </div>
			<div class="row-blue">
			<b style="color:#fff; font-size:25px;"> <center>Family Background Information</center></b>
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default" >
					
              
										
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Parent Information </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Father Name </th>
                                            <th>Mother Name</th>
                                        
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
											$id=$_GET['id'];
									
											$emp=(" select * from parents where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
									
                                            <td><?php echo  $show['father_firstname']." ".$show['father_middlename']." ".$show['father_surname']; ?></td>
                                            <td><?php echo  $show['mother_firstname']." ".$show['mother_middlename']." ".$show['mother_surname']; ?></td>
                                       
                                        </tr>
										
										<div class="modal fade" id="<?php echo $show['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Parent's Information</h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="edit_bd.php" method="post">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Father Firstname:</span>
												<input type="text" name="father_firstname" class="form-control input-sm" value="<?php echo $show['father_firstname']; ?>" required/>
									
											
											</div>
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Middlename:</span>
												<input type="text" name="father_middlename" class="form-control input-sm"  value="<?php echo $show['father_middlename']; ?>"required/>
												<input type="hidden" name="parents_id" class="form-control input-sm"  value="<?php echo $show['parents_id']; ?>"required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Surname:</span>
												<input type="text" name="father_surname" class="form-control input-sm" value="<?php echo $show['father_surname']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Mother Maiden Name</span>
										
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Mother Firstname:</span>
												<input type="text" name="mother_firstname" class="form-control input-sm" value="<?php echo $show['mother_firstname']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Middlename:</span>
												<input type="text" name="mother_middlename" class="form-control input-sm" value="<?php echo $show['mother_middlename']; ?>" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Surname:</span>
												<input type="text" name="mother_surname" class="form-control input-sm"  value="<?php echo $show['mother_surname']; ?>"required/>
											</div>
											
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Save</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->

<div class="modal fade" id="del<?php echo $show['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				
        
             
		
	<form	action="add_parents.php" method="post">
							
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
																	
									<center><strong>Are you sure you want to delete this data?	</strong></center>
								
      </div>

    </div><!-- /.modal-content -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger ">Delete</button>
			</form>
      </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
                                      	  <?php }; ?>
                                    </tbody>
                                </table>
               			  
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b>Spouse Information </b></a>
                                        </h4>
                                    </div>
									
                                    <div id="collapseTwo" class="panel-collapse collapse ">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Occupation</th>
                                            <th>Employeer's Business</th>
                                            <th>Business Address</th>
                                            <th>Telephone</th>
                                   
                                         
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										$id=$_GET['id'];
							
											$emp=(" select * from spouse where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['spouse_firstname']." ".$show['spouse_middlename']." ".$show['spouse_surname']; ?></td>
                                            <td><?php echo $show['occupation']; ?></td>
                                            <td><?php echo $show['employer_bus_name']; ?></td>
                                            <td><?php echo $show['business_address']; ?></td>
                                            <td><?php echo $show['telephone_no']; ?></td>
                                                 
                                            <td>	
											
												</td>
                                     
                                        </tr>
										
										<!-- /.modal -->


	<!-- /.modal -->
                                      <?php }; ?>
                                    </tbody>
                                </table>
               			  
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color:#fff"><b> Child Information</b> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Birthdate</th>

                                          
                                        </tr>
                                    </thead>
                                     <tbody>
										<?php	$id=$_GET['id'];
											$emp=(" select * from child where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['name']; ?></td>
                                            <td><?php echo $show['birthdate']; ?></td>
                                        
                                      <td>
                            
											
										
											
												</td>
                                        </tr>
										
									
										

										
                                      <?php }; ?>
                                    </tbody>	
                                </table>

                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								 
								
								
								  
                              
                               
								
								
								
								
								
								
                            </div>
                        </div>
                        <!-- .panel-body -->

                    </div>
					
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			   
            <!-- /.row -->

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
      
            <!-- /.row -->

            <!-- /.row -->
			
            </div>
			
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->
	


<div class="modal fade" id="parent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Parent's Information</h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
 <form action="add_parents.php" method="POST">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Father Firstname::</span>
												<input type="text" name="father_firstname" class="form-control input-sm" required/>
									
											
											</div>
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Middlename:</span>
												<input type="text" name="father_middlename" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Surname:</span>
												<input type="text" name="father_surname" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Mother's Maiden Name</span>
										
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Mother Firstname:</span>
												<input type="text" name="mother_firstname" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Middlename:</span>
												<input type="text" name="mother_middlename" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Surname:</span>
												<input type="text" name="mother_surname" class="form-control input-sm" required/>
											</div>
											
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Save</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->



<div class="modal fade" id="spouse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Spouse's Information</h4>
      </div>
	  <form action="add_spouse.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		

									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname::</span>
												<input type="text" name="spouse_firstname" class="form-control input-sm" required />
												<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
										</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="spouse_middlename" class="form-control input-sm"required />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="spouse_surname" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Occupation:</span>
												<input type="text" name="occupation" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employe/Bus. Name:</span>
												<input type="text" name="employer_bus_name" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Business Address:</span>
												<input type="text" name="business_address" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:
:</span>
												<input type="tel" name="telephone_no" class="form-control input-sm"required/>
											</div>
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
	</form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->



<div class="modal fade" id="child" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Child Information</h4>
      </div>
	  <form action="add_child.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		

									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="name" class="form-control input-sm" />
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Birthdate:</span>
												<input type="date" name="birthdate" class="form-control input-sm" />
											</div>
											
              
        
										
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
	</form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
