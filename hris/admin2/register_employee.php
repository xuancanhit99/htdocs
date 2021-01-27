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
			   <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employee <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li> <a data-toggle="modal" href="#myModal" > &nbsp;&nbsp;Add Employe</a></li>

                
                  </ul>
                </li>
			
    <li> <a data-toggle="modal" href="#payroll" > &nbsp;&nbsp;	Search Payroll</a></li>
			 
			 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Salary <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  <!--  <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll </a></li>-->
                       <li> <a href="salary_list.php" > &nbsp;&nbsp;	 Salary  List</a></li>
                       <li> <a data-toggle="modal" href="#salary_rate" > &nbsp;&nbsp;	 Salary  Rate</a></li>
                     
                
                  </ul>
                </li>
      
	  
	  	 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Department <b class="caret"></b></a>
                  <ul class="dropdown-menu">
				  <!--  <li> <a href="payroll_list.php" > &nbsp;&nbsp;	 Payroll </a></li>-->
                    <li><a href="department.php">Department</a></li>
                       <li> <a data-toggle="modal" href="#dept" > &nbsp;&nbsp;	 Add Department</a></li>
                     
                
                  </ul>
                </li>
                
				
          
               
				               
									
              </ul>
						
			<ul class="nav navbar-nav navbar-right">
					 			
					<p><div style="color:white; font-size:25xp;">
					</div><div style="color:white; font-size:20xp;"> 	Welcome  &nbsp;&nbsp;&nbsp;
					<?php

				$query=("select * from employee where position='HR-Manager' order by position ASC" );
				
				$result = $mysqli->query($query);
				
				$rowp = $result->fetch_array(MYSQLI_ASSOC);
			
				 ?>
					
					
				<?php echo $rowp['firstname']." " .$rowp['lastname'] ;  ?>
					  &nbsp; <a data-toggle="modal" href="#logout" class="btn btn-info btn-sm"> &nbsp;<i class="glyphicon glyphicon-log-out"></i>&nbsp;	 Logout </a>

	
	
 
  
  
  
  
  
					</div> </p>
				
			</ul>
            </div>
          </div>
        </div>

      </div>
    </div>
	
	




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
</br>
</br>
    <div class="container marketing">
<div class="row">


  <form action="welcome.php" method="POST" onsubmit="return validateForm()">
        <fieldset>
            <label for="name">FirstName</label>
            <input type="text" name="name" id="name"  onblur="validateName(name)" />
            <span id="nameError" style="display: none; color:red;">You can only use alphabetic characters, space, hyphens and apostrophes</span>
        </fieldset>
		
		
		<!-- Lastname-->
		    <fieldset>
            <label for="name">Lastname</label>
            <input type="text" name="Lastname" id="Lastname" onblur="validateLastname(Lastname)" />
            <span id="LastnameError" style="display: none;color:red;">You can only use alphabetic characters, space, hyphens and apostrophes</span>
        </fieldset>
		
		
				
		<!-- Middlename-->
		    <fieldset>
            <label for="name">Middlename</label>
            <input type="text" name="Middlename" id="Middlename" onblur="validateMiddlename(Middlename)" />
            <span id="MiddlenameError" style="display: none;color:red;">You can only use alphabetic characters, space, hyphens and apostrophes</span>
        </fieldset>
		
        <fieldset>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" onblur="validateEmail(value)" />
            <span id="emailError" style="display: none;color:red;">You must enter a valid email address</span>
        </fieldset>  
        <fieldset>
            <label for="animal">Gender</label>
            <select name="animal" id="animal" onblur="validateSelect(name)">
                <option value="">Sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <span class="validateError" id="animalError" style="display: none;color:red;">You must select your gender</span>
        </fieldset>
		<fieldset>
            <label for="name">Username</label>
            <input type="text" name="user" id="user" onblur="validateuser(user)" />
            <span id="userError" style="display: none;color:red;">You must enter your username</span>
        </fieldset>
		<fieldset>
            <label for="name">Password</label>
            <input type="password" name="password" id="password" onblur="validatepassword(password)" />
            <span id="passwordError" style="display: none;color:red;">You must enter your password</span>
        </fieldset>
		<fieldset>
            <label for="name">Re-enter Password</label>
            <input type="password" name="repassword" id="repassword" onblur="validaterepassword(repassword)" />
            <span id="repasswordError" style="display: none;color:red;">Password mismatch</span>
        </fieldset>
        <fieldset>
            <label for="terms">Terms and Conditions</label>
            <ul>
                <li>
                    <input type="checkbox" name="terms" id="accept" value="accept" onblur="validateCheckbox(id)" />
                    <label for="accept">Accept our <a href="#">Terms and Conditions</a></label>
                </li>
            </ul>
            <span class="validateError" id="termsError" style="display: none;">You need to accept our terms and conditions</span>
        </fieldset>      
        <fieldset>
            <input type="submit" id="submit" name="submit" value="Submit" />
        </fieldset>      
    </form>






</div>

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer></BR>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 , Victorias National High School. &middot;</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	<?php include('js_plg_ins.php'); ?> 
  </body>
</html>
