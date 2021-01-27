<!DOCTYPE html>
<?php include('session.php'); ?>
<html lang="en">
  <head>
    <title>VNHS|HRMS</title>
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
   
  </head>
  <body  class="style">
  
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
			
            <li class="active">
              <a href="#" >&nbsp;EMPLOYEE	</a>
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
     


      <!-- Buttons
      ================================================== -->
      

      <!-- Typography
      ================================================== -->
    

      <!-- Tables
      ================================================== -->
</br>
</br>
</br>

        <div class="row" style="background-color:white; padding:25px; border-radius:1px; margin-top:-55px;">
          <div class="col-lg-12">

            <div class="bs-example table-responsive">
			
   <div class="row"  >
   <DIV id="hide_table" >
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

                            </tbody>
                        </table>
					</DIV>
					</DIV>
					</DIV>
		
		
	  

    


      <!-- Forms
      ================================================== -->
     

      <!-- Navs
      ================================================== -->
    

      <!-- Indicators
      ================================================== -->
      

      <!-- Progress bars
      ================================================== -->
     

      <!-- Containers
      ================================================== -->
	   
      <div class="bs-docs-section" style="margin-top:-20px;">
	  </br>
	  </br>
          <button type="button" class="btn btn-info" id="hide_btn">EMPLOYEE</button>
   
      
		     <div class="row" id="hide_me3"  STYLE="display:none;" >
	
		
		 <form action="addemployee_data.php" method="POST">
		 
		  

    
	<div class="row">
			  <div class="col-lg-12">
	            <div class="page-header">
					
              <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title"><CENTER><B>PERSONAL DATA SHEET </B></CENTER></h3>
              </div>
              <div class="panel-body" style="padding:15px;">
           

			  				<ul class="nav nav-pills" style="font-size:10px;">
  <li><a href="#pds_1" data-spy="scroll" data-target="#pds_1"><b>I. PERSONAL INFORMATION	</b>												
</a></li>
  <li><a href="#FAMILY" data-spy="scroll" data-target="#FAMILY"><b>II.  FAMILY BACKGROUND</b></a></li>
  <li><a href="#EDUCATIONAL" data-spy="scroll" data-target="#EDUCATIONAL"><b>III.  EDUCATIONAL BACKGROUND	</b>												
</a></li>
  <li><a href="#messages" data-toggle="tab"><b>IV.  CIVIL SERVICE ELIGIBILITY	</b>											
</a></li>
  <li><a href="#messages" data-toggle="tab"><b>V.  WORK EXPERIENCE		</b>							
</a></li>
  <li><a href="#messages" data-toggle="tab"><b>VI. VOLUNTARY WORK 		</b>		
</a></li>
  <li><a href="#messages" data-toggle="tab"><b>VII.  TRAINING PROGRAMS	</b>							
</a></li>
 
</ul>

    
   
        <div id="hide_me2" style="overflow:scroll; height:1200px; border:0px solid black;" >
</br>
					  
<div class="tab-content">

  <div>
  <div id="pds_1">
				
					 
					 
			
           
            <div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>I.PERSONAL INFORMATION</I></li>
              </ul>
   
            </div>
            
      
				
	<div class="row">
	
	 <div class="col-lg-6">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >USERNAME</span>
                    <input type="text" NAME="username" class="form-control input-sm"  >
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-6">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >PASSWORD</span>
                    <input type="password" NAME="password" class="form-control input-sm"  >
              
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
                    <span class="input-group-addon input-sm" >SURNAME</span>
                    <input type="text" NAME="surname" class="form-control input-sm"  >
              
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
                    <span class="input-group-addon input-sm">FIRST NAME</span>
                    <input type="text" name="firstname" class="form-control input-sm" >
                 
                  </div>
                </div>
			     </div>
                </div>
				
                </div>
				
				
				<div class="row">
				
 <div class="col-lg-7">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME</span>
                    <input type="text" name="middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">	3. NAME EXTENSION(e.g. Jr.,Sr. ):</span>
                    <input type="text" name="name_extension" class="form-control input-sm"  >
                   
                  </div>
                </div>
                </div>
				
				

					</div>
					
					<div class="row">
					
					 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">	4. DATE OF BIRTH (MM/DD/YY) </span>
                    <input type="text" name="date_birth"class="form-control input-sm"  >
                   
                  </div>
                </div>
                </div>
					
					
		
		
				 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">16.RESIDENTIAL ADDRESS</span>
<textarea class="form-control input-sm" name="residential_address" rows="1" id="textArea"  ></textarea>
                   
                  </div>
                </div>
                </div>
			
					</div>
					
					
						<div class="row">
				
				
				
				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">5.PLACE OF BIRTH</span>
          <input type="text" class="form-control input-sm" name="place_birth" id="name"   />
                   
                  </div>
                </div>
                </div>
				
				
				
				
	
	 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">ZIP CODE</span>
     <input type="text" class="form-control input-sm" name="ra_zip_code" id="name"   />
                   
                  </div>
                </div>
                </div>
                </div>
					
					
					
					<div class="row">
				

				
					
	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">6. SEX</span>
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
                   
                  </div>
                </div>
                </div>

					 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">17. TELEPHONE NO.</span>
     <input type="text" class="form-control input-sm" name="ra_telephone_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
					
			
					<div class="row">
						
					
	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">7. CIVIL STATUS</span>
     <select name="civil_status" class="form-control input-sm" id="animal"  >
                <option value=""></option>
                <option value="Male">Single</option>
                <option value="Female">Married</option>
                <option value="Female">Annulled</option>
                <option value="Female">Widowed</option>
                <option value="Female">Seperated</option>
                <option value="Female">Others, specify</option>
            </select>
                   
                  </div>
                </div>
                </div>
	
				
				<div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">18. PERMANENT ADDRESS.</span>
         <textarea name="permanent_address" class="form-control input-sm" rows="1" id="textArea"  ></textarea>
                   
                  </div>
                </div>
                </div>
		               </div>

					   
					   <div class="row">
				

				<div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">8.CITIZENSHIP </span>

                             <input type="text" name="citizenship" class="form-control input-sm" name="citizenship" id="name"   />
                  </div>
                </div>
                </div>
				
				
				<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">ZIP CODE</span>
          <input type="text" class="form-control input-sm" name="pa_zip_code" id="name"   />
                   
                  </div>
                </div>
                </div>

				
                </div>
				
				
				
			<div class="row">
				

				
								 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">9.HEIGHT (m)</span>
          <input type="text" class="form-control input-sm" name="height" id="name"   />
                   
                  </div>
                </div>
                </div>
						
					<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">19. TELEPHONE NO.	</span>
          <input type="text" class="form-control input-sm" name="pa_telephone_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
					   
					   
					   
					     <div class="row">
			
								 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">9.WEIGHT (kg)</span>
          <input type="text" class="form-control input-sm" name="weight" id="name"   />
                   
                  </div>
                </div>
                </div>
				
				
				<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">20. E-MAIL ADDRESS (if any)	
</span>
          <input type="text" class="form-control input-sm" name="e_mail_address" id="name"   />
                   
                  </div>
                </div>
                </div>
                </div>
					   
					   
					     <div class="row">

				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">11.BLOOD TYPE</span>
          <input type="text" class="form-control input-sm" name="blood_type" id="name"   />
                   
                  </div>
                </div>
                </div>

							<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">21. CELLPHONE NO. (if any)	
</span>
          <input type="text" class="form-control input-sm" name="cellphone_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				
				  <div class="row">
				  
				  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">12.GSIS ID NO.</span>
          <input type="text" class="form-control input-sm" name="gsis_id_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				

				
		
				
				
						<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">22. AGENCY EMPLOYEE NO.	
</span>
          <input type="text" class="form-control input-sm" name="agency_employee_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				 <div class="row">
				

								  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">13.PAG-IBIG ID NO.</span>
          <input type="text" class="form-control input-sm" name="pag_ibig_id_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
				
			
					<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">23. TIN	
</span>
          <input type="text" class="form-control input-sm" name="tin" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				
				 <div class="row">
				

				  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">14.PHILHEALTH NO.</span>
          <input type="text" class="form-control input-sm" name="philhealth_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
			 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">POSITION</span>
          
		
     <select name="position" class="form-control input-sm" id="animal"  />
	 
	     	<?php	
		
		include('db_con.php');
		
		
		$emp=(" select * from salary order by position ASC ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['sal_id'];
		
	?>
                <option value="<?php echo $show['position']; ?>"><?php echo $show['position']; ?></option>
				
				<?php } ?>
				
                </select>
                   
                  </div>
                   
                  </div>
                </div>
             
				
				
				
				

                </div>
				
				
				<div class="row">
				

													  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">15.SSS NO.</span>
          <input type="text" class="form-control input-sm" name="sss_no" id="name"   />
                   
                  </div>
                </div>
                </div>

				
                </div>
				
					</div>
					
					
			
					
									 
           <div id="FAMILY">	
<DIV CLASS="ROW">
			   
			    <div class="col-lg-14">
           
            <div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>II.FAMILY BACKGROUND</I></li>
              </ul>
   
            </div>
            
          </div>
          </div>	
				
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">24.SPOUSE'S SURNAME
</span>
                    <input type="text" NAME="spouse_surname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">	25.  NAME OF CHILD (Write full name and list all)				
</span>
                
                   
                  </div>
                </div>
                </div>
				
					
				 <div class="col-lg-4">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"> DATE OF BIRTH (mm/dd/yyyy)	
				
</span>
                
                   
                  </div>
                </div>
                </div>
				
				

					</div>
					
					
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">FIRST NAME

</span>
                    <input type="text" NAME="spouse_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
             
            

                    <input type="text" name="name_child_1" class="form-control input-sm"  >
                   
               
          
                </div>
				
				
				
				<div class="col-lg-4">

                    <input type="text" name="child_birth_1" class="form-control input-sm"  >
                </div>
				
				

					</div>
					
					
				
				
				
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME


</span>
                    <input type="text" name="spouse_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				  
              
                    <input type="text" name="name_child_2" class="form-control input-sm"  >

                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_2" class="form-control input-sm"  >
                </div>
				

					</div>
					
					
						<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">OCCUPATION



</span>
                    <input type="text" name="spouse_occupation" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				  
               
                    <input type="text" name="name_child_3" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_3" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">EMPLOYER/BUS. NAME




</span>
                    <input type="text" name="spouse_employer_or_bus_name" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
	
              
                    <input type="text" name="name_child_4" class="form-control input-sm"  >
                   
      
                </div>
						<div class="col-lg-4">

                    <input type="text" name="child_birth_4" class="form-control input-sm"  >
                </div>
				
				

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">BUSINESS ADDRESS





</span>
                    <input type="text" name="business_address" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				
             
                    <input type="text" name="name_child_5" class="form-control input-sm"  >
                   
               
                </div>
						<div class="col-lg-4">

                    <input type="text" name="child_birth_5" class="form-control input-sm"  >
                </div>
				

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">TELEPHONE NO.
	
</span>
                    <input type="text" name="bus_telephone_no" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>

				 <div class="col-lg-4">
 
                    <input type="text"name="name_child_6" class="form-control input-sm"  >
  
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_6" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">26. FATHER'S SURNAME	

	





</span>
                    <input type="text" name="father_surname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_7" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_7" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">FIRST NAME	
	

	





</span>
                    <input type="text" name="father_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_8" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_8" class="form-control input-sm"  >
                </div>

					</div>
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME
	

	





</span>
                    <input type="text" name="father_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_9" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_9" class="form-control input-sm"  >
                </div>

					</div>
						<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME
	

	





</span>
                    <input type="text" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_10" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text"name="child_birth_10" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">27. MOTHER'S MAIDEN NAME					

</span>

    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_11" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text"  name="child_birth_11"class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">SURNAME	

	

	





</span>
                    <input type="text" name="mother_maiden_surname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_12" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_12"class="form-control input-sm"  >
                </div>

					</div>
					
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">FIRST NAME	
	

	





</span>
                    <input type="text" name="mother_maiden_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text" name="name_child_13" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_13" class="form-control input-sm"  >
                </div>

					</div>
					
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME	
	

	





</span>
                    <input type="text" name="mother_maiden_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input type="text"name="name_child_14"  class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input type="text" name="child_birth_14" class="form-control input-sm"  >
                </div>

					</div>
					
					</div>
					
					  <div  id="EDUCATIONAL">
					<div class="col-lg-14">
           
            <div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>III.  EDUCATIONAL BACKGROUND													
</I></li>
              </ul>
   
            </div>
            
          </div>
		  
		  
		  	<div class="row">
				
 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">28.LEVEL	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
	
		 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">NAME OF SCHOOL</br>(Write in full)		
		
		
	

</span>
              
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				
 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"style="border-radius:5px;">DEGREE COURSE</br>(Write in full)                     	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				

				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">HIGHEST GRADE/</br>LEVEL/</br>UNITS EARNED</br>(if not graduated)		
		
		
                    	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>

				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">INCLUSIVE DATES</br> OF ATTENDANCE	</br>
	
					From	To
				</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
						
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">SCHOLARSHIP/ </br>ACADEMIC </br>HONORS RECEIVED



				</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
	

					</div>
					
					<div class="row">
				
 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">ELEMENTARY

</span>

              
                  </div>
                </div>
				
			     </div>
                </div>
				
	
		 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea  name="elementary_school_name"class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				
 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea name="elementary_degree_course" class="form-control input-sm" rows="3" id="textArea"  ></textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea name="elementary_highest_grade" class="form-control input-sm" rows="3" id="textArea"  ></textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea name="elementary_date_attendance" class="form-control input-sm" rows="3" id="textArea"  ></textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea name="elementary_scholarship"class="form-control input-sm" rows="3" id="textArea"  ></textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				
                </div>	
				
				
				
				<div class="row">
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">SECONDARY

</span>



				</span>
              
                  </div>
                </div>
				
			     </div>
			     </div>
				 
				  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="secondary_school_name" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="secondary_degree_course" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="secondary_highest_grade" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="secondary_date_attendace" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="secondary_scholarship" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 
				 
            
              
                </div>
				
				
				<div class="row">
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">VOCATIONAL / </br>TRADE COURSE		
	


</span>



				</span>
              
                  </div>
                </div>
				
			     </div>
			     </div>
				 
				 
				  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="vocational_school_name" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="vocational_degree_course" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="vocational_highest_grade" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="vocational_date_attendance" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="vocational_scholarship" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
                </div>
				 
				 
				 
				 <div class="row">
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">COLLEGE	
	


</span>



				</span>
              
                  </div>
                </div>
				
			     </div>
			     </div>
			  
			  
			  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="college_school_name" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="college_degree_course" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="college_highest_grade" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="college_date_attendance" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="college_scholarship" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
                </div>
				
				<div class="row">
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">GRADUATE STUDIES 	
	
	
	


</span>



				</span>
              
                  </div>
                </div>
				
			     </div>
			     </div>
				 
				 
			    
			  
			  
			  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="graduate_studies_school_name"class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="graduate_studies_degree_course"class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="graduate_studies_highest_grade" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="graduate_studies_date_attendance"class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
				 
			     </div>
				 
				 
				  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea name="graduate_studies_scholarship" class="form-control input-sm" rows="3" id="textArea"  ></textarea>
                  </div>
                </div>
				
				
				
			     </div>
				 
			     </div>
				 
				   </div>
				 <div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>
				IV.  CIVIL SERVICE ELIGIBILITY												
													
</I></li>
              </ul>
   
            </div>
			
			<div class="row">
				   <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">29. CAREER SERVICE/
																								RA 1080 /</br> 
																						(BOARD/ BAR)</br>
																						UNDER SPECIAL LAWS/ CES/ CSEE			
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				 <div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" > </br>&nbsp;RATING</br>&nbsp;

		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">DATE OF </br>EXAMINATION /</br> CONFERMENT	
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" >PLACE OF </br> EXAMINATION /</br> CONFERMENT		
		
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" >LICENSE</br> (if applicable)</br>NUMBER
	
			
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				<div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">DATE </br>OF</br>  RELEASE
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
			    </div>
				 
				 
				 <div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
				&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_2" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_2" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_2" class="form-control input-sm"  >
              
                
                </div>	
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_2" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_2" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_2" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_3" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_3" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_3" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_3" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_3" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_3" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_4" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_4" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_4" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_4" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_4" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_4" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_5" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_5" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_5" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_5" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_5" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_5" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_6" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_6" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_6" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_6" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_6" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_6" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-3">
	              
                
 
             
                 
      
                    <input type="text" NAME="career_service_7" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="rating_7" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="date_examination_7" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-3">
	               
      
                    <input type="text" NAME="place_examination_7" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="license_number_7" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
      
                    <input type="text" NAME="license_release_7" class="form-control input-sm"  >
              
                 
                </div>
				
				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				
				
				
				
				
				<div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>
				V.  WORK EXPERIENCE (Include private employment.  Start from your current work)												
											
													
</I></li>
              </ul>
   
            </div>
				
				
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">30. inclusive </br>dates </br>(mm/dd/yyyy)</br> From
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">inclusive</br>dates</br> To
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">POSITION TITLE</br>(Write in full)
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				 
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" > DEPARTMENT</br> / AGENCY</br> / OFFICE </br>/ COMPANY  </br>(Write in full)

		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">MONTHLY</br> SALARY



	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" >SALARY GRADE</br>& STEP</br> INCREMENT</br>(Format "00-0")


		
		
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				
				
				
				 <div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" >Status</br>of</br>Appointment



	
			
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				<div class="col-lg-1">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">GOV'T </br>SERVICE</br>(Yes / No)
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
			    </div>
				
			
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_2" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_2" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_2" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_2" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_2" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_2" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_2" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_2" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_3" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_3" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_3" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_3" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_3" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_3" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_3" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_3" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_4" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_4" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_4" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_4" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_4" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_4" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_4" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_4" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_5" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_5" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_5" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_5" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_5" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_5" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_5" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_5" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
				
					<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_6" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_6" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_6" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_6" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_6" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_6" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_6" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_6" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
			
			
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_7" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_7" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_7" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_7" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_7" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_7" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_7" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_7" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
			
				
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_8" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_8" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_8" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_8" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_8" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_8" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_8" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_8" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>

				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_9" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_9" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_9" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_9" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_9" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_9" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_9" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_9" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
			
				<div class="row">
				 
				            <div class="col-lg-2">
	              
                
 
             
                 
      
                    <input type="text" NAME="work_experience_inclusive_dates_from_10" class="form-control input-sm"  >
              
                 
                </div>
			
            
				
				<div class="col-lg-1">
	        
      
                    <input type="text" NAME="work_experience_inclusive_dates_to_10" class="form-control input-sm"  >
              
                 
                </div>	<div class="col-lg-2">
	        
      
                    <input type="text" NAME="work_experience_position_title_10" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	           
      
                    <input type="text" NAME="work_experience_department_10" class="form-control input-sm"  >
              
                
                </div>
				
				
				<div class="col-lg-1">
	               
      
                    <input type="text" NAME="work_experience_monthly_salary_10" class="form-control input-sm"  >
              
                 
                </div>
				
				<div class="col-lg-2">
	               
                    <input type="text" NAME="work_experience_salary_grade_step_inc_10" class="form-control input-sm"  >
              
                
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_status_appointment_10" class="form-control input-sm"  >
      
              
                 
                </div>
				
				<div class="col-lg-1">
	              
                    <input type="text" NAME="work_experience_gov_service_10" class="form-control input-sm"  >
      
              
                 
                </div>
				

				
                </div>
				<div class="row">
			&nbsp;
				</div>
						
			
			</div>
						
						
						<!-- start section VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC -->
						<div class="bs-example">
              <ul class="breadcrumb">
                <li ><I>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY ORGANIZATION/S									
												
</I></li>
              </ul>
   
            </div>
			
			<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">31. NAME & ADDRESS OF </BR>ORGANIZATION</BR>(Write in full)
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">Inclusive Dates</br>(mm/dd/yyyy)</br> From
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">Inclusive Dates</br>(mm/dd/yyyy)</br>To
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				 
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" > NUMBER </br>OF</br> HOURS

		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;">Position/ Nature of Work
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>

				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="voluntary_work_name_address_org" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="voluntary_work_dates_from" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="voluntary_work_dates_to" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="voluntary_work_num_hours" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="voluntary_work_position_nature_work" class="form-control input-sm"  >
			
                </div>
			
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
			

		<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="voluntary_work_name_address_org_2" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="voluntary_work_dates_from_2" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="voluntary_work_dates_to_2" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="voluntary_work_num_hours_2" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="voluntary_work_position_nature_work_2" class="form-control input-sm"  >
			
                </div>
			
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
			
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="voluntary_work_name_address_org_3" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="voluntary_work_dates_from_3" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="voluntary_work_dates_to_3" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="voluntary_work_num_hours_3" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="voluntary_work_position_nature_work_3" class="form-control input-sm"  >
			
                </div>
			
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
			
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="voluntary_work_name_address_org_4" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="voluntary_work_dates_from_4" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="voluntary_work_dates_to_4" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="voluntary_work_num_hours_4" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="voluntary_work_position_nature_work_4" class="form-control input-sm"  >
			
                </div>
			
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
			
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="voluntary_work_name_address_org_5" class="form-control input-sm"  >
		
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="voluntary_work_dates_from_5" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="voluntary_work_dates_to_5" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="voluntary_work_num_hours_5" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="voluntary_work_position_nature_work_5" class="form-control input-sm"  >
			
                </div>
			
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
			
			
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				
				
					<div class="row">
					&nbsp;
					</div>
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
					<div class="row">
				&nbsp;
						</div>
				
				
				<!--end of VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC section  -->
				
				
				
				
						
						<!-- start of VII.  TITLE OF SEMINAR/CONFERENCE/WORKSHOP/SHORT COURSES (Write in full)	section -->
						
						<div class="bs-example">
              <ul class="breadcrumb">
                <li ><I> 32. TITLE OF SEMINAR/CONFERENCE/WORKSHOP/SHORT COURSES (Write in full)		
		
		
								
												
</I></li>
              </ul>
   
            </div>
			
			<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">NAME & ADDRESS OF </BR>ORGANIZATION</BR>(Write in full)
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">Inclusive Dates </br>of Attendance</br>(mm/dd/yyyy)</br> From
	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">Inclusive Dates </br>of Attendance</br>(mm/dd/yyyy)</br>To
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				 
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" > NUMBER </br>OF</br> HOURS

		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-3">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;"> CONDUCTED/ SPONSORED</br>BY</br>(Write in full)		
		
		

	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>

				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				
				
					<div class="row">
					&nbsp;
					</div>
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-3">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
			

         
              
             
			    
                </div>
				
				
				<div class="col-lg-2">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-2">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				 
				
				 <div class="col-lg-2">
	                   <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				 <div class="col-lg-3">
	            
                
          <input type="text" NAME="surname" class="form-control input-sm"  >
			
                </div>
				
				
				 
				
				
				
				
				
				
				
				
				
			    </div>
				<div class="row">
				&nbsp;
						</div>
						<!-- end ofVII.  TRAINING PROGRAMS (Start from the most recent training.) section		-->
						
						
						<!-- start of VII.  VIII.  OTHER INFORMATION									
	section -->
						
						<div class="bs-example">
              <ul class="breadcrumb">
                <li ><I> 32.VIII.  OTHER INFORMATION									
	
		
		
								
												
</I></li>
              </ul>
   
            </div>
			
			<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">33. SPECIAL SKILLS / HOBBIES:

	
		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				
				
				
				<div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm"  style="border-radius:5px;">34. NON-ACADEMIC</br> DISTINCTIONS / RECOGNITION:                                                                                     (Write in full)			

		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				 
				
				 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" style="border-radius:5px;" >35. MEMBERSHIP IN </br>ASSOCIATION/ORGANIZATION                                                                                         (Write in full)	


		
			
</span>
         
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				 

				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
	    
                </div>
				
				
				<div class="col-lg-4">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-4">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					
				
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
	    
                </div>
				
				
				<div class="col-lg-4">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-4">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					
				
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
	    
                </div>
				
				
				<div class="col-lg-4">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-4">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					
					
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
	    
                </div>
				
				
				<div class="col-lg-4">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-4">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
					
					
				
					<div class="row">
				  
				  
				  
				  
				  
				   <div class="col-lg-4">

             
              
                     <input type="text" NAME="surname" class="form-control input-sm"  >
		
	    
                </div>
				
				
				<div class="col-lg-4">
	                 <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
				<div class="col-lg-4">
	                  <input type="text" NAME="surname" class="form-control input-sm"  >
                </div>
				
				
			    </div>
				
				<div class="row">
					&nbsp;
					</div>
				
					
				
					
					
					<!-- start of VII.  VIII.  OTHER INFORMATION									
	section -->
						
						<div class="bs-example">
              <ul class="breadcrumb">
                <li ><I> 32.VIII.  OTHER INFORMATION									
	
		
		
								
												
</I></li>
              </ul>
   
            </div>
					 		  
				   <div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
					36.	Are you related by consanguinity or affinity to any of the following :
					</br>
					</br>
			
a.	Within the third degree (for National Government Employees):</br>
appointing authority, recommending authority, chief of </br>
office/bureau/department or person who has immediate supervision</br>
 over you in the Office, Bureau or Department where you will be appointed?</br>			
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
				
				
				
				  <div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
					b.	Within the fourth degree (for Local Government Employees): </br>
					appointing authority or recommending authority where you will be appointed?		
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
				
				
				
				<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
	37.	a. Have you ever been formally charged?
		</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
				
				<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		b. Have you ever been guilty of any administrative offense?		
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
		
			<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
	38.	Have you ever been convicted of any crime or violation</br>
	of any law, decree, ordinance or regulation by any court or tribunal?</br>	
			
			
			

</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	
				<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		39.	Have you ever been separated from the service in any</br>
		of the following modes: resignation, retirement, dropped from</br>
		the rolls, dismissal, termination, end of term, finished contract,</br>
		AWOL or phased out, in the public or private sector?		</br>
			
			
			

</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	
	
				<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		40.	Have you ever been a candidate in a national</br> or local election (except Barangay election)?		
			
			
			
	
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	
	
				<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		a. 	Are you a member of any indigenous group?
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	
<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
	b. Are you differently abled?		
		

</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		c. Are you a solo parent?		
		

</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
	<div class="row">
	 <div class="col-lg-6">
				
                    <span class="input-group-addon input-sm">
		41.	Pursuant to: (a) Indigenous People's Act (RA 8371);</br>
		(b) Magna Carta for Disabled Persons (RA 7277);</br>
		and (c) Solo Parents Welfare Act of 2000 (RA 8972),</br>
		please answer the following items:</br>
</span>
 </div>
          

	 <div class="col-lg-6">
		
     <select name="sex" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
                   
                  </div>
           
                </div>
	
				
				<div class="row">
					&nbsp;
					</div>
			
				
					
					
					
						<!-- end ofVII.  TRAINING PROGRAMS (Start from the most recent training.) section		-->
						
						
						
						
						</div>
					<!--down tabs of 1st tab-->
				
			

												

													
</div>
 
 
  
 
      </div>
</div>	
</div>	
			
			      			

			
<!--- end line-->	    


					
					
						
              


				    
					      <fieldset>
		<button type="submit"  id="submit" name="save" class="btn btn-primary btn-sm" style="margin-left:30px;"><i class="fa fa-save fa-1x"></i>&nbsp;SAVE</button>
           
        </fieldset> 
					
				<div class="row">
				 <div class="col-lg-4">
      
     

    
		  </div>
   </div>		
    </form>
  
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
      <footer>
	  
        <div class="row">
          <div class="col-lg-12">
            
    
		  <ul class="list-unstyled">
              <li class="pull-right"><a href="#top">Back to top</a></li>
             <li><a href="#top">Victorias National High School Human Resource Management System</a></li>
            </ul>
		
           <!--   <p>Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him at <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>
-->
          </div>
        </div>
        
      </footer>
    
     </div>
    </div>

	<!-- Modal -->
	
	<?php	
		include('db_con.php');
		
		
		
		
		$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>

<div class="modal fade" id="<?php echo $show['employee_id']; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form action="delete_information.php" method="post" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this data?


<input type="text" name="employee_id" value="<?php echo $show['employee_id']; ?>"  >



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </form>
</div><!-- /.modal -->


<?php } ?>

    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootswatch.js"></script>
	
	<script src="js/jquery.js" type="text/javascript"></script>



<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/bootstrap-dataTables-paging.js"></script>

	<script> 
$(document).ready(function(){
  $("#hide_btn").click(function(){
	 $("#hide_me3").slideToggle();
	 $("#hide_table").slideToggle();

  });
  
  

  
});
</script>
	
	
	
  </body>
</html>