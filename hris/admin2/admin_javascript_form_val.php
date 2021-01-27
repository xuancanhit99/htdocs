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
      <div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">

            <div class="bs-example table-responsive">
             
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
               <div class="alert alert-dismissable alert-success">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i><center>&nbsp;EMPLOYEE LIST</center></strong>
                            </div>
                                                    
						   <thead>
                                <tr>
        	<th>firstname</th>
	<th>lastname</th>
	<th>middlename</th>
	<th>Payroll</th>
	<th>DTR</th>
	
									
                                   
                                </tr>
                            </thead>
                            <tbody>
<form 	 method="POST">
	 	<?php	
		include('db_con.php');
		
		
		
		
		$emp=(" select * from employee ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
	 <tr>
	 <td><a href="E_D_emp.php <?php  echo '?emp='.$id;?>	 "><?php  echo $show['firstname']." ".$show['middlename']." ".$show['lastname'];  ?></a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?>  "><?php  echo $show['lastname'];  ?> </a></td>
	 <td> <a href="E_D_emp.php <?php echo '?emp='.$id;?> "> <?php  echo $show['middlename'];  ?> <a/></td>
		 <td> <a href="payroll.php <?php echo '?access='.$id;?> "><i class="glyphicon glyphicon-<?php echo $show['payroll_status']; ?>"></i></a></td>
<td><center> <a href="Salary.php<?php echo '?emp='.$id;?>">DTR</a></center></td>

												
										
                                      
                                       
                                    </tr>

			
						<?php	} ?>					
</form>
                            </tbody>
                        </table>
						
						
            </div><!-- /example -->
          </div>
        </div>
      </div>

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
	   
      <div class="bs-docs-section" >

	
	      <button type="button" class="btn btn-info" id="hide_btn">EMPLOYEE</button>
		  </br>
		  </br>
	
        <div class="row" id="hide_me"  style="">
		<div>
		
		 <form action="welcome.php" method="POST" onsubmit="return validateForm()" >
		 
		   <script>
		   
		   function validatename_extension(name_extension){
            var userid=document.getElementById('name_extension');
			  var uu=userid.value;
			  var chrlen=uu.length;
			  if(chrlen==0)  {
				document.getElementById('name_extension').style.background ='#e35152';
			   return false;
				}
				else{
				document.getElementById('name_extension').style.background ='#ccffcc';
                document.getElementById('name_extensionError').style.display = "none";
                return true;
				}
        }
		   
		   
		   
        function validateName(x){
            // Validation rule
			  var userid=document.getElementById('name');
			   var uu=userid.value;
			  var chrlen=uu.length;
            var re = /^[a-zA-Z]+$/;
			
            // Check input
            if(re.test(document.getElementById(x).value)){
                // Style green
                document.getElementById(x).style.background ='#ccffcc';
                // Hide error prompt
                document.getElementById(x + 'Error').style.display = "none";
                return true;
            }
			

				
			
			else{
                // Style red
                document.getElementById(x).style.background ='#FFFFFF';
                // Show error prompt
                document.getElementById(x + 'Error').style.display = "block";
                return false;  
            }
        }

		// Validate lastname
		function validateuser(user){
          //  var userid=document.getElementById('user');
			//  var uu=userid.value;
			//  var chrlen=uu.length;
			    var res = /^[a-zA-Z]+$/;
			    if(res.test(document.getElementById('user').value)){
                // Style green
                document.getElementById('user').style.background ='#ccffcc';
                // Hide error prompt
                document.getElementById('user' + 'Error').style.display = "none";
                return true;
            }
				else{
                // Style red
                document.getElementById('user').style.background ='#FFFFFF';
                // Show error prompt
                document.getElementById('user' + 'Error').style.display = "block";
                return false;  
            }
        }
	
	        function val(middlename){
            // Validation rule
            var re2 = /^[a-zA-Z]+$/;
            // Check input
            if(re2.test(document.getElementById('mid').value)){
                // Style green
                document.getElementById('mid').style.background ='#ccffcc';
                // Hide error prompt
                document.getElementById('mid' + 'Error').style.display = "none";
                return true;
            }else{
                // Style red
                document.getElementById('mid').style.background ='#FFFFFF';
                // Show error prompt
                document.getElementById('mid' + 'Error').style.display = "block";
                return false;  
            }
        }
		
			  function val_age(age){
            // Validation rule
            var re_age = /^\d+$/;
            // Check input
            if(re_age.test(document.getElementById('age').value)){
                // Style green
                document.getElementById('age').style.background ='#ccffcc';
                // Hide error prompt
                document.getElementById('age' + 'Error').style.display = "none";
                return true;
            }else{
                // Style red
                document.getElementById('age').style.background ='#FFFFFF';
                // Show error prompt
                document.getElementById('age' + 'Error').style.display = "block";
                return false;  
            }
        }

		  function val_Address(Address){
            // Validation rule
			
			      var pass=document.getElementById('Address');
			  var wordsss=pass.value;
			  var chr=wordsss.length;
         
            // Check input
          if(chr==0)  {
				document.getElementById('Address').style.background ='#FFFFFF';
			   return false;
				}
				else{
				document.getElementById('Address').style.background ='#ccffcc';
                document.getElementById('AddressError').style.display = "none";
                return true;
				}
        }
				
		// Validate password
		function validatepassword(password){
            var pass=document.getElementById('password');
			  var wordsss=pass.value;
			  var chr=wordsss.length;
			  if(chr==0)  {
				document.getElementById('password').style.background ='#e35152';
			   return false;
				}
				else{
				document.getElementById('password').style.background ='#ccffcc';
                document.getElementById('passwordError').style.display = "none";
                return true;
				}
        }
		// Validate re-enter password
		function validaterepassword(repassword){
            var pawd1=document.getElementById('password');
			  var pawdcon2=document.getElementById('repassword');
			  
			 if(pawdcon2.value.length==0)  {
				document.getElementById('repassword').style.background ='#e35152';
			   return false;
				}
			   
			 else if(pawd1.value!=pawdcon2.value)
			  {
				document.getElementById('repassword').style.background ='#e35152';
			   return false;
			  }
			 else{
				document.getElementById('repassword').style.background ='#ccffcc';
                document.getElementById('repasswordError').style.display = "none";
                return true;
			 }
        }
        // Validate email
        function validateEmail(email){
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(re.test(email)){
                document.getElementById('email').style.background ='#ccffcc';
                document.getElementById('emailError').style.display = "none";
                return true;
            }else{
                document.getElementById('email').style.background ='#e35152';
                return false;
            }
        }
        // Validate Select boxes
        function validateSelect(x){
            if(document.getElementById(x).selectedIndex !== 0){
                document.getElementById(x).style.background ='#ccffcc';
                document.getElementById(x + 'Error').style.display = "none";
                return true;
            }else{
                document.getElementById(x).style.background ='#FFFFFF';
                return false;  
            }
        }
		
        function validateCheckbox(x){
            if(document.getElementById(x).checked){
                return true;
            }
            return false;
        }      
        function validateForm(){
            // Set error catcher
            var error = 0;
            // Check name
            if(!validateName('name')){
                document.getElementById('nameError').style.display = "block";
                error++;
            }
			       
	         // Check name_extension
            if(!validatename_extension(name_extension)){
                document.getElementById('name_extensionError').style.display = "block";
                error++;
            }
			
			
            // Validate email
            if(!validateEmail(document.getElementById('email').value)){
                document.getElementById('emailError').style.display = "block";
                error++;
            }
            // Validate animal dropdown box
            if(!validateSelect('animal')){
                document.getElementById('animalError').style.display = "block";
                error++;
            }
			
			
			// Check lastname
            if(!validateuser('user')){
                document.getElementById('userError').style.display = "block";
                error++;
            }
			

			
						// Check lastname
            if(!val('mid')){
                document.getElementById('midError').style.display = "block";
                error++;
            }
			
							// Check age
            if(!val_age('age')){
                document.getElementById('ageError').style.display = "block";
                error++;
            }
			
							// Check address
            if(!val_Address('Address')){
                document.getElementById('AddressError').style.display = "block";
                error++;
            }
	
	
			// Check password
            if(!validatepassword('password')){
                document.getElementById('passwordError').style.display = "block";
                error++;
            }
			// Check re-enter password
            if(!validaterepassword('repassword')){
                document.getElementById('repasswordError').style.display = "block";
                error++;
            }
            // Validate Radio
            if(!validateCheckbox('accept')){
                document.getElementById('termsError').style.display = "block";
                error++;
            }
            // Don't submit form if there are errors
            if(error > 0){
                return false;
            }
			if(error < 0){
                var id=document.getElementById('fld');
                 id.innerHTML="<center><h1><font color=green>Welcome to HScripts.com</h1><br><h4><font color=red>Submission Successful!</font></h4></center>";
            }
        }          
    </script>
	

    
	<div class="row">
	            <div class="page-header">
            <center>  <h2 id="type"> <B>PERSONAL DATA SHEET </B></h2> </center>
            </div>
			        <div class="page-header">
					<i>I.PERSONAL INFORMATION </i>
					         </div>
			
			
			 <div class="col-lg-2">
					  <div class="well">
			   
			<label class="control-label" for="inputDefault"> 2. &nbsp;&nbsp;SURNAME:</label>
			  
			
			  </DIV>
			  </DIV>
								 <div class="col-lg-10">
	                <div class="form-group">
                
            <input type="text" class="form-control" name="lastname" id="user" onblur="validateuser(user)" />
			       <span id="userError" style="display: none;color:red"><i>* You can only use alphabetical characters in Surname</i></span>
      
                </div>
                </div>
    </div>
			
			
			
				<div class="row">
				
					 <div class="col-lg-2">
					  <div class="well">
			  <label class="control-label" for="inputDefault">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  FIRSTNAME:</label>
			  </DIV>
			  </DIV>
				
				
	 <div class="col-lg-10">
	            
                    <div class="form-group">
             <input type="text" class="form-control" name="name" id="name" onchange="validateName(name)" />
			       <span id="nameError" style="display: none; color:red"><i>* You can only use alphabetical characters in Firstname</i></span>
      
               
                </div>
                </div>
                </div>

				

				
		
				<div class="row">
				
					 <div class="col-lg-2">
					  <div class="well">
			  <label class="control-label" for="inputDefault">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MIDDLENAME:</label>
			  </DIV>
			  </DIV>
				
				 <div class="col-lg-5">
	                <div class="form-group">
                
            <input type="text" class="form-control" name="middlename" id="mid" onblur="val(middlename)" />
			       <span id="midError" style="display: none;color:red"><i>* You can only use alphabetical characters in Middlename</i></span>
      
                </div>
                </div>
				
        	 <div class="col-lg-3">

			 
			 
			 
			 
			     <div class="well">
			  
			<B>
			3. NAME EXTENSION(e.g. Jr.,Sr. )
			</B>		
			 
	
			</div>
			  </div>	
				
			    	 <div class="col-lg-2">	
				 <input type="text" class="form-control" name="name_extension" id="name_extension"  onblur="validatename_extension(name_extension)"/>
				     <span id="name_extensionError" style="display: none;color:red"><i>* Don't leave this field empty</i></span>
					</div>
					</div>
				
				
		      	
				
				
			<!--	 <div class="col-lg-4">
	                <div class="form-group">
                  <label class="control-label" for="inputDefault">Birthdate</label>
            <input type="text" class="form-control" name="Address" id="Address" onblur="val_Address(Address)" />
			       <span id="AddressError" style="display: none;color:red">You can only use alphabetic characters, space, hyphens and apostrophes</span>
      
                </div>
                </div>
				-->
					<div class="row">
						 <div class="col-lg-3">
					 <div class="well">
			  
				<B>4. DATE OF BIRTH (MM/DD/YY) </B>
			</div>
			
			  </div>
			  
			  				 <div class="col-lg-2">
	                <div class="form-group">
                
            <input type="text" class="form-control" name="middlename" id="mid" onblur="val(middlename)" />
			       <span id="midError" style="display: none;color:red"><i>* You can only use alphabetical characters in Middlename</i></span>
      
                </div>
                </div>
				
								 <div class="col-lg-3">
					 <div class="well">
			  
				<B>16.RESIDENTIAL ADDRESS </B>
			</div>
				  </div>
			
					 <div class="col-lg-4">
	                <div class="form-group">
                
          <textarea class="form-control" rows="3" id="textArea"></textarea>
                     
			  <span id="midError" style="display: none;color:red"><i>* You can only use alphabetical characters in Middlename</i></span>
      
                </div>
                </div>
		
					
					</div>
				
			  
			  
				
<div class="row">
				
				
					 <div class="col-lg-4">
	                <div class="form-group">
                  <label class="control-label" for="inputDefault">Age</label>
            <input type="text" class="form-control" name="age" id="age" onblur="val_age(age)" />
			       <span id="ageError" style="display: none; color:red"><i>* You can only use numbers in Age</i></span>
      
                </div>
                </div>
			
				
					 <div class="col-lg-4">
				     <div class="form-group">
				<div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Gender</label>
                    <div class="col-lg-16">
				
					  
            <select name="animal" class="form-control" id="animal" onblur="validateSelect(animal)">
                <option value=""></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
					   <span class="validateError" id="animalError" style="display: none; color:red"><i>* You must select your gender</i></span>
                      <br>
                     
                    </div>
                  </div>
				</div>
				</div>
				
			
				   
				   
						
				
							 <div class="col-lg-4">
	                <div class="form-group">
                  <label class="control-label" for="inputDefault">Address</label>
            <input type="text" class="form-control" name="Address" id="Address" onblur="val_Address(Address)" />
			       <span id="AddressError" style="display: none;color:red"><i>* This Field is required</i></span>
      
                </div>
                </div>
         
		 	   </div>
				
				    
				<div class="row">
				 <div class="col-lg-4">
      
   <fieldset>
            <label for="email">Email</label>
            <input type="text" name="email" id="email" onblur="validateEmail(value)" />
            <span id="emailError" style="display: none;">* You must enter a valid email address</span>
        </fieldset>  
		

		 <div class="col-lg-4">
		<fieldset>
            <label for="name">Password</label>
            <input type="password" name="password" id="password" onblur="validatepassword(password)" />
            <span id="passwordError" style="display: none;">You must enter your password</span>
        </fieldset>
		  </div>
		
		 <div class="col-lg-4">
		<fieldset>
            <label for="name">Re-enter Password</label>
            <input type="password" name="repassword" id="repassword" onblur="validaterepassword(repassword)" />
            <span id="repasswordError" style="display: none;">Password mismatch</span>
        </fieldset>
		  </div>
		
		 <div class="col-lg-4">
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
		<button type="submit"  id="submit" name="submit" class="btn btn-primary"><i class="fa fa-save fa-1x"></i>&nbsp;SAVE</button>
           
        </fieldset>   
		  </div>
   </div>		
    </form>
     
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
            <p>Made by <a href="http://thomaspark.me">Thomas Park</a>. Contact him at <a href="mailto:hello@thomaspark.me">hello@thomaspark.me</a>.</p>
            <p>Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0">Apache License v2.0</a>.</p>
            <p>Based on <a href="http://getbootstrap.com">Bootstrap</a>. Icons from <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>. Web fonts from <a href="http://www.google.com/webfonts">Google</a>. Favicon by <a href="https://twitter.com/geraldhiller">Gerald Hiller</a>.</p>

          </div>
        </div>
        
      </footer>
    

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

  });
  
  

  
});
</script>
	
	
	
  </body>
</html>