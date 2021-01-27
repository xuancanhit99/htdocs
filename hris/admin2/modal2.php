<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Employee's Personal Information</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="addemployee_data.php">
		
		Username: <input type="text" name="Username" class="form-control"></br>
        Password: <input type="password" name="Password" class="form-control" ></br>
        Firstname: <input type="text" name="Firstname" class="form-control" ></br>
        Lastname: <input type="text" name="Lastname" class="form-control"></br>
        Middlename: <input type="text" name="Middlename" class="form-control"></br>
        Address: <input type="text" name="address" class="form-control"></br>
        Age: <input type="text" name="age" class="form-control"></br>
        Birthdate: <input type="text" name="Birthdate" class="form-control"></br>
        Birthplace: <input type="text" name="Birthplace" class="form-control"></br>
        Contact No.: <input type="text" name="contact"class="form-control" ></br>
        TIN No.: <input type="text" name="TIN" class="form-control"></br>
        SSS No.: <input type="text" name="SSS" class="form-control"></br>
        Pag-ibig No.: <input type="text" name="pagibig" class="form-control"></br>
        civil Status: <input type="text" name="civil_status" class="form-control"></br>
        Religion: <input type="text" name="religion" class="form-control"></br>
        Date Employed: <input type="text" name="date_emp" class="form-control"></br>
        Gender: <select name="gender" class="form-control"> 
					<option></option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select></br>
				
				Department: <select name="department" class="form-control"> 
					<option></option>
					<option value="male">Department1</option>
					<option value="female">Department2</option>
				</select></br>
				
					
				Position: <select name="position" class="form-control"> 
					<option></option>
					<option value="HR_Manager">HR Manager</option>
					<option value="Teacher">Teacher</option>
					<option value="Jonitor">Jonitor</option>
				</select></br>
				
				Emplyee Status: <select name="emp_status" class="form-control"> 
					<option></option>
					<option value="HR_Manager">status A</option>
					<option value="Teacher">status B</option>
					<option value="Jonitor">status C</option>
				</select></br>
				
			
				<label for="file">Photo:</label>
          <input type="file" name="file" id="file" class="form-control"><br>
		  


   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  
  
  <div class="modal fade" id="salary_rate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Salary Rate</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="addsalary_data.php">
		
		
				Position: <input type="text"value="" id="position" name="position" class="form-control" ></br>
				
		Daily Rate: <input type="text" value="0" id="daily_rate" name="daily_rate" class="form-control" onchange="salary_rate()" ></br>
		
		Monthly Rate: <input type="text"value="0" id="month_rate" name="month_rate" class="form-control" ></br>
		
		Hourly Rate:  <input type="text"value="0"  id="hourly_rate" name="hourly_rate" class="form-control" ></br>
		
		 Minute Rate: <input type="text" value="0" id="min_rate" name="min_rate" class="form-control" ></br>


		<input type="hidden" id="hour" name="hour" class="form-control" value="8"></br>
		
		<input type="hidden" id="min" name="min" class="form-control" value="60"></br>
		
		<input type="hidden" id="month" name="month" class="form-control" value="20"></br>

   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  <div class="modal fade" id="deduction_rate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Deduction Rate</center></h4>
        </div>
        <div class="modal-body">
     

		<form method="POST" action="adddeduction_data.php">
		
		
		
		Absent: <input type="text" value="0" id="daily_rate" name="daily_rate" class="form-control" onchange="salary_rate()" ></br>
		
		Monthly Rate: <input type="text"value="0" id="month_rate" name="month_rate" class="form-control" ></br>
		
		Hourly Rate:  <input type="text"value="0"  id="hourly_rate" name="hourly_rate" class="form-control" ></br>
		
		 Minute Rate: <input type="text" value="0" id="min_rate" name="min_rate" class="form-control" ></br>


		<input type="hidden" id="hour" name="hour" class="form-control" value="8"></br>
		
		<input type="hidden" id="min" name="min" class="form-control" value="60"></br>
		
		<input type="hidden" id="month" name="month" class="form-control" value="20"></br>

   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="save">Save changes</button>
		  </form>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  
  
   <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  
	  	
	
		

		     <h4 class="modal-title"><center>Are you sure you want to logout2?</center></h4>
   
				
				
		</br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          <a href="ses_des2.php"><button class="btn btn-danger">Logout</button></a>
		  		          </div>
		


		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  
  
  