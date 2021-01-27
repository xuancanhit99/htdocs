<!DOCTYPE html>
<?php 
include('db_con.php'); 
// include('admin_session_login.php'); 

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


    <link href="admin2/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin2/css/bootstrap.css" rel="stylesheet">
    <link href="css/prettify.css" rel="stylesheet">

    <link href="admin2/css/blog.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead ">
      <div class="container">
        <nav class="blog-nav">
 &nbsp;
 &nbsp;
 </br>
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
                    <div class="panel-heading"style=" background-color:#4A9AEB;">
                        <h3 class="panel-title" ><b style="color:#FFF; font-size:25px;"><center>Please Log In</center></b></h3>
                    </div>
                    <div class="panel-body">
                        <form action="log_query.php" method="post">
                            <fieldset>
						<?php	
							
			date_default_timezone_set('Asia/Taipei');
$date = date('m/d/Y h:i:s a', time());
;
?>
            <h4></h4>			<center>
                                <div class="form-group">
									
									<input type="text" name="id" class="form-control input-lg "  style="height:50px; font-size:25px;" required autofocus/>           
                                </div>
								</center>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="date" type="hidden" value="<?php echo date("d m, Y "); ?>">
                                </div>
								
								      <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="time" type="hidden" value="<?php echo $date; ?>">
                                </div>
                               
                                <!-- Change this to a button or input when using this as a form -->
								
                                <b><button type="submit" name="save" class="btn btn-lg tn-block pull-right">Login</a></b>
                            </fieldset>
                        </form>
						<div style="color:white;">
						
								
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
</br>
</br></br>
</br></br>
</br>
</br></br>
</br>
</br></br>
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
