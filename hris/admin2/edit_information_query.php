 <?php	include('db_con.php');

if(isset($_POST['save']))
{


 $surname=$_POST['username'];
 $surname=$_POST['password'];
 $surname=$_POST['surname'];
 $firstname=$_POST['firstname'];
  $middlename=$_POST['middlename'];
  $name_extension=$_POST['name_extension'];
 $date_birth=$_POST['date_birth'];
 $place_birth=$_POST['place_birth'];
 $sex=$_POST['sex'];
 $civil_status=$_POST['civil_status'];
 $citizenship=$_POST['citizenship'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
 $blood_type=$_POST['blood_type'];
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
 $e_mail_address=$_POST['e_mail_address'];
 
 $cellphone_no=$_POST['cellphone_no'];
 $agency_employee_no=$_POST['agency_employee_no'];
 $tin=$_POST['tin'];
 $spouse_surname=$_POST['spouse_surname'];
 $spouse_firstname=$_POST['spouse_firstname'];
 $spouse_middlename=$_POST['spouse_middlename'];
 $spouse_occupation=$_POST['spouse_occupation'];
 $spouse_employer_or_bus_name=$_POST['spouse_employer_or_bus_name'];
 $business_address=$_POST['business_address'];
 $bus_telephone_no=$_POST['bus_telephone_no'];
 $father_surname=$_POST['father_surname'];
 $father_firstname=$_POST['father_firstname'];
 $father_middlename=$_POST['father_middlename'];
 $mother_maiden_surname=$_POST['mother_maiden_surname'];
 $mother_maiden_firstname=$_POST['mother_maiden_firstname'];
 $mother_maiden_middlename=$_POST['mother_maiden_middlename'];
 $name_child_1=$_POST['name_child_1'];
 $name_child_2=$_POST['name_child_2'];
 $name_child_3=$_POST['name_child_3'];
 $name_child_4=$_POST['name_child_4'];
 $name_child_5=$_POST['name_child_5'];
 $name_child_6=$_POST['name_child_6'];
 $name_child_7=$_POST['name_child_7'];
 $name_child_8=$_POST['name_child_8'];
 $name_child_9=$_POST['name_child_9'];
 $name_child_10=$_POST['name_child_10'];
 $name_child_11=$_POST['name_child_11'];
 $name_child_12=$_POST['name_child_12'];
 $name_child_13=$_POST['name_child_13'];
 $name_child_14=$_POST['name_child_14'];
 $child_birth_1=$_POST['child_birth_1'];
 $child_birth_2=$_POST['child_birth_2'];
 $child_birth_3=$_POST['child_birth_3'];
 $child_birth_4=$_POST['child_birth_4'];
 $child_birth_5=$_POST['child_birth_5'];
 $child_birth_6=$_POST['child_birth_6'];
 $child_birth_7=$_POST['child_birth_7'];
 $child_birth_8=$_POST['child_birth_8'];
 $child_birth_9=$_POST['child_birth_9'];
 $child_birth_10=$_POST['child_birth_10'];
 $child_birth_11=$_POST['child_birth_11'];
 $child_birth_12=$_POST['child_birth_12'];
 $child_birth_13=$_POST['child_birth_13'];
 $child_birth_14=$_POST['child_birth_14'];
 
 $elementary_school_name=$_POST['elementary_school_name'];
 $elementary_degree_course=$_POST['elementary_degree_course'];
 $elementary_highest_grade=$_POST['elementary_highest_grade'];
 $elementary_date_attendance=$_POST['elementary_date_attendance'];
 $elementary_scholarship=$_POST['elementary_scholarship'];
 $secondary_school_name=$_POST['secondary_school_name'];
 $secondary_degree_course=$_POST['secondary_degree_course'];
 $secondary_highest_grade=$_POST['secondary_highest_grade'];
 $secondary_date_attendace=$_POST['secondary_date_attendace'];
 $secondary_scholarship=$_POST['secondary_scholarship'];
 $vocational_school_name=$_POST['vocational_school_name'];
 $vocational_degree_course=$_POST['vocational_degree_course'];
 $vocational_highest_grade=$_POST['vocational_highest_grade'];
 $vocational_date_attendance=$_POST['vocational_date_attendance'];
 $vocational_scholarship=$_POST['vocational_scholarship'];
 $college_school_name=$_POST['college_school_name'];
 $college_degree_course=$_POST['college_degree_course'];
 $college_highest_grade=$_POST['college_highest_grade'];
 $college_date_attendance=$_POST['college_date_attendance'];
 $college_scholarship=$_POST['college_scholarship'];
 $graduate_studies_school_name=$_POST['graduate_studies_school_name'];
 $graduate_studies_degree_course=$_POST['graduate_studies_degree_course'];
 $graduate_studies_highest_grade=$_POST['graduate_studies_highest_grade'];
 $graduate_studies_date_attendance=$_POST['graduate_studies_date_attendance'];
 $graduate_studies_scholarship=$_POST['graduate_studies_scholarship'];


$up_emp=("update department set 
 dep_name='$dep_name'


 
 where  dep_id='$dep_id' ");
 
 
 
 $mysqli->query($up_emp);
 header('location:department.php');

$emp=(" update department set 
	username='$username',
	password='$password',
	firstname='$firstname',
	surname='$surname',
	middlename='$middlename',
	name_extension='$name_extension',
	date_birth='$date_birth',
	place_birth='$place_birth',
	sex='$sex',
	civil_status='$civil_status',
	citizenship='$citizenship',
	height='$height',
	weight='$weight',
	blood_type='$blood_type',
	gsis_id_no='$gsis_id_no',
	pag_ibig_id_no='$pag_ibig_id_no',
	philhealth_no='$philhealth_no',
	sss_no='$sss_no',
	residential_address='$residential_address',
	ra_zip_code='$ra_zip_code',
	ra_telephone_no='$ra_telephone_no',
	permanent_address='$permanent_address',
	pa_zip_code='$pa_zip_code',
	pa_telephone_no='$pa_telephone_no',
	e_mail_address='$e_mail_address',
	cellphone_no='$cellphone_no',
	spouse_surname='$spouse_surname',
	spouse_firstname='$spouse_firstname',
	spouse_middlename='$spouse_middlename',
	spouse_occupation='$spouse_occupation',
	spouse_employer_or_bus_name='$spouse_employer_or_bus_name',
	business_address='$business_address',
	bus_telephone_no='$bus_telephone_no',
	father_surname='$father_surname',
	father_firstname='$father_firstname',
	father_middlename='$father_middlename',
	mother_maiden_surname='$mother_maiden_surname',
	mother_maiden_firstname='$mother_maiden_firstname',
	mother_maiden_middlename='$mother_maiden_middlename',
	name_child_1='$name_child_1',
	name_child_2='$name_child_2',
	name_child_3='$name_child_3',
	name_child_4='$name_child_4',
	name_child_5='$name_child_5',
	name_child_6='$name_child_6',
	name_child_7='$name_child_7',
	name_child_8='$name_child_8',
	name_child_9='$name_child_9',
	name_child_10='$name_child_10',
	name_child_11='$name_child_11',
	name_child_12='$name_child_12',
	name_child_13='$name_child_13',
	name_child_14='$name_child_14',
	child_birth_1='$child_birth_1',
	child_birth_2='$child_birth_2',
	child_birth_3='$child_birth_3',
	child_birth_4='$child_birth_4',
	child_birth_5='$child_birth_5',
	child_birth_6='$child_birth_6',
	child_birth_7='$child_birth_7',
	child_birth_8='$child_birth_8',
	child_birth_9='$child_birth_8',
	child_birth_10='$child_birth_10',
	child_birth_11='$child_birth_11',
	child_birth_12='$child_birth_12',
	child_birth_13='$child_birth_13',
	child_birth_14='$child_birth_14',
	
	elementary_school_name='$elementary_school_name',
	elementary_degree_course='$elementary_degree_course',
	elementary_highest_grade='$elementary_highest_grade',
	elementary_date_attendance='$elementary_date_attendance',
	elementary_scholarship='$elementary_scholarship',
	
	secondary_school_name='$secondary_school_name',
	secondary_degree_course='$secondary_degree_course',
	secondary_highest_grade='$secondary_highest_grade',
	secondary_date_attendace='$secondary_date_attendace',
	secondary_scholarship='$secondary_scholarship',
	
	vocational_school_name='$vocational_school_name',
	vocational_degree_course='$vocational_degree_course',
	vocational_highest_grade='$vocational_highest_grade',
	vocational_date_attendance='$vocational_date_attendance',
	vocational_scholarship='$vocational_scholarship',
		
	college_school_name='$college_school_name',
	college_degree_course='$college_degree_course',
	college_highest_grade='$college_highest_grade',
	college_date_attendance='$college_date_attendance',
	college_scholarship='$college_scholarship',

	graduate_studies_school_name='$graduate_studies_school_name',
	graduate_studies_degree_course='$graduate_studies_degree_course',
	graduate_studies_highest_grade='$graduate_studies_highest_grade',
	graduate_studies_date_attendance='$graduate_studies_date_attendance',
	graduate_studies_scholarship='$graduate_studies_scholarship'
	 ");
	$mysqli->query($emp);
	header('location:admin.php');
}

else { echo "";}

 
 ?>