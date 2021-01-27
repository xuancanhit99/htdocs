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
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/css/bootstrap.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="admin/css/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="blog-masthead ">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="#">Home</a>
          <a class="blog-nav-item" href="About.php">About</a>
          <a class="blog-nav-item" href="contact.php">Contact</a>
 
        </nav>
      </div>
    </div>

    <div class="container" >

	
	
      <div class="blog-header">
        <h1 class="blog-title" style="font-size:27px; ">
			 <div class="alert alert-dismissable alert-success">
		<img src="image/viclogo.jpg" width="100px;"height="100px;" class="img-circle">

		Victorias National High School 
		Human Resource Integrated System
		</div>
		</h1>
        <p class="lead blog-description"></p>
      </div>

		 

      <div class="row" style="margin-top:-20px;">

        <div class="col-sm-12 blog-main">
    <div style="border:0px solid #e5e5e5;border-radius:5px; padding-left:10px; padding-right:10px;">
          <div class="blog-post">
			  
           	

	  <form action="login_attendance.php" method="post">
           <center> <h4>Time Log In</h4></center>
            <p> <input class="form-control" name="user" id="focusedInput" type="text" value="" placeholder="username"></em> </p>
            <p>  <em><button type="submit" class="btn btn-primary PULL-RIGHT " name="save" value="Save">Save</button></em></p>
			</form> 
		
		  </div><!-- /.blog-post -->


          <ul class="pager">
          <!--  <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li> -->
          </ul>
		  
		   


        </div><!-- /.blog-main -->
		
		

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		
    
		  
		 
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ol class="list-unstyled">
       
            </ol>
          </div>
			
     
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>All Rights Reserved by Victorias National High School 2014.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>

  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/holder.js"></script>
		<script src="js/jquery.bootstrap.wizard.js"></script>
	<script src="js/prettify.js"></script>
	<script src="js/jquery.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>
<?php
	include('db_con.php');



if (isset($_POST['save'])){

$date=$_POST['date'];
$employee=$_POST['employee_id'];


$timelog=$mysqli->QUERY("select * from attendance where date='$date' and employee_id='$employee'");

$admin=$timelog->num_rows;


echo $admin;
?>
   
	
<?php 

}

?>
</html>
