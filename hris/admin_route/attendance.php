<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
		
<strong>
         <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
               
			     <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <?php	$id=$_SESSION['user_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
											
											
											
										?>
							<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px" >
							<center><?php echo $show['firstname']." ".$show['surname']; ?></center>
                            </li>
                     <li>
					
                        <a href="personal_info.php" class="NOT_active">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						<b>Employee</b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </a>
           

                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li>
                        <a href="service_credits.php" class="NOT_active"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-table fa-fw fa-lg"></i> </button><b>Service Credits</b>
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   
				   
                   
				 	 <li>
                        <a  href="attendance.php" class="active_nav"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Attendance</b>
						 </a>
                
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
		$emp=("

			SELECT
			personal_information.firstname,personal_information.middlename,personal_information.surname,
			personal_information.image,personal_information.employee_id,attendance.employee_id,attendance.date,
			attendance.am_in,attendance.am_out,attendance.pm_in,attendance.pm_out,attendance.late,attendance.undertime,
			attendance.month,attendance.date,attendance.year
				FROM personal_information
				right JOIN attendance
				ON personal_information.employee_id=attendance.employee_id order by personal_information.firstname ASC ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array())
		
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
											</td>
											<td><?php  echo $show['firstname']." ".$show['surname'];  ?></td>
                                            <td>
											<?php	
											 	if($show['month']=='Jan' || $show['month']=='Jan ')
										{echo "January ";}
										else
										if ($show['month']=='Feb' || $show['month']=='Feb ' )
										{echo "Febraury ";}
										else
										if ($show['month']=='Mar' || $show['month']=='Mar ')
										{echo "March ";}
										else
										if ($show['month']=='Apr' || $show['month']=='Apr ')
										{echo "April ";}
										else
										if ($show['month']=='May' || $show['month']=='May ')
										{echo "May ";}
										else
										if ($show['month']=='Jun' ||  $show['month']=='Jun ')
										{echo "June ";}
										else
										if ($show['month']=='Jul' || $show['month']=='Jul ')
										{echo "July ";}
										else
										if ($show['month']=='Aug' || $show['month']=='Aug ')
										{echo "August ";}
										else
										if ($show['month']=='Sep'||$show['month']=='Sep ')
										{echo "September ";}
										else
										if ($show['month']=='Oct'|| $show['month']=='Oct')
										{echo "October ";}
										else
										if ($show['month']=='Nov'||$show['month']=='Nov ')
										{echo "November ";}
											else
											if ($show['month']=='Dec'||$show['month']=='Dec ')
										{echo "December ";}
										else {echo "";} 
											  
											echo  $show['date'].",".$show['year'];
											
											?>
											</td>
                                            <td><?php	echo $show['am_in'];  ?></td>
                                            <td><?php	echo $show['am_out'];  ?></td>
                                            <td><?php	echo $show['pm_in']; ?></td>
                                            <td><?php	echo $show['pm_out'];  ?></td>
                                            <td><?php	echo $show['late'];  ?></td>
                                            <td>
											<?php	echo $show['undertime'];
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
			
						    <button class="btn btn-outline btn-info btn-lg pull-right"data-toggle="modal" data-target="#myModal">
                               Print Report
                            </button>
						
					
								<form action="attendance_report.php" method="post">
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>SELECT MONTHLY REPORT</center></h4>
                                        </div>
                                        <div class="modal-body">
									<div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Month:</span>
     
                
		<select name="month" class="form-control input-sm" id="animal"  />
                <option value=""><- Select Months - ></option>
                <option value="Jan">January</option>
                <option value="Feb">Febraury</option>
                <option value="Mar">March</option>
                <option value="Apr">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="Aug">August</option>
                <option value="Sep">September</option>
                <option value="Oct">October</option>
                <option value="Nov">November</option>
                <option value="Dec">December</option>
			</select>
		 
                  </div>
				  </br>
				   <div class="input-group">
                    <span class="input-group-addon input-sm" >Year:</span>
     
                    
		<select name="year" class="form-control input-sm" id="animal"  />
              <center> <option value=""><- Select Years - ></option></center>
				
		<?php		$emp=("SELECT distinct(year) as year from attendance order by year desc ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
	while($showtd = $fetch_res->fetch_array())
	{


	?>
	
	<option value="<?php echo $showtd['year'];  ?>"><?php echo $showtd['year'];  ?></option>
	
        <?php } ?>
			</select>
		 
                  </div>
				  
				  
                                       </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="submit" class="btn btn-primary">Preview</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
								</form>
                            <!-- /.modal -->
					</div></br></br></br>
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
