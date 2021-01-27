<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Victorias National High School Human Resource Integrated System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" media="screen">

<link rel="stylesheet" href="date-picker/css/datepicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="date-picker/css/layout.css" />
	<link rel="stylesheet" href="font-awesome-4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootswatch.min.css">
	        <link rel="stylesheet" type="text/css" href="css/DT_Bootstrap3.css">
	        <link rel="stylesheet" type="text/css" href="css/bootstrap-dataTables.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="style">
    <script src="bsa.js"></script>
	<script type="text/javascript" src="date-picker/js/jquery.js"></script>
	<script type="text/javascript" src="date-picker/js/datepicker.js"></script>
    <script type="text/javascript" src="date-picker/js/eye.js"></script>
    <script type="text/javascript" src="date-picker/js/utils.js"></script>
    <script type="text/javascript" src="date-picker/js/layout.js?ver=1.0.2"></script>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand">VNHS|HRMS</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
         
<!--		 <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="fa fa-user fa-2x"></i>Themes <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="themes">
                <li><a tabindex="-1" href="../default/">Default</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="../amelia/">Amelia</a></li>
                <li><a tabindex="-1" href="../cerulean/">Cerulean</a></li>
                <li><a tabindex="-1" href="../cosmo/">Cosmo</a></li>
                <li><a tabindex="-1" href="../cyborg/">Cyborg</a></li>
                <li><a tabindex="-1" href="../flatly/">Flatly</a></li>
                <li><a tabindex="-1" href="../journal/">Journal</a></li>
                <li><a tabindex="-1" href="../readable/">Readable</a></li>
                <li><a tabindex="-1" href="../simplex/">Simplex</a></li>
                <li><a tabindex="-1" href="../slate/">Slate</a></li>
                <li><a tabindex="-1" href="../spacelab/">Spacelab</a></li>
                <li><a tabindex="-1" href="../united/">United</a></li>
              </ul>
            </li>
			-->	
			
            <li >
              <a href="#" >&nbsp;<b>EMPLOYEE INFORMATION	</b></a>
            </li>
		
			<li>
              <a href="credits.php" >&nbsp;<b>CREDITS	</b></a>
            </li>
			
            <li class="active">
              <a href="attendance.php"> <b>ATTENDANCE</b></a>
            </li>
			
			
            
          </ul>

          <ul class="nav navbar-nav navbar-right">


	
	 <li>
	 <div class="col-lg-2" style="color:white;font-size:25px;line-height:55px; "> Welcome  </div> 
	  </li>
	  <li>
	 <div class="col-lg-2" style="color:white; font-size:25px; line-height:55px;"> Frank&nbsp;Ramirez </div> 
	 </li>
	

            <li>     <a href="Salary.php" ><i class="fa fa-sign-out fa-1x"></i>&nbsp;<b>LOGOUT</b>	</a></li>
          </ul>

         </div>
      </div>
    </div>



    <div class="container">

    

      <!-- Navbar
      ================================================== -->
      

      <!-- Tables
      ================================================== -->
      <div class="bs-docs-section">

        <div class="row" style="background-color:white; padding:25px; border-radius:1px; margin-top:-100px; min-height:1000px;">
          <div class="col-lg-8">
         

            <div class="bs-example table-responsive">
             
                     
	 <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">ATTENDANCE LIST</h3>
              </div>
              <div class="panel-body">
  
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" style="font-size:13px;">
                   
                                    
                            <thead>
                                <tr>
                                 
                                    <th><b>NAME</b></th>
                                    <th><b>DATE</b></th>
                                    <th><b>AM IN</b></th>
                                    <th><b>AM OUT</b></th>
                                    <th><b>PM IN</b></th>
                                    <th><b>PM OUT</b></th>
                                    <th><b>LATE (MIN)</b></th>
                                    <th><b>UNDERTIME (MIN)</b></th>
                        
                                 
                                </tr>
                            </thead>
                            <tbody>
							
                              	<?php	
		
		include('db_con.php');
		
		
		$emp=(" select * from self_crdits  ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['attendance_id'];
		
	?>
							  
							  
                                    <tr>
                         
	 <td><b>
	 <?php 

	 echo  $show['name']


	 ?></b></td>
	 <td><b><?php  echo $show['date'];  ?></td>
	 <td><b><?php 
	 

		$name=$show['am_in'];
	 $name1=substr($name,1,5);
	 $name2=substr($name,0,5);
		if (substr($name,0,1)=="0" && strlen($name)>"1")
		{
		echo $name1;
		}	
		else{ echo $name2;}	
	
	 ?></b></td>
	 <td><b><?php  echo $show['am_out'];  ?></b></td>
	 <td><b><?php  echo $show['pm_in'];  ?></b></td>
	 <td><b><?php  echo $show['pm_out'];  ?></b></td>
	 <td><b><?php  echo $show['late'];  ?></b></td>
	 <td><b><?php  echo $show['undertime'];  ?></b></td>
</b>
 </td>
				
										
                                      
                                       
                                    </tr>
									
<div class="modal fade" id="del<?php echo $show['attendance_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="POST"  action="delete_attendance.php">   
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to Delete this record?</center></h4>
   
				
				<input type="hidden" name="attendance_id" value="<?php echo $show['attendance_id']; ?>">
		</br>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

  
          <button type="submit" name="delete" class="btn btn-danger">Delete</button>
	  		  
				  </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	</form>
  </div><!-- /.modal -->

			
						<?php	} ?>	
                      
                         
						 
                            </tbody>
                        </table>
		
  <b class="pull-right" ><a data-toggle="modal" href="#print" class="btn btn-info btn-sm">&nbsp;PRINT </a></b>



  
						</div>
						</div>
						
						
            </div><!-- /example -->
          </div>
		  <div class="col-lg-4">
		    <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">ADD ATTENDANCE</h3>
              </div>
              <div class="panel-body">
       
							
							<form method="POST" action="add_attendance.php">
	 
		     <h4 class="modal-title"><center>
		<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Name:</span>
     
                
		<select name="name" class="form-control input-sm" id="animal"  />
                <option value=""></option>
				
	 	<?php	
		include('db_con.php');
		
		
		
		
		$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
	 	
                <option value="<?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?>">
				<?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?>
				</option>
 
<?php } ?>         

		 </select>
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>
			 
			 <div class="txthint">
			 <div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >DATE:</span>
     
                	<input name="inputDate" class="inputDate" id="inputDate" type="text" value="<?php echo date("m-d-Y") ?>" style=" border-radius:3px; width:257px; border:solid #dce4ec 2px; margin-left:-7px; height:33px;"> </br>
					
	
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>
			 
			 <div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >AM IN:</span>
     
                
		<input type="text" name="am_in" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>

			 <div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >AM OUT:</span>
     
                
		<input type="text" name="am_out" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>

			 <div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >PM IN:</span>
     
                
		<input type="text" name="pm_in" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>

			 <div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >PM OUT:</span>
     
                
		<input type="text" name="pm_out" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>
             
			 </div>

			
			 </center></h4>
  
		
				
		</br>
        </div>
        <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-success">Save</button>

         	
		  		          </div>
		 </form>	
		        </div>
            </div>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		   <footer>
        <div class="row">
          <div class="col-lg-12">
            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="#top" class="pull-right">Victorias National High School Human Resource Integrated System</a></li>
        
          </div>
        </div>
        
      </footer>
        </div>
        </div>
      </div>


 
  
  </div><!-- /.modal -->
      <!-- Forms================================================== -->
     
	
  
  
  
  
  
  
      <!-- Forms

      <!-- Navs
      ================================================== -->
     
      <!-- Indicators
      ================================================== -->
      

      <!-- Progress bars
      ================================================== -->
      

      <!-- Containers
      ================================================== -->
     


     
    

    </div>

<div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="POST"  action="attendance_report.php">   
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  	<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Name:</span>
     
                
		<select name="name" class="form-control input-sm" id="animal"  onchange="showUser(this.value)"/>
                <option value=""></option>
				
	 	<?php	
		include('db_con.php');
		
		$emp=(" SELECT distinct(name) from attendance") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
	 	
                <option value="<?php  echo $show['name'];  ?>">
				<?php  echo $show['name'];  ?>
				</option>
 
<?php } ?>         

		 </select>
		 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				  	<div class="txtHint">
				  	<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
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
				
	
	 	
                <option value="">
			
				</option>
 
     

		 </select>
		 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
			<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Year:</span>
     
                
		<select name="year" class="form-control input-sm" id="animal"  />
                <option value=""></option>
				
	
	 	
                <option value="2013"></option>
                <option value="2014"></option>
 
     

		 </select>
		 
                  </div>
                </div>
			     </div>
                </div>
                </div>
                </div>
             
	
		

		     <h4 class="modal-title"><center>
			 
			 </center></h4>
   
				
				<input type="hidden" name="attendance_id" value="<?php echo $show['attendance_id']; ?>">
		</br>
        </div>

        <div class="modal-footer">
      

  
          <button type="submit" name="preview" class="btn btn-info">Print Preview</button>
	  		  
				  </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	</form>
  </div><!-- /.modal -->

  <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootswatch.js"></script>
	
	<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/bootstrap-dataTables-paging.js"></script>

	
	
  </body>
</html>