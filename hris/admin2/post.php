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

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/bootstrap-markdown.min.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
	

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
            <li><a href="#">Service Credits</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Welcome Admin &nbsp; &nbsp;Log out</a></li>
          </ul>
          <form class="navbar-form navbar-right">
  
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		  
            <li >
			<a href="#">
			<strong>Employee</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			<li>
			<a href="attendance_page.php">
			<strong>Attendance</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			
			<li class="active">
			<a href="post.php">
			<strong>Post Events</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong  class="raq" >&raquo;
			</strong></a>
			</li>
			
		
			
			
			
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
  </h1>


		  
	<div class="span10">
			<section id="wizard">
			  <div class="page-header">
	            <h2></h2>
	          </div>
	
				<div id="rootwizard" class="tabbable tabs-left">
					<ul>
					  	<li><a href="#tab1" data-toggle="tab">Personal Information</a></li>
						<li><a href="#tab2" data-toggle="tab">Family Background</a></li>
						<li><a href="#tab3" data-toggle="tab">Educational Background</a></li>
						<li><a href="#tab4" data-toggle="tab">Civil Service</a></li>
						<li><a href="#tab5" data-toggle="tab">Work Experience</a></li>
						<li><a href="#tab6" data-toggle="tab">Voluntary Work</a></li>
						<li><a href="#tab7" data-toggle="tab">Training Programs</a></li>
						<li><a href="#tab7" data-toggle="tab">Other Information</a></li>
					</ul>
					<div class="tab-content">
					    <div class="tab-pane" id="tab1">
					     Personal Information
					    </div>
					    <div class="tab-pane" id="tab2">
					      2
					    </div>
						<div class="tab-pane" id="tab3">
							3
					    </div>
						<div class="tab-pane" id="tab4">
							4
					    </div>
						<div class="tab-pane" id="tab5">
							5
					    </div>
						<div class="tab-pane" id="tab6">
							6
					    </div>
						<div class="tab-pane" id="tab7">
							7
					    </div>
						<ul class="pager wizard">
							<li class="previous first" style="display:none;"><a href="#">First</a></li>
							<li class="previous"><a href="#">Previous</a></li>
							<li class="next last" style="display:none;"><a href="#">Last</a></li>
						  	<li class="next"><a href="#">Next</a></li>
						</ul>
					</div>	
				</div>
  
  
  
  

          </div>

    
          
      
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-markdown.js"></script>
    <script src="js/jquery.bootstrap.wizard.js"></script>
	
    <script src="../../assets/js/holder.js"></script>
<script src="jquery.bootstrap.wizard.js"></script>
	<script src="../prettify.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>
	.
  </body>
</html>
