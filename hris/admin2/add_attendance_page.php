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
            <li ><a href="admin_page.php">Employee</a></li>
            <li class="active"><a href="service_credits.php">Service Credits</a></li>
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
		  
		  
		
			
				<li>
			<a href="admin_page.php">
			<strong>Table</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
            <li  class="active">
			<a href="add_employee.php">
			<strong>ADD Employee</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong class="raq">&raquo;
			</strong></a>
			</li>
			
				
			
			
			

          </ul>
         
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
  </h1>

          <div class="row">
          <div class="col-lg-10">
         <div class="col-lg-4">
		    <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><center><b>GIVE SERVICE CREDITS</b></center></h3>
              </div>
              <div class="panel-body">
          
		    
		   
		   <form method="POST" action="add_service_credits.php">
	 
		     <h4 class="modal-title"><center>
		
			 <div class="row">
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >NAME:</span>
     
                
		  <select name="employee_id" class="form-control input-sm" id="animal"data-toggle="tooltip"  title="Name's that are not found in this box are already been given a service credit" />
		  <OPTION value=""></OPTION>
		  
	     	<?php	
		
		include('db_con.php');
		
		
		$emp=(" select * from personal_information WHERE NOT EXISTS (SELECT * FROM service_credits WHERE service_credits.employee_id = personal_information.employee_id)") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
                <option value="<?php echo $show['employee_id']?>">
				<?php echo $show['firstname']." ".$show['middlename']." ".$show['surname'];?>
				</option>
             
      

<?php } ?>      </select>
                   
 
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
                    <span class="input-group-addon input-sm" >Number of Days:</span>
     
                
	
		<input type="text" name="days" class="form-control input-sm" value="" 
id="animal"data-toggle="tooltip"  title="Input number of days to be given"		>
                     
 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
     

   <button type="submit" name="save" class="btn btn-primary pull-right">Save</button>

         	 
		  		    
		 </form>
		    </div>
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
