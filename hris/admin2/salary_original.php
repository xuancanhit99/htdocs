<?php
	include('head_plg_ins.php'); 
		include('db_con.php');
		include('admin_session.php');


		
	
 ?>

<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">VNHS|HRMS</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="#">Home</a></li>
                <li><a href="employee.php<?php  echo '?access='.$keys; ?>">Employee</a></li>
                <li class="active"><a href="Salary.php<?php  echo '?access='.$keys; ?>">Salary</a></li>
                <li><a href="Deduction.php<?php  echo '?access='.$keys; ?>">Deduction</a></li>
                <li><a href="department.php<?php  echo '?access='.$keys; ?>">Department</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
				               
									
              </ul>
						
			<ul class="nav navbar-nav navbar-right">
					 			
					<p><div style="color:white; font-size:25xp;">
					</div><div style="color:white; font-size:20xp;"> 	Welcome 
					<?php
				$keys=$_GET['access'];
				$resultp=mysql_query("select * from employee where position='$keys'") or die (mysql_error() );
                $rowp=mysql_fetch_array($resultp)	
			
				 ?>
					
					
				<?php echo $rowp['firstname']." " .$rowp['lastname'] ;  ?>
					  &nbsp; <a data-toggle="modal" href="#logout" class="btn btn-primary btn-sm"> &nbsp;<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i>&nbsp;	 Employee </a>

	
					</div> </p>
				
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:First slide" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="data:image/png;base64," data-src="holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
<div class="row">
 
<div class="col-lg-12">

  
  
  
  <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to logout?</center></h4>
   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a href="ses_des.php <?php  echo'?access='.$keys;?>">Logout</a>
		

        </div>
		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php	include('modal.php'); ?>
  <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg"> &nbsp;<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-user"></i>&nbsp;	 Employee </a>

   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
        	<th>DATE</th>
	<th>A.M. IN</th>
	<th>A.M. OUT</th>
	<th>P.M. IN</th>
	<th>P.M. OUT</th>
	<th>daily salary </th>
	<th>dtr</th>

									
                                   
                                </tr>
                            </thead>
                            <tbody>
<form 	 method="POST">
	 <?php	
		

		//$emp=mysql_query(" SELECT date,AM_in,AM_out,PM_in,PM_out,   (((MID(AM_in,4,5)*3600)+ (MID(AM_in,4,5)*60) )/)  AS total_hours FROM dtr; ") or die(mysql_error()); 
		//while($show=mysql_fetch_assoc($emp))
		//
		
	?>
	 	<?php	
		

		$emp=mysql_query(" SELECT date,AM_in,AM_out,PM_in,PM_out,   ( (MID(AM_out,1,5))-(MID(AM_in,1,5)) )+ ( (MID(PM_out,1,5))-(MID(PM_in,1,2)) )*100 AS total_hours FROM dtr; ") or die(mysql_error()); 
		while($show=mysql_fetch_assoc($emp))
		{
		
	?>
	 <tr>
	 <td><a href="E_D_emp.php <?php  echo '?access='.$id;?>	 "><?php  echo $show['date'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?>  "><?php  echo $show['AM_in'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?>  "><?php  echo $show['AM_out'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> <?php  echo $show['PM_in'];  ?> <a/></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> <?php  echo $show['PM_out'];  ?> <a/></td>
	 <td> <a href="E_D_emp.php <?php echo '?access='.$id;?> "> Php <?php  echo $show['total_hours'];  ?> <a/></td>


<td><center> <a href="Salary.php<?php echo '?access='.$id;?>">DTR</a></center></td>

												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>					
</form>
                            </tbody>
                        </table>
  
  
  
  


	 
</div>
</div>
	 <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 , Victorias National High School. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
