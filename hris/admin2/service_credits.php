<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
	<link href="css/dashboard.css" rel="stylesheet"> <!-- Custom styles for this template -->
    <link href="css/bootstrap-markdown.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">VNHS|HRIS</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li ><a href="admin_page">Employee</a></li>
            <li class="active"><a href="#">Service Credits</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a>Welcome Admin</a></li>
            <li><a href="#"> &nbsp; &nbsp;Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
  
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" >
          <ul class="nav nav-sidebar">
		  
		  
		
			
				<li class="active">
			<a href="admin_page.php">
			<strong>Table</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong class="raq">&raquo;
			</strong></a>
			</li>
			
            <li>
			<a href="add_attendance_page.php">
			<strong>ADD attendance</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
				
			
			
			

          </ul>
         
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
  </h1>

          <div class="row">
          <div class="col-lg-8">
          <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><center><b>CREDITS</b></center></h3>
              </div>
              <div class="panel-body">
             
  
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                         
                                    
                            <thead>
                                <tr>
                                 
                                    <th>NAME</th>
                                    <th>BALANCE</th>
                                    <th>ACTION</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
							
                              	<?php	
		
		include('db_con.php');
		
		
		// $emp=(" select * from service_crediats ") or die(mysql_error());
		$emp=(" SELECT personal_information.firstname,personal_information.middlename,personal_information.surname,service_credits.service_credits_id,service_credits.leave_type,service_credits.Balance
					FROM service_credits INNER JOIN personal_information
			ON service_credits.employee_id=personal_information.employee_id;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
							  
							  
                                    <tr>
                         
	 <td><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></td>
	 <td><?php  echo $show['Balance'];  ?></td>
	 <td> &nbsp; <a data-toggle="modal" href="#add_credits<?php echo $show['service_credits_id']; ?>" class="btn btn-danger btn-sm"> &nbsp;<i  class="fa fa-plus fa-1x"></i>&nbsp;ADD </a>
	  &nbsp; <a data-toggle="modal" href="#leave_credits<?php echo $show['service_credits_id']; ?>" class="btn btn-danger btn-sm"> &nbsp;<i  class="fa fa-minus fa-1x"></i>&nbsp;LEAVE </a>

 </td>
				
										
                                      
                                       
                                    </tr>
									


	
  
  
  
  <div class="modal fade" id="add_credits<?php echo $show['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		<form method="POST" action=".php">
	 
		     <h4 class="modal-title"><center>
		ADD SERVICE CREDITS
			 <div class="row">
			
                </div>
				
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Number of Days:</span>
     
		<input type="text" name="days" class="form-control input-sm" value=""  >
		<input type="hidden" name="old_days" class="form-control input-sm" value="<?php echo $show['Balance']; ?>"  >
		<input type="hidden" name="id" class="form-control input-sm" value="<?php echo $show['service_credits_id']; ?>"  >
                     
                
 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
        </div>
        <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-primary">Save</button>
		  		          </div>
		 </form>	
 

		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->
  
  
  
  
  		<div class="modal fade" id="leave_credits<?php echo $show['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		<form method="POST" action="dec_service_credits.php">
	 
		     <h4 class="modal-title"><center>
		LEAVE
			 <div class="row">
			
                </div>
				
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Type of Leave:</span>
     
		
		<select name="leave_type" class="form-control input-sm" id="animal"  />
		  <OPTION value=""></OPTION>
		  <OPTION value="Vacation">Vacation</OPTION>
		  <OPTION value="Sick">Sick</OPTION>
		  </select>
		  </span>
		   </div>
</br>
		     <div class="input-group">
                    <span class="input-group-addon input-sm">Number of Days::</span>
          <input type="text" class="form-control input-sm" name="Availed" id="name"   />
                   
                  </div>
				  </br>
			
<div class="input-group">
                    <span class="input-group-addon input-sm">Balance:</span>
          <input type="text" name="Balance" class="form-control input-sm" value="<?php echo $show['Balance']; ?>"  >
                   
                  </div>
				  
				  </br>
</br>		
		<input type="hidden" name="id" class="form-control input-sm" value="<?php echo $show['service_credits_id']; ?>"  >
                     
                
 
                  </div>
                </div>
			     </div>
                </div>
               
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
        </div>
        <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-primary">Save</button>

         	
		  		          </div>
		 </form>	
 

		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->
  		
						<?php	} ?>	
                      
                         
						 
                            </tbody>
                        </table>
          </div>
          </div>

        
          <div class="table-responsive">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-markdown.js"></script>
    <script src="../../assets/js/holder.js"></script>
		<script src="js/jquery.bootstrap.wizard.js"></script>
	<script src="js/prettify.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>
  </body>
</html>
