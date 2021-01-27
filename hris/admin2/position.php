<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Victorias National High School Human Resource Integrated System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" media="screen">
	<link rel="shortcut icon" href="../image/viclogo.jpg">
	<link rel="stylesheet" href="font-awesome-4.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootswatch.min.css">
	        <link rel="stylesheet" type="text/css" href="css/DT_Bootstrap3.css">
	        <link rel="stylesheet" type="text/css" href="css/bootstrap-dataTables.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../bower_components/bootstrap/assets/js/html5shiv.js"></script>
      <script src="../bower_components/bootstrap/assets/js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">

     var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-23019901-1']);
      _gaq.push(['_setDomainName', "bootswatch.com"]);
        _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

     (function() {
       var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
       ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
       var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
     })();

    </script>
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
			    <li class="active">
              <a href="position.php" >&nbsp;POSITION	</a>
            </li>
			    <li>
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


	
	 <li>
	 <div class="col-lg-2" style="color:white;font-size:25px;line-height:55px; "> Welcome  </div> 
	  </li>
	  <li>
	 <div class="col-lg-2" style="color:white; font-size:25px; line-height:55px;"> Admin  </div> 
	 </li>
	

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

        <div class="row" style="background-color:white; padding:25px; border-radius:1px; margin-top:-110px;">
          <div class="col-lg-8">
         

            <div class="bs-example table-responsive">
             
                     
	
                       <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><center><b>POSITION LIST</b></center></h3>
              </div>
              <div class="panel-body">
                      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
     
                          
						  
                            <thead>
                                <tr>
                                 
                                    <th>Position</th>
                                    <th>Action</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
							
                              	<?php	
		
		include('db_con.php');
		
		
		$emp=(" select * from salary ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['sal_id'];
		
	?>
							  
							  
                                    <tr>
                         
	 <td><a href="E_D_sal_rate.php <?php  echo '?sal='.$id;?>"><?php  echo $show['position'];  ?></a></td>
	 <td> 
&nbsp; <a data-toggle="modal" href="#del<?php echo $show['sal_id']?>" class="btn btn-danger btn-sm"> &nbsp;<i  class="fa fa-trash-o fa-1x"></i>&nbsp;DELETE </a>


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
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to Delete this position?</center></h4>
   
				
				<input type="hidden" name="sal_id" value="<?php echo $show['sal_id']; ?>">
		</br>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

  
          <button type="submit" name="delete" class="btn btn-danger">Delete</button>
	  		  
				  </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	</form>
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
                <h3 class="panel-title"><center><b>ADD POSITION</b></center></h3>
              </div>
              <div class="panel-body">
		  <form method="POST" action="add_position.php">
	 
		     <h4 class="modal-title"><center>
		
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >POSITION</span>
     
                
		<input type="text" name="position" class="form-control input-sm" value=""  >
                     
 
                  </div>
                </div>
			     </div>
                </div>

			 
			
			 </center></h4>
  
		
				
	
    
  <b class="pull-right"> <button type="submit" name="save" class="btn btn-primary">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </b>

         	
		  		   
		 </form>
		  </div>
		  </div>
		  </div>

    <footer>
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
              <li class="pull-left"><a href="#top">Victorias National High School Human Resource Management System</a></li>
              </ul>
            
          </div>
        </div>
        
      </footer>
        </div>
		
	  </div>


 
  <div class="modal fade" id="position" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		<form method="POST" action="add_position.php">
	 
		     <h4 class="modal-title"><center>
		
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >POSITION</span>
     
                
		<input type="text" name="position" class="form-control input-sm" value=""  >
                     
 
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
     


      
    

    </div>


    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootswatch.js"></script>
	
	<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/bootstrap-dataTables-paging.js"></script>

	
	
  </body>
</html>