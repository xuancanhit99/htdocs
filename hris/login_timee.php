<!DOCTYPE html>
<?php 
include('db_con.php'); 

// include('attendance_activation_session.php'); 
?>
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
    <link href="admin2/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin2/css/bootstrap.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="admin2/css/blog.css" rel="stylesheet">

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
</br>
 
        </nav>
      </div>
    </div>
	
	</br>
</br>
</br>
</br>
</br>
</br>




 <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-3" >
                <div class="login-panel panel panel-default" style="height:250px ; background-color:#2DDA81; ">
                    <div class="panel-heading" style=" background-color:#4A9AEB;">
                        <h3 class="panel-title" ><b><center>TIME LOG</center></b></h3>
                    </div>
					<center><b>
						<div style="border;solid white 0px; width:330px; ">	
								</br>
							<?php ?>
										</div>
										</b><center>
                    <div class="panel-body">
                        <form action="log_query.php" method="POST" >
                            <fieldset>
							<strong>

							</strong>

            <h4></h4>			<center>
                                <div class="form-group">
									
									<input type="text" name="id" class="form-control input-lg " style="height:50px; font-size:25px;" autocomplete="off" autofocus required/>           
                                </div>
								</center>
                                <div class="form-group">
                              </div>
								
														<?php	
							
			date_default_timezone_set('Asia/Taipei');
$date = date('m d, Y', time());
;
?>
								      <div class="form-group">
                                    <input class="form-control"  name="date" type="hidden" value="<?php echo $date; ?>">
                                </div>
								
							
                               
                                <!-- Change this to a button or input when using this as a form -->
								
                                <b><button type="submit" name="save" class="btn btn-lg tn-block pull-right">Log</a></b>
									<div class="row"> 
							
                            </fieldset>
							
                        </form>
						
							<div style="color:white; font-family:arial;">
							<b>

	</b>
	</div>
	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


	
	

    
	
   
</br>
</br>
</br>
</br>
</br>
</br>
</br></br>
</br></br>
</br></br>
</br>
   
</br>
</br>
</br>
</br>
</br>
</br>
</br></br>
</br>
 
   <div class="blog-masthead ">
      <div class="container">
        <nav class="blog-nav">
    <center><Strong style="color:#fff;">All Rights Reserved by Victorias National High School 2014.</Strong></center>
    
 </br>
 </br>
        </nav>
      </div>
    </div>

  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="admin2/js/bootstrap.min.js"></script>
    <script src="admin2/js/holder.js"></script>
		<script src="js/jquery.bootstrap.wizard.js"></script>
	<script src="js/prettify.js"></script>
	<script src="js/jquery.js"></script>
	<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({'tabClass': 'nav nav-tabs'});	
		window.prettyPrint && prettyPrint()
	});	
	</script>

</html>
