<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>VNHS|HRIS</title>

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
            <li><a href="service_attendance.php">Service Credits</a></li>
            <li><a href="attendance.php">Attendance</a></li>
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
			
            <li class="active">
			<a href="#">
			<strong>ADD Employee</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
				    <li>
			<a href="#">
			<strong>Personal Information</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			    <li>
			<a href="#">
			<strong>Family Background</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			    <li>
			<a>
			<strong>Educational Background</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			
			    <li>
			<a href="#">
			<strong>Civil Service</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			
			    <li>
			<a href="#">
			<strong>Work Experience</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			  <li>
			<a href="#">
			<strong>Voluntary Wor</strong>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>&raquo;
			</strong></a>
			</li>
			
			

          </ul>
          
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       
  </h1>

         

        


	
	  
						<!--<ul style="font-size:10px;">
	  	<li><a href="#tab1" data-toggle="tab"><strong>Personal Information</strong></a></li>
		<li><a href="#tab2" data-toggle="tab"><strong>Family Background</strong></a></li>
		<li><a href="#tab3" data-toggle="tab"><strong>Educational Background</strong></a></li>
		<li><a href="#tab4" data-toggle="tab"><strong>Civil Service</strong></a></li>
		<li><a href="#tab5" data-toggle="tab"><strong>Work Experience</strong></a></li>
		<li><a href="#tab6" data-toggle="tab"><strong>Voluntary Work</strong></a></li>
		<li><a href="#tab7" data-toggle="tab"><strong>Training Programs</strong></a></li>
		<li><a href="#tab7" data-toggle="tab"><strong>Other Information</strong></a></li>
	</ul>-->
<ul class="nav nav-tabs" id="myTab" style="font-size:11px;">
  <li class="active"><a href="#home" data-toggle="tab"><strong>Personal Information</strong></a></li>
  <li><a href="#profile" data-toggle="tab"><strong>Family Background</strong></a></li>
  <li><a href="#messages" data-toggle="tab"><strong>Educational Background</strong></a></li>
  <li><a href="#settings" data-toggle="tab"><strong>Civil Service</strong></a></li>
  <li><a href="#settings" data-toggle="tab"><strong>Work Experience</strong></a></li>
  <li><a href="#settings" data-toggle="tab"><strong>Voluntary Work</strong></a></li>
  <li><a href="#settings" data-toggle="tab"><strong>Training Programs</strong></a></li>
  <li><a href="#settings" data-toggle="tab"><strong>Other Information</strong></a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="home">	
  </br>
  <div class="row">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Personal Information</h3>
              </div>
              <div class="panel-body">
           
							
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
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
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
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</DIV>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											
									</div>
			</div>
			</div>
			

              </div>
            </div>
  <div class="tab-pane fade" id="profile">
  </br>
  <div class="row">
									<div class="col-lg-4">
											  <div class="panel panel-success">
									  <div class="panel-heading">
										<h3 class="panel-title">Fathers Information</h3>
									  </div>
									  <div class="panel-body">
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									  </div>
									</div>
							
									
											
											
											      <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Mother's Maiden Name </h3>
              </div>
              <div class="panel-body">
               	<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname::</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
              </div>
            </div>
			
			
				      <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Spouse's Information </h3>
              </div>
              <div class="panel-body">
			  <div class="input-group input-sm">
												<span class="input-group-addon input-sm">Add of Fields:</span>
												<input type="text" name="firstname" class="form-control input-sm"  input-sm/>
												    <span class="input-group-btn ">
                      <button class="btn btn-default input-sm" type="button">+</button>
                    </span>
											</div>

									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname::</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Occupation::</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employe/Bus. Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Business Address:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No:.
:</span>
												<input type="tel" name="firstname" class="form-control input-sm" />
											</div>
              </div>
            </div>
										
										
									</div>
									<div class="col-lg-4">
									      <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Name of Child</h3>
              </div>
              <div class="panel-body">
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Add of Fields:</span>
												<input type="text" name="firstname" class="form-control input-sm"  input-sm/>
												    <span class="input-group-btn ">
                      <button class="btn btn-default input-sm" type="button">+</button>
                    </span>
											</div>
          
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</DIV>
									
									</DIV>
									    </div>
            </div>
									<div class="col-lg-4">
									
									      <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Date of Birth</h3>
              </div>
              <div class="panel-body">
			  
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Add of Fields:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
												    <span class="input-group-btn ">
                      <button class="btn btn-default input-sm" type="button">+</button>
                    </span>
											</div>
          
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date:</span>
												<input type="Date" name="firstname" class="form-control input-sm" />
											</div>
						
											   
              </div>
            </div>
									</div>
			</div>
  </div>

  <div class="tab-pane fade" id="messages">
</br>
								<div class="col-lg-4">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Elementary</h3>
              </div>
              <div class="panel-body">
           
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Degree Course:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Year Graduated:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Highest Grade:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates from:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates to:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>
			
			<div class="col-lg-4">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">Secondary</h3>
              </div>
              <div class="panel-body">
           
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Degree Course:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Year Graduated:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Highest Grade:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates from:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates to:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>
			<div class="col-lg-4">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">VOCATIONAL / TRADE COURSE	</h3>
              </div>
              <div class="panel-body">
           
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Degree Course:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Year Graduated:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Highest Grade:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates from:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates to:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>

			<div class="col-lg-4">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">COLLEGE	
	
	</h3>
              </div>
              <div class="panel-body">
           
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Degree Course:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Year Graduated:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Highest Grade:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates from:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates to:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>
			
			
			<div class="col-lg-4">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">GRADUATE STUDIES </h3>
              </div>
              <div class="panel-body">
           
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Degree Course:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Year Graduated:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Highest Grade:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates from:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates to:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>
			</div>
 
  <div class="tab-pane fade" id="settings">
  </br>
  <div class="col-lg-5">
				       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">CIVIL SERVICE ELIGIBILITY </h3>
              </div>
              <div class="panel-body">
            <div class="input-group input-sm">
												<span class="input-group-addon input-sm">Add Fields:</span>
												<input type="text" name="firstname" class="form-control input-sm"  input-sm/>
												    <span class="input-group-btn ">
										  <button class="btn btn-default input-sm" type="button">+</button>
										</span>
											</div>
							
								
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Career Service:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
									
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Rating:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Examination:</span>
												<input type="date" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Examination:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Liscense Number:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Dates of Release:</span>
												<input type="date" name="firstname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Scholarship.:</span>
												<input type="text" name="firstname" class="form-control input-sm" />
											</div>
									</div>
									
			</div>
			</div>
  
  
  
  </div>
</div>			
</br>
 <div class="row">
		   <div class="form-group">
                    <div class="col-lg-2 pull-right">
                      <button type="submit" class="btn btn-success  input-sm">Submit</button> 
                    </div>
                  </div>
                </div>
			
		</ul>
	</div>	
</div>

</h2>
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
$('#myTab a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
})
</script>
  </body>
</html>
