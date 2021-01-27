<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Victorias National High School Human Resource Integrated System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" media="screen">

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
              <a href="#" >&nbsp;EMPLOYEE	</a>
            </li>
			    <li>
              <a href="position.php" >&nbsp;POSITION	</a>
            </li>
			    <li   class="active">
              <a href="department1.php" >&nbsp;DEPARTMENT	</a>
            </li>
			<li>
              <a href="credits.php" >&nbsp;CREDITS	</a>
            </li>
			
            <li>
              <a href="attendance.php"> ATTENDANCE</a>
            </li>
			
			
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
        <li>     <a href="Salary.php" ><i class="fa fa-sign-out fa-1x"></i>&nbsp;LOGOUT	</a></li>
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

        <div class="row" style="background-color:white; padding:25px; border-radius:1px; margin-top:-110px; min-height:1000px;">
          <div class="col-lg-8">
         

            <div class="bs-example table-responsive">
             
                     
	<div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><center><b>DEPARTMENT</b></center></h3>
              </div>
              <div class="panel-body">
             
  
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                         
                                    
                            <thead>
                                <tr>
                                 
                                    <th>DEPARTMENT</th>
                                    <th>ACTION</th>
                       
                                 
                                </tr>
                            </thead>
                            <tbody>
							
                              	<?php	
		
		include('db_con.php');
		
		
		// $emp=(" select * from service_crediats ") or die(mysql_error());
		$emp=(" SELECT * from department") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
							  
							  
                                    <tr>
                         
	 <td><?php  echo $show['dep_name'];  ?></td>

	 <td> &nbsp; <a data-toggle="modal" href="#add_credits<?php echo $show['service_credits_id']; ?>" class="btn btn-danger btn-sm"> &nbsp;<i  class="fa fa-trash-o fa-1x"></i>&nbsp;DELETE </a>

 </td>
				
										
                                      
                                       
                                    </tr>
									
<div class="modal fade" id="del<?php echo $show['sal_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="POST"  action="delete_position.php">   
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to logout?</center></h4>
   
				
				<input type="hidden" name="sal_id" value="<?php echo $show['sal_id']; ?>">
		</br>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

  
          <button type="submit" name="delete" class="btn btn-danger">Logout</button>
	  		  
				  </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	</form>
  </div><!-- /.modal -->

	
  
  
  
  <div class="modal fade" id="add_credits<?php echo $show['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		<form method="POST" action="inc_service_credits.php">
	 
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
						
            </div><!-- /example -->
          </div>
		 
		  
		   <div class="col-lg-4">
		    <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><center><b>ADD DEPARTMENT</b></center></h3>
              </div>
              <div class="panel-body">
          
		    
		   
		   <form method="POST" action="add_service_credits.php">
	 
		   
				
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Department:</span>
     
                
	
		<input type="text" name="Department" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
     
          <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-primary">Save</button>
</DIV>
         	 
		  		       
		 </form>
		    </div>
            </div>
		   </div>
		  
		     &nbsp;
		
        <div class="row">
          <div class="col-lg-12">
       
              <b class="pull-right"><a href="#top">Back to top</a></b>
              <b class="pull-left"><a href="#top">Victorias National High School Human Resource Management System</a></b>
            
            
          </div>
        </div>
        
    
        </div>
      </div>


 
  <div class="modal fade" id="credits" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
			
 

		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	

  
  
    
  
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
     


      <footer>
        <div class="row">
          <div class="col-lg-12">
            
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li><a href="http://news.bootswatch.com" onclick="pageTracker._link(this.href); return false;">Blog</a></li>
              <li><a href="http://feeds.feedburner.com/bootswatch">RSS</a></li>
              <li><a href="https://twitter.com/thomashpark">Twitter</a></li>
              <li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
              <li><a href="../help/#api">API</a></li>
              <li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=F22JEM3Q78JC2">Donate</a></li>
            </ul>
            <p>Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him at <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>

          </div>
        </div>
        
      </footer>
    




    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootswatch.js"></script>
	
	<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/bootstrap-dataTables-paging.js"></script>

	
	
  </body>
</html>
</html>