<?php	include('db_con.php');

if(isset($_POST['submit']))
{






//personal info
 $firstname=$_POST['firstname'];
 $middlename=$_POST['middlename'];
 $surname=$_POST['surname'];
 $name_extension=$_POST['name_extension'];
 $place_birth=$_POST['place_birth'];
 $sex=$_POST['sex'];
 $civil_status=$_POST['civil_status'];
 $department=$_POST['department'];
 $photo=$_POST['file'];
 $cis_no=$_POST['cis_no'];
 $position=$_POST['position'];
 
 //employee details
 $employee_id=($_POST['employee_id'] + "1");
 $citizenship=$_POST['citizenship'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
 $bloodtype=$_POST['bloodtype'];
 $gsis_id_no=$_POST['gsis_id_no'];
 $pag_ibig_id_no=$_POST['pag_ibig_id_no'];
 $philhealth_no=$_POST['philhealth_no'];
 $sss_no=$_POST['sss_no'];
 $residential_address=$_POST['residential_address'];
 $ra_zip_code=$_POST['ra_zip_code'];
 $ra_telephone_no=$_POST['ra_telephone_no'];
 $permanent_address=$_POST['permanent_address'];
 $pa_zip_code=$_POST['pa_zip_code'];
 $pa_telephone_no=$_POST['pa_telephone_no'];
 $email_address=$_POST['email_address'];
 $cellphone_no=$_POST['cellphone_no'];
 $agency_employee_no=$_POST['agency_employee_no'];
 $tin=$_POST['tin'];
 




 

$emp=(" insert into personal_information(firstname,middlename,surname,name_extension,place_birth,sex,civil_status,department,photo,cis_no,position)  
     values('$firstname','$middlename','$surname','$name_extension','$place_birth','$sex','$civil_status','$department','$photo','$cis_no','$position')");
	$mysqli->query($emp);
	
	$emp2=(" insert into employee_details(employee_id,citizenship,height,weight,bloodtype,gsis_id_no,pag_ibig_id_no,philhealth_no,sss_no,
	residential_address,ra_zip_code,ra_telephone_no,permanent_address,pa_zip_code,pa_telephone_no,email_address,cellphone_no,agency_employee_no,
	tin)  
     values
	 ('$employee_id','$citizenship','$height','$weight','$bloodtype','$gsis_id_no','$pag_ibig_id_no','$philhealth_no','$sss_no',
	'$residential_address','$ra_zip_code','$ra_telephone_no','$permanent_address','$pa_zip_code','$pa_telephone_no','$email_address','$cellphone_no','$agency_employee_no',
	'$tin')");
	$mysqli->query($emp2);
	
	
	header('location:personal_info.php');
	
	
	
	
}

else { echo "";}

 
 
 
 $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1000000000000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
 ?>
