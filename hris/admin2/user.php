<!DOCTYPE html>
<?php
include('session2.php');
?>
<html lang="en">
  <head>
    <title>Victorias National High School Human Resource Integrated System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" media="screen">
<link rel="shortcut icon" href="../image/viclogo.jpg">
<link rel="stylesheet" href="date-picker/css/datepicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="date-picker/css/layout.css" />
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
	<script type="text/javascript" src="date-picker/js/jquery.js"></script>
	<script type="text/javascript" src="date-picker/js/datepicker.js"></script>
    <script type="text/javascript" src="date-picker/js/eye.js"></script>
    <script type="text/javascript" src="date-picker/js/utils.js"></script>
    <script type="text/javascript" src="date-picker/js/layout.js?ver=1.0.2"></script>

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
              <a href="#" >&nbsp;<b>EMPLOYEE INFORMATION	</b></a>
            </li>
		
			<li>
              <a href="user_credits.php" >&nbsp;<b>CREDITS	</b></a>
            </li>
			
            <li >
              <a href="user_attendance.php"> <b>My Attendance</b></a>
            </li>
			
			
            
          </ul>

          <ul class="nav navbar-nav navbar-right">


	
	 <li>
	 <div class="col-lg-2" style="color:white;font-size:25px;line-height:55px; "> Welcome  </div> 
	  </li>
	  <li>

	  
              <a href="#" >&nbsp;<b> <?php 
	  $user=$_SESSION['employee_id']; 

	 	$emp=(" select * from employee where employee_id='$user' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		{
	 
	  echo $show['firstname']." ".$show['surname']." ".$show['middlename'];

		}		;	  ?>
	
		
		</b></a>
          
	
	 </li>
	

            <li>     <a href="Salary.php" ><i class="fa fa-sign-out fa-1x"></i>&nbsp;<b>LOGOUT</b>	</a></li>
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

        <div class="row" style="background-color:white; padding:25px; border-radius:1px; margin-top:-100px; min-height:1000px;">
          <div class="col-lg-12">
         

            <div class="bs-example table-responsive">
             
                     
	 <div class="panel panel-success">
              <div class="panel-heading">
                <h3 class="panel-title">I.My Personal Information </h3>
              </div>
              <div class="panel-body">
  
              <div class="tab-content">

  <div style="overflow:scroll; height:900px; border:solid black 0px ">
  <div id="pds_1">
				
					 
					 
		
            
      
	  	<?php	
		include('db_con.php');
		
		$employee_id=$_SESSION['employee_id']; 
		
		
		$emp=(" select * from employee where employee_id='$employee_id' ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
				
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

<?php } ?>
			
						</div>
						</div>
						
						
            </div><!-- /example -->
          </div>
		
        </div>
      </div>


 
  
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

<div class="modal fade" id="print" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<form method="POST"  action="attendance_report.php">   
   <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  	<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Name:</span>
     
                
		<select name="name" class="form-control input-sm" id="animal"  onchange="showUser(this.value)"/>
                <option value=""></option>
				
	 	<?php	
		include('db_con.php');
		
		$emp=(" SELECT distinct(name) from attendance") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{
		
	?>
	 	
                <option value="<?php  echo $show['name'];  ?>">
				<?php  echo $show['name'];  ?>
				</option>
 
<?php } ?>         

		 </select>
		 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				  	<div class="txtHint">
				  	<div class="row">
			 
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Month:</span>
     
                
		<select name="month" class="form-control input-sm" id="animal"  />
                <option value=""></option>
                <option value="01">January</option>
                <option value="02">Febraury</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
				
	
	 	
                <option value="">
			
				</option>
 
     

		 </select>
		 
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
                    <span class="input-group-addon input-sm" >Year:</span>
     
                
		<select name="year" class="form-control input-sm" id="animal"  />
                <option value=""></option>
				
	
	 	
                <option value="2013"></option>
                <option value="2014"></option>
 
     

		 </select>
		 
                  </div>
                </div>
			     </div>
                </div>
                </div>
                </div>
             
	
		

		     <h4 class="modal-title"><center>
			 
			 </center></h4>
   
				
				<input type="hidden" name="attendance_id" value="<?php echo $show['attendance_id']; ?>">
		</br>
        </div>

        <div class="modal-footer">
      

  
          <button type="submit" name="preview" class="btn btn-info">Print Preview</button>
	  		  
				  </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
	</form>
  </div><!-- /.modal -->

  <script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="bootswatch.js"></script>
	
	<script src="js/jquery.js" type="text/javascript"></script>


<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/bootstrap-dataTables-paging.js"></script>

	
	
  </body>
</html>