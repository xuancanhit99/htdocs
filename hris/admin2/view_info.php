<!DOCTYPE html>
<html lang="en">
  <head>
    <title>VNHS|HRMS</title>
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
  <body>
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
              <a href="#" ><i class="fa fa-user fa-1x"></i>&nbsp;EMPLOYEE	</a>
            </li>
			    <li>
              <a href="Salary.php" ><i class="fa fa-money fa-1x"></i>&nbsp;SALARY	</a>
            </li>
            <li>
              <a href="http://news.bootswatch.com"><i class="fa fa-building fa-1x"></i> DEPARTMENT</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Download <span class="caret"></span></a>
              <ul class="dropdown-menu" aria-labelledby="download">
                <li><a tabindex="-1" href="./bootstrap.min.css">bootstrap.min.css</a></li>
                <li><a tabindex="-1" href="./bootstrap.css">bootstrap.css</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="./variables.less">variables.less</a></li>
                <li><a tabindex="-1" href="./bootswatch.less">bootswatch.less</a></li>
              </ul>
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
     


      <!-- Buttons
      ================================================== -->
      

      <!-- Typography
      ================================================== -->
    

      <!-- Tables
      ================================================== -->
</br>
</br>
</br>

        <div class="row">
          <div class="col-lg-12">

            <div class="bs-example table-responsive">
			
   <div class="row"  >

	 	<?php	
		include('db_con.php');
		
		$employee_id=$_POST['employee_id'];
		
		
		$emp=(" select * from employee where employee_id='$employee_id' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
	 
		                   
		
	  

    


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
          <button type="button" class="btn btn-info" id="hide_btn">EMPLOYEE</button>
        <div class="row" id="hide_me" >
	
		

		 
		  

    
	<div class="row">
			  <div class="col-lg-12">
	            <div class="page-header">
					
            <center>  <h2 id="type"> <B>PERSONAL DATA SHEET </B></h2> </center>
            </div>
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
</br>
					  
<div class="tab-content">

  <div style="overflow:scroll; height:900px; border:solid black 0px ">
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
                    <input disabled type="text" value="<?php echo $show['username']; ?>" NAME="username" class="form-control input-sm" disabled >
              
                  </div>
                </div>
			     </div>
                </div>
				
				
				<div class="col-lg-6">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >PASSWORD</span>
                    <input disabled type="password" value="<?php echo $show['password']; ?>" NAME="password" class="form-control input-sm" disabled >
              
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
                    <input disabled type="text"value="<?php echo $show['surname']; ?>" NAME="surname" class="form-control input-sm"  disabled>
              
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
                    <input disabled type="text" name="firstname" class="form-control input-sm"  value="<?php echo $show['firstname']; ?>" disabled>
                 
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
                    <input disabled type="text" value="<?php echo $show['middlename']; ?>" name="middlename" class="form-control input-sm"  disabled>
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">	3. NAME EXTENSION(e.g. Jr.,Sr. ):</span>
                    <input disabled type="text" value="<?php echo $show['name_extension']; ?>" name="name_extension" class="form-control input-sm"  disabled>
                   
                  </div>
                </div>
                </div>
				
				

					</div>
					
					<div class="row">
					
					 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">	4. DATE OF BIRTH (MM/DD/YY) </span>
                    <input disabled type="text" value="<?php echo $show['date_birth']; ?>" name="date_birth"class="form-control input-sm"  disabled>
                   
                  </div>
                </div>
                </div>
					
					
		
		
				 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">16.RESIDENTIAL ADDRESS</span>
			<input disabled type="text" value="<?php echo $show['residential_address']; ?>" name="residential_address"class="form-control input-sm"  disabled>
                 
	
                   
                  </div>
                </div>
                </div>
			
					</div>
					
					
						<div class="row">
				
				
				
				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">5.PLACE OF BIRTH</span>
          <input disabled type="text" value="<?php echo $show['place_birth']; ?>" class="form-control input-sm" name="place_birth" id="name"  disabled />
                   
                  </div>
                </div>
                </div>
				
				
				
				
	
	 <div class="col-lg-7">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">ZIP CODE</span>
     <input disabled type="text" value="<?php echo $show['ra_zip_code']; ?>" class="form-control input-sm" name="ra_zip_code" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
                </div>
					
					
					
					<div class="row">
				

				
					
	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">6. SEX</span>
     <select name="sex" class="form-control input-sm" id="animal" disabled />
                <option value="<?php echo $show['sex'];?>"><?php echo $show['sex'];?></option>
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
     <input disabled type="text" value="<?php echo $show['ra_telephone_no']; ?>" class="form-control input-sm" name="ra_telephone_no" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
				
                </div>
					
			
					<div class="row">
						
					
	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">7. CIVIL STATUS</span>
     <select name="civil_status" class="form-control input-sm" id="animal" disabled  >
                <option value="<?php echo $show['civil_status']; ?>"><?php echo $show['civil_status']; ?></option>
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
          <input disabled type="text"  value="<?php echo $show['permanent_address']; ?>" class="form-control input-sm" name="permanent_address" id="name"   disabled>
    
                   
                  </div>
                </div>
                </div>
		               </div>

					   
					   <div class="row">
				

				<div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">8.CITIZENSHIP </span>

                             <input disabled type="text" value="<?php echo $show['citizenship']; ?>" name="citizenship" class="form-control input-sm" name="citizenship" id="name"   disabled>
                  </div>
                </div>
                </div>
				
				
				<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">ZIP CODE</span>
          <input disabled type="text" value="<?php echo $show['pa_zip_code']; ?>" class="form-control input-sm" name="pa_zip_code" id="name"   disabled>
                   
                  </div>
                </div>
                </div>

				
                </div>
				
				
				
			<div class="row">
				

				
								 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">9.HEIGHT (m)</span>
          <input disabled type="text"value="<?php echo $show['height']; ?>" class="form-control input-sm" name="height" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
						
					<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">19. TELEPHONE NO.	</span>
          <input disabled type="text" value="<?php echo $show['pa_telephone_no']; ?>" class="form-control input-sm" name="pa_telephone_no" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
				
                </div>
					   
					   
					   
					     <div class="row">
			
								 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">9.WEIGHT (kg)</span>
          <input disabled type="text" value="<?php echo $show['weight']; ?>" class="form-control input-sm" name="weight" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
				
				
				<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">20. E-MAIL ADDRESS (if any)	
</span>
          <input disabled type="text" value="<?php echo $show['e_mail_address']; ?>" class="form-control input-sm" name="e_mail_address" id="name"   disabled>
                   
                  </div>
                </div>
                </div>
                </div>
					   
					   
					     <div class="row">

				 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">11.BLOOD TYPE</span>
          <input disabled   type="text" value="<?php echo $show['blood_type']; ?>" class="form-control input-sm" name="blood_type" id="name"   />
                   
                  </div>
                </div>
                </div>

							<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">21. CELLPHONE NO. (if any)	
</span>
          <input disabled type="text" value="<?php echo $show['cellphone_no']; ?>" class="form-control input-sm" name="cellphone_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				
				  <div class="row">
				  
				  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">12.GSIS ID NO.</span>
          <input disabled type="text" value="<?php echo $show['gsis_id_no']; ?>" class="form-control input-sm" name="gsis_id_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				

				
		
				
				
						<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">22. AGENCY EMPLOYEE NO.	
</span>
          <input disabled type="text" value="<?php echo $show['agency_employee_no']; ?>" class="form-control input-sm" name="agency_employee_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				 <div class="row">
				

								  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">13.PAG-IBIG ID NO.</span>
          <input disabled type="text" value="<?php echo $show['pag_ibig_id_no']; ?>" class="form-control input-sm" name="pag_ibig_id_no" id="name"   />
                   
                  </div>
                </div>
                </div>
				
				
			
					<div class="col-lg-7">
				<div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">23. TIN	
</span>
          <input disabled type="text" value="<?php echo $show['tin']; ?>" class="form-control input-sm" name="tin" id="name"   />
                   
                  </div>
                </div>
                </div>
				
                </div>
				
				
				 <div class="row">
				

				  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">14.PHILHEALTH NO.</span>
          <input disabled type="text" value="<?php echo $show['philhealth_no']; ?>" class="form-control input-sm" name="philhealth_no" id="name"   />
                   
                  </div>
                </div>
                </div>

                </div>
				
				
				<div class="row">
				

													  	 <div class="col-lg-5">
				   <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">15.SSS NO.</span>
          <input disabled type="text" value="<?php echo $show['sss_no']; ?>" class="form-control input-sm" name="sss_no" id="name"   />
                   
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
                    <input disabled type="text" value="<?php echo $show['spouse_surname']; ?>" NAME="spouse_surname" class="form-control input-sm"  >
    
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
                    <input disabled type="text" value="<?php echo $show['spouse_firstname']; ?>" NAME="spouse_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
             
            

                    <input disabled type="text" value="<?php echo $show['name_child_1']; ?>" name="name_child_1" class="form-control input-sm"  >
                   
               
          
                </div>
				
				
				
				<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_1']; ?>" name="child_birth_1" class="form-control input-sm"  >
                </div>
				
				

					</div>
					
					
				
				
				
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME


</span>
                    <input disabled type="text" value="<?php echo $show['spouse_middlename']; ?>" name="spouse_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				  
              
                    <input disabled type="text" value="<?php echo $show['name_child_2']; ?>" name="name_child_2" class="form-control input-sm"  >

                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text"value="<?php echo $show['child_birth_2']; ?>" name="child_birth_2" class="form-control input-sm"  >
                </div>
				

					</div>
					
					
						<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">OCCUPATION



</span>
                    <input disabled type="text" value="<?php echo $show['spouse_occupation']; ?>" name="spouse_occupation" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				  
               
                    <input disabled type="text" value="<?php echo $show['name_child_3']; ?>" name="name_child_3" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_3']; ?>" name="child_birth_3" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">EMPLOYER/BUS. NAME




</span>
                    <input disabled type="text" value="<?php echo $show['spouse_employer_or_bus_name']; ?>" name="spouse_employer_or_bus_name" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
	
              
                    <input disabled type="text" value="<?php echo $show['name_child_4']; ?>" name="name_child_4" class="form-control input-sm"  >
                   
      
                </div>
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_4']; ?>" name="child_birth_4" class="form-control input-sm"  >
                </div>
				
				

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">BUSINESS ADDRESS





</span>
                    <input disabled type="text" value="<?php echo $show['business_address']; ?>" name="business_address" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
				
             
                    <input disabled type="text" value="<?php echo $show['name_child_5']; ?>" name="name_child_5" class="form-control input-sm"  >
                   
               
                </div>
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_5']; ?>" name="child_birth_5" class="form-control input-sm"  >
                </div>
				

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">TELEPHONE NO.
	
</span>
                    <input disabled type="text" value="<?php echo $show['bus_telephone_no']; ?>" name="bus_telephone_no" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>

				 <div class="col-lg-4">
 
                    <input disabled type="text" value="<?php echo $show['name_child_6']; ?>"name="name_child_6" class="form-control input-sm"  >
  
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_6']; ?>" name="child_birth_6" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				 
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">26. FATHER'S SURNAME	

	





</span>
                    <input disabled type="text" value="<?php echo $show['father_surname']; ?>" name="father_surname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php echo $show['name_child_7']; ?>" name="name_child_7" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_7']; ?>" name="child_birth_7" class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">FIRST NAME	
	

	





</span>
                    <input disabled type="text"  value="<?php echo $show['father_firstname']; ?>" name="father_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php  echo $show['name_child_8'];?>" name="name_child_8" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_8']; ?>" name="child_birth_8" class="form-control input-sm"  >
                </div>

					</div>
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME
	

	





</span>
                    <input disabled type="text" value="<?php echo $show['father_middlename']; ?>" name="father_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php echo  $show['name_child_9']; ?>" name="name_child_9" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_9']; ?>"name="child_birth_9" class="form-control input-sm"  >
                </div>

					</div>
						<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME
	

	





</span>
                    <input disabled type="text" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text"  value="<?php echo $show['name_child_10']; ?>" name="name_child_10" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_10'];?>"name="child_birth_10" class="form-control input-sm"  >
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
			
                   
                    <input disabled type="text"value="<?php echo $show['name_child_11']; ?>" name="name_child_11" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_11']; ?>"  name="child_birth_11"class="form-control input-sm"  >
                </div>

					</div>
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">SURNAME	

	

	





</span>
                    <input disabled type="text" value="<?php echo $show['mother_maiden_surname']; ?>" name="mother_maiden_surname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php echo $show['name_child_12']; ?>" name="name_child_12" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_12']; ?>"name="child_birth_12"class="form-control input-sm"  >
                </div>

					</div>
					
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">FIRST NAME	
	

	





</span>
                    <input disabled type="text"  value="<?php echo $show['mother_maiden_firstname']; ?>" name="mother_maiden_firstname" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php echo $show['name_child_13']; ?>" name="name_child_13" class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php echo $show['child_birth_13']; ?>" name="child_birth_13" class="form-control input-sm"  >
                </div>

					</div>
					
					
					
					<div class="row">
				
 <div class="col-lg-4">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
                    <span class="input-group-addon input-sm">MIDDLE NAME	
	

	





</span>
                    <input disabled type="text"value="<?php echo $show['mother_maiden_middlename']; ?>" name="mother_maiden_middlename" class="form-control input-sm"  >
    
                  </div>
                </div>
			     </div>
                </div>
				
				
				 <div class="col-lg-4">
			
                   
                    <input disabled type="text" value="<?php echo  $show['name_child_14']; ?>" name="name_child_14"  class="form-control input-sm"  >
                   
               
                </div>
				
						<div class="col-lg-4">

                    <input disabled type="text" value="<?php  echo $show['child_birth_14'];?>" name="child_birth_14" class="form-control input-sm"  >
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

               <textarea disabled  value="<?php echo $show['elementary_school_name']; ?>" name="elementary_school_name"class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['elementary_school_name']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				
 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea disabled  value="<?php echo $show['elementary_degree_course']; ?>"name="elementary_degree_course" class="form-control input-sm" rows="3" id="textArea"  >
		 <?php echo $show['elementary_degree_course']; ?>
		 </textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea disabled value="<?php echo $show['elementary_highest_grade']; ?>" name="elementary_highest_grade" class="form-control input-sm" rows="3" id="textArea"  >
		 <?php echo $show['elementary_highest_grade']; ?>
		 </textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea disabled  name="elementary_date_attendance" class="form-control input-sm" rows="3" id="textArea"  >
		  <?php echo $show['elementary_date_attendance']; ?>
		 </textarea>          	

</span>
              
                  </div>
                </div>
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">
         <textarea disabled name="elementary_scholarship"class="form-control input-sm" rows="3" id="textArea"  >
		 <?php echo $show['elementary_scholarship']; ?> 
		 </textarea>          	

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

               <textarea disabled name="secondary_school_name" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['secondary_school_name']; ?> 
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="secondary_degree_course" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['secondary_degree_course']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="secondary_highest_grade" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['secondary_highest_grade']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="secondary_date_attendace" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['secondary_date_attendace']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="secondary_scholarship" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['secondary_scholarship']; ?>
			   </textarea>
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

               <textarea disabled name="vocational_school_name" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['vocational_school_name']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="vocational_degree_course" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['vocational_degree_course']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="vocational_highest_grade" class="form-control input-sm" rows="3" id="textArea"  >
			   
			   <?php echo $show['vocational_highest_grade']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="vocational_date_attendance" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['vocational_date_attendance']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				<div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="vocational_scholarship" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['vocational_scholarship']; ?>
			   </textarea>
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

               <textarea disabled name="college_school_name" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['college_school_name']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="college_degree_course" class="form-control input-sm" rows="3" id="textArea"  >
			   <?php echo $show['college_degree_course']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="college_highest_grade" class="form-control input-sm" rows="3" id="textArea">
			   <?php echo $show['college_highest_grade']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="college_date_attendance" class="form-control input-sm" rows="3" id="textArea">
			   <?php echo $show['college_date_attendance']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="college_scholarship" class="form-control input-sm" rows="3" id="textArea">
			   <?php echo $show['college_scholarship']; ?> 
			   </textarea>
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

               <textarea disabled name="graduate_studies_school_name"class="form-control input-sm" rows="3" id="textArea">
			   <?php echo $show['graduate_studies_school_name']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="graduate_studies_degree_course"class="form-control input-sm" rows="3" id="textArea"  disabled>
			   <?php echo $show['graduate_studies_degree_course']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="graduate_studies_highest_grade" class="form-control input-sm" rows="3" id="textArea"disabled>
			   <?php echo $show['graduate_studies_highest_grade']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
                </div>
				
				 <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea disabled name="graduate_studies_date_attendance"class="form-control input-sm" rows="3" id="textArea"  disabled>
			   <?php echo $show['graduate_studies_date_attendance']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
				 
			     </div>
				 
				 
				  <div class="col-lg-2">
	                <div class="form-group">
                
       <div class="form-group">
             
                  <div class="input-group">

               <textarea  name="graduate_studies_scholarship" class="form-control input-sm" rows="3" id="textArea" disabled>
			   <?php echo $show['graduate_studies_scholarship']; ?>
			   </textarea>
                  </div>
                </div>
				
				
				
			     </div>
				 
			     </div>
			     </div>
						</div>
					<!--down tabs of 1st tab-->
				
			

												

													
</div>
  

  
  
      </div>
</div>	
</div>	
			
			      			

				
						<?php	} ?>					

      
<!--- end line-->	    


					
					
						
              


				    
					
					
				<div class="row">
				 <div class="col-lg-4">
      
     

        <fieldset>
		&nbsp;&nbsp;
		
		
					<?php	
		include('db_con.php');
		
		$employee_id=$_POST['employee_id'];
		
		
		$emp=(" select * from employee where employee_id='$employee_id' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
		<form action="print_info.php" method="post" >

	<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>" >
	

		<button type="submit"  id="submit" name="save" class="btn btn-primary btn-sm" style="margin-left:30px;"><i class="fa fa-save fa-1x"></i>&nbsp;Print</button>
           </form>
		   	<?php } ?>
        </fieldset>   
		  </div>
   </div>		
   
     
        </div>
        </div>


       
 


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
		
           <!--   <p>Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him at <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>
-->
          </div>
        </div>
        
      </footer>
    
     </div>
    </div>



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
	 $("#hide_me").slideToggle();
	 $("#hide_table").slideToggle();

  });
  
  

  
});
</script>
	
	
	
  </body>
</html>