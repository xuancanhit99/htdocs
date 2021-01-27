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
            <li class="active"><a href="#">Employee</a></li>
            <li><a href="service_credits.php">Service Credits</a></li>
            <li><a href="attendance_page1.php">Attendance</a></li>
            <li><a>Welcome Admin</a></li>
            <li><a href="#" data-toggle="modal" data-target="#logout">&nbsp; &nbsp;Log out</a></li>
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
			<a href="add_employee.php">
			<strong>ADD Employee</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
				
			
			
			

          </ul>
         
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
  </h1>

          <div class="row">
          <div class="col-lg-11">
          <div class="row placeholders">
  <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><CENTER><b>EMPLOYEE LIST</b></center></h3>
              </div>
              <div class="panel-body">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

            
           
                                                    
						   <thead>
                                <tr>
        	<th><center>NAME</center></th>
	
	<th><center>ATTENDANCE</center></th>
	<th><center>ACTION</center></th>

	
									
                                   
                                </tr>
                            </thead>
                            <tbody>

	 	<?php	
		include('db_con.php');
		
		
		
		
		$emp=(" select * from personal_information ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
	 <tr>
	 <td><center><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></center></td>
		
<td>

 
  <div class="col-lg-2">
  <center>
<form action="view_info.php" method="post" >
<input type="text" name="employee_id" value="<?php echo $show['employee_id']; ?>" style="display:none;" >
<center><button type="subbmit"  class="btn btn-info btn-sm" >View</button></center>
</form>
</div>
</div>
</td>
<td><div class="row"> 
  <div class="col-lg-2">
<form action="view_info.php" method="post" >
<input type="text" name="employee_id" value="<?php echo $show['employee_id']; ?>" style="display:none;" >
<center><button type="subbmit"  class="btn btn-info btn-sm">View</button>&nbsp;</center>
</form>
</div>



  <div class="col-lg-2">
<form action="edit_information.php" method="post" >
<input type="text" name="employee_id" value="<?php echo $show['employee_id']; ?>" style="display:none;" >
<center><button type="submit" class="btn btn-success btn-sm">Edit</button>&nbsp;</center> 
</form>
</div>


</td>
 
 <div class="modal fade" id="<?php echo $show['employee_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form method="POST" action="delete_information.php">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to delete?</center></h4>
   
	  <input type="hidden"  name="employee_id" value="<?php echo $show['employee_id'];?>" >
   			
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <button type="submit"  name="delete" class="btn btn-danger">delete</button>
		  		          </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</form>
	</div><!-- /.modal -->
  
  
  
  
  
  
 
												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>

<?php include('logout.php'); ?>						

                            </tbody>
                        </table>
					</DIV>
					</DIV>
					</DIV>
          </div>
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
