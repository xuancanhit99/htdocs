<script>


 function net_sum()
 {
  var gross_income = document.getElementById('gross_income');
  var earned_period = document.getElementById('earned_period');
  var csb_loan= document.getElementById('csb_loan');
  
  var pvb_loan= document.getElementById('pvb_loan');
  var w_holding= document.getElementById('w_holding');
  var ret_ins= document.getElementById('ret_ins');
  
  var salary_loan= document.getElementById('salary_loan');
  var policy_loan= document.getElementById('policy_loan');
  var med= document.getElementById('med');
  
  var hdmf_pre= document.getElementById('hdmf_pre');
  var sos_ecard_plus= document.getElementById('sos_ecard_plus');
  var uoli_educ= document.getElementById('uoli_educ');
  
  var ceap_pre_need= document.getElementById('ceap_pre_need');
  var ucpb_loan= document.getElementById('ucpb_loan');
  var assoc_dues_coop= document.getElementById('assoc_dues_coop');
  
  var integ_mngt_ser= document.getElementById('integ_mngt_ser');
  var net_amt= document.getElementById('net_amt');
  var net_amt_dis= document.getElementById('net_amt_dis');
  
  var f1_total= document.getElementById('f1_total');
  var f2_total= document.getElementById('f2_total');

  
  { 
f1_total.value =  

			   parseFloat(csb_loan.value) +	parseFloat(pvb_loan.value) + parseFloat(w_holding.value) + parseFloat(ret_ins.value) +
				
				parseFloat(salary_loan.value) + parseFloat(policy_loan.value) + parseFloat(med.value) +
				
				parseFloat(hdmf_pre.value) + parseFloat(sos_ecard_plus.value) + parseFloat(uoli_educ.value) +
				
				parseFloat(ceap_pre_need.value) + parseFloat(ucpb_loan.value) + parseFloat(assoc_dues_coop.value) +
				
				parseFloat(integ_mngt_ser.value)  ; 
				
				
				
	net_amt.value =   parseFloat(earned_period.value) - parseFloat(f1_total.value);
	
	net_amt_dis.value = parseFloat(net_amt.value);

  } 
 }
 
 
 
 function salary_rate()
 {  var daily_rate = document.getElementById('daily_rate');
	var month_rate = document.getElementById('month_rate');
  var hourly_rate = document.getElementById('hourly_rate');
   var min_rate = document.getElementById('min_rate');
   var hour = document.getElementById('hour');
   var min = document.getElementById('min');
   var month = document.getElementById('month');

   
   
   {
   hourly_rate.value=  parseFloat(daily_rate.value)/ parseFloat(hour.value);
   min_rate.value=  parseFloat(hourly_rate.value)/ parseFloat(min.value);
   month_rate.value=  parseFloat(daily_rate.value)* parseFloat(month.value);
   
   }
 
 
 }
 
 
 function salary_rate2()
 {  var daily_rate = document.getElementById('daily_rate2');
	var month_rate = document.getElementById('month_rate2');
  var hourly_rate = document.getElementById('hourly_rate2');
   var min_rate = document.getElementById('min_rate2');
   var hour = document.getElementById('hour2');
   var min = document.getElementById('min2');
   var month = document.getElementById('month2');

   
   
   {
   hourly_rate.value=  parseFloat(daily_rate.value)/ parseFloat(hour.value);
   min_rate.value=  parseFloat(hourly_rate.value)/ parseFloat(min.value);
   month_rate.value=  parseFloat(daily_rate.value)* parseFloat(month.value);
   
   }
 
 
 }
 
 
    function validateName(x){
            // Validation rule
            var re = /[A-Za-z -']$/;
            // Check input
            if(re.test(document.getElementById(x).value)){
                // Style green
                document.getElementById(x).style.background ='#ccffcc';
                // Hide error prompt
                document.getElementById(x + 'Error').style.display = "none";
                return true;
            }else{
                // Style red
                document.getElementById(x).style.background ='#e35152';
                // Show error prompt
                document.getElementById(x + 'Error').style.display = "block";
                return false;  
            }
        }
		
		
		

		
		
		
		
		// Validate Lastname
		function validateLastname(Lastname){
            var userid=document.getElementById('Lastname');
			  var uu=userid.value;
			  var chrlen=uu.length;
			  if(chrlen==0)  {
				document.getElementById('Lastname').style.background ='#e35152';
			   return false;
				}
				else{
				document.getElementById('Lastname').style.background ='#ccffcc';
                document.getElementById('LastnameError').style.display = "none";
                return true;
				}
        }
		
		
		
		
			
		// Validate Middlename
		function validateMiddlename(Middlename){
            var userid=document.getElementById('Middlename');
			  var uu=userid.value;
			  var chrlen=uu.length;
			  if(chrlen==0)  {
				document.getElementById('Middlename').style.background ='#e35152';
			   return false;
				}
				else{
				document.getElementById('Middlename').style.background ='#ccffcc';
                document.getElementById('MiddlenameError').style.display = "none";
                return true;
				}
        }
		
		
		
		// Validate username
		function validateuser(user){
            var userid=document.getElementById('user');
			  var uu=userid.value;
			  var chrlen=uu.length;
			  if(chrlen==0)  {
				document.getElementById('user').style.background ='#e35152';
			   return false;
				}
				else{
				document.getElementById('user').style.background ='#ccffcc';
                document.getElementById('userError').style.display = "none";
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
                document.getElementById(x).style.background ='#e35152';
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
			
			    // Check Lastname
			  if(!validateName('Lastname')){
                document.getElementById('LastnameError').style.display = "block";
                error++;
            }
			
			
					    // Check Middlename
			  if(!validateName('Middlename')){
                document.getElementById('MiddlenameError').style.display = "block";
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
			// Check user
            if(!validateuser('user')){
                document.getElementById('userError').style.display = "block";
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