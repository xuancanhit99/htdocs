 <?php	include('db_con.php');

if(isset($_POST['save']))
{


$position=$_POST['position'];
$username=$_POST['username'];
$password=$_POST['password'];
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
 
$career_service=$_POST['career_service'];
$career_service_2=$_POST['career_service_2'];
$career_service_3=$_POST['career_service_3'];
$career_service_4=$_POST['career_service_4'];
$career_service_5=$_POST['career_service_5'];
$career_service_6=$_POST['career_service_6'];
$career_service_7=$_POST['career_service_7'];
 
$rating=$_POST['rating'];
$rating_2=$_POST['rating_2'];
$rating_3=$_POST['rating_3'];
$rating_4=$_POST['rating_4'];
$rating_5=$_POST['rating_5'];
$rating_6=$_POST['rating_6'];
$rating_7=$_POST['rating_7'];
 
$date_examination=$_POST['date_examination'];
$date_examination_2=$_POST['date_examination_2'];
$date_examination_3=$_POST['date_examination_3'];
$date_examination_4=$_POST['date_examination_4'];
$date_examination_5=$_POST['date_examination_5'];
$date_examination_6=$_POST['date_examination_6'];
$date_examination_7=$_POST['date_examination_7'];
/* bag.o
$place_examination=$_POST['place_examination'];
$place_examination_2=$_POST['place_examination_2'];
$place_examination_3=$_POST['place_examination_3'];
$place_examination_4=$_POST['place_examination_4'];
$place_examination_5=$_POST['place_examination_5'];
$place_examination_6=$_POST['place_examination_6'];
$place_examination_7=$_POST['place_examination_7'];
 
$license_number=$_POST['license_number'];
$license_number_2=$_POST['license_number_2'];
$license_number_3=$_POST['license_number_3'];
$license_number_4=$_POST['license_number_4'];
$license_number_5=$_POST['license_number_5'];
$license_number_6=$_POST['license_number_6'];
$license_number_7=$_POST['license_number_7'];
 
$license_release=$_POST['license_release'];
$license_release_2=$_POST['license_release_2'];
$license_release_3=$_POST['license_release_3'];
$license_release_4=$_POST['license_release_4'];
$license_release_5=$_POST['license_release_5'];
$license_release_6=$_POST['license_release_6'];
$license_release_7=$_POST['license_release_7'];
 
$work_experience_inclusive_dates_from=$_POST['work_experience_inclusive_dates_from'];
$work_experience_inclusive_dates_from_2=$_POST['work_experience_inclusive_dates_from_2'];
$work_experience_inclusive_dates_from_3=$_POST['work_experience_inclusive_dates_from_3'];
$work_experience_inclusive_dates_from_4=$_POST['work_experience_inclusive_dates_from_4'];
$work_experience_inclusive_dates_from_5=$_POST['work_experience_inclusive_dates_from_5'];
$work_experience_inclusive_dates_from_6=$_POST['work_experience_inclusive_dates_from_6'];
$work_experience_inclusive_dates_from_7=$_POST['work_experience_inclusive_dates_from_7'];
$work_experience_inclusive_dates_from_8=$_POST['work_experience_inclusive_dates_from_8'];
$work_experience_inclusive_dates_from_9=$_POST['work_experience_inclusive_dates_from_9'];
$work_experience_inclusive_dates_from_10=$_POST['work_experience_inclusive_dates_from_10'];
 
$work_experience_position_title=$_POST['work_experience_position_title'];
$work_experience_position_title_2=$_POST['work_experience_position_title_2'];
$work_experience_position_title_3=$_POST['work_experience_position_title_3'];
$work_experience_position_title_4=$_POST['work_experience_position_title_4'];
$work_experience_position_title_5=$_POST['work_experience_position_title_5'];
$work_experience_position_title_6=$_POST['work_experience_position_title_6'];
$work_experience_position_title_7=$_POST['work_experience_position_title_7'];
$work_experience_position_title_8=$_POST['work_experience_position_title_8'];
$work_experience_position_title_9=$_POST['work_experience_position_title_9'];
$work_experience_position_title_10=$_POST['work_experience_position_title_10'];
 
$work_experience_department=$_POST['work_experience_department'];
$work_experience_department_2=$_POST['work_experience_department_2'];
$work_experience_department_3=$_POST['work_experience_department_3'];
$work_experience_department_4=$_POST['work_experience_department_4'];
$work_experience_department_5=$_POST['work_experience_department_5'];
$work_experience_department_6=$_POST['work_experience_department_6'];
$work_experience_department_7=$_POST['work_experience_department_7'];
$work_experience_department_8=$_POST['work_experience_department_8'];
$work_experience_department_9=$_POST['work_experience_department_9'];
$work_experience_department_10=$_POST['work_experience_department_10'];
 
$work_experience_monthly_salary=$_POST['work_experience_monthly_salary'];
$work_experience_monthly_salary_2=$_POST['work_experience_monthly_salary_2'];
$work_experience_monthly_salary_3=$_POST['work_experience_monthly_salary_3'];
$work_experience_monthly_salary_4=$_POST['work_experience_monthly_salary_4'];
$work_experience_monthly_salary_5=$_POST['work_experience_monthly_salary_5'];
$work_experience_monthly_salary_6=$_POST['work_experience_monthly_salary_6'];
$work_experience_monthly_salary_7=$_POST['work_experience_monthly_salary_7'];
$work_experience_monthly_salary_8=$_POST['work_experience_monthly_salary_8'];
$work_experience_monthly_salary_9=$_POST['work_experience_monthly_salary_9'];
$work_experience_monthly_salary_10=$_POST['work_experience_monthly_salary_10'];
 
$work_experience_salary_grade_step_inc=$_POST['work_experience_salary_grade_step_inc'];
$work_experience_salary_grade_step_inc_2=$_POST['work_experience_salary_grade_step_inc_2'];
$work_experience_salary_grade_step_inc_3=$_POST['work_experience_salary_grade_step_inc_3'];
$work_experience_salary_grade_step_inc_4=$_POST['work_experience_salary_grade_step_inc_4'];
$work_experience_salary_grade_step_inc_5=$_POST['work_experience_salary_grade_step_inc_5'];
$work_experience_salary_grade_step_inc_6=$_POST['work_experience_salary_grade_step_inc_6'];
$work_experience_salary_grade_step_inc_7=$_POST['work_experience_salary_grade_step_inc_7'];
$work_experience_salary_grade_step_inc_8=$_POST['work_experience_salary_grade_step_inc_8'];
$work_experience_salary_grade_step_inc_9=$_POST['work_experience_salary_grade_step_inc_9'];
$work_experience_salary_grade_step_inc_10=$_POST['work_experience_salary_grade_step_inc_10'];
 
$work_experience_status_appointment=$_POST['work_experience_status_appointment'];
$work_experience_status_appointment_2=$_POST['work_experience_status_appointment_2'];
$work_experience_status_appointment_3=$_POST['work_experience_status_appointment_3'];
$work_experience_status_appointment_4=$_POST['work_experience_status_appointment_4'];
$work_experience_status_appointment_5=$_POST['work_experience_status_appointment_5'];
$work_experience_status_appointment_6=$_POST['work_experience_status_appointment_6'];
$work_experience_status_appointment_7=$_POST['work_experience_status_appointment_7'];
$work_experience_status_appointment_8=$_POST['work_experience_status_appointment_8'];
$work_experience_status_appointment_9=$_POST['work_experience_status_appointment_9'];
$work_experience_status_appointment_10=$_POST['work_experience_status_appointment_10'];
 
$work_experience_gov_service=$_POST['work_experience_gov_service'];
$work_experience_gov_service_2=$_POST['work_experience_gov_service_2'];
$work_experience_gov_service_3=$_POST['work_experience_gov_service_3'];
$work_experience_gov_service_4=$_POST['work_experience_gov_service_4'];
$work_experience_gov_service_5=$_POST['work_experience_gov_service_5'];
$work_experience_gov_service_6=$_POST['work_experience_gov_service_6'];
$work_experience_gov_service_7=$_POST['work_experience_gov_service_7'];
$work_experience_gov_service_8=$_POST['work_experience_gov_service_8'];
$work_experience_gov_service_9=$_POST['work_experience_gov_service_9'];
$work_experience_gov_service_10=$_POST['work_experience_gov_service_10'];
 
$work_experience_inclusive_dates_to=$_POST['work_experience_inclusive_dates_to'];
$work_experience_inclusive_dates_to_2=$_POST['work_experience_inclusive_dates_to_2'];
$work_experience_inclusive_dates_to_3=$_POST['work_experience_inclusive_dates_to_3'];
$work_experience_inclusive_dates_to_4=$_POST['work_experience_inclusive_dates_to_4'];
$work_experience_inclusive_dates_to_5=$_POST['work_experience_inclusive_dates_to_5'];
$work_experience_inclusive_dates_to_6=$_POST['work_experience_inclusive_dates_to_6'];
$work_experience_inclusive_dates_to_7=$_POST['work_experience_inclusive_dates_to_7'];
$work_experience_inclusive_dates_to_8=$_POST['work_experience_inclusive_dates_to_8'];
$work_experience_inclusive_dates_to_9=$_POST['work_experience_inclusive_dates_to_9'];
$work_experience_inclusive_dates_to_10=$_POST['work_experience_inclusive_dates_to_10'];
 
$voluntary_work_name_address_org=$_POST['voluntary_work_name_address_org'];
$voluntary_work_name_address_org_2=$_POST['voluntary_work_name_address_org_2'];
$voluntary_work_name_address_org_3=$_POST['voluntary_work_name_address_org_3'];
$voluntary_work_name_address_org_4=$_POST['voluntary_work_name_address_org_4'];
$voluntary_work_name_address_org_5=$_POST['voluntary_work_name_address_org_5'];
 
$voluntary_work_dates_from=$_POST['voluntary_work_dates_from'];
$voluntary_work_dates_from_2=$_POST['voluntary_work_dates_from_2'];
$voluntary_work_dates_from_3=$_POST['voluntary_work_dates_from_3'];
$voluntary_work_dates_from_4=$_POST['voluntary_work_dates_from_4'];
$voluntary_work_dates_from_5=$_POST['voluntary_work_dates_from_5'];
 
$voluntary_work_dates_to=$_POST['voluntary_work_dates_to'];
$voluntary_work_dates_to_2=$_POST['voluntary_work_dates_to_2'];
$voluntary_work_dates_to_3=$_POST['voluntary_work_dates_to_3'];
$voluntary_work_dates_to_4=$_POST['voluntary_work_dates_to_4'];
$voluntary_work_dates_to_5=$_POST['voluntary_work_dates_to_5'];
 
$voluntary_work_num_hours=$_POST['voluntary_work_num_hours'];
$voluntary_work_num_hours_2=$_POST['voluntary_work_num_hours_2'];
$voluntary_work_num_hours_3=$_POST['voluntary_work_num_hours_3'];
$voluntary_work_num_hours_4=$_POST['voluntary_work_num_hours_4'];
$voluntary_work_num_hours_5=$_POST['voluntary_work_num_hours_5'];


		
place_examination,
place_examination_2,
place_examination_3,
place_examination_4,
place_examination_5,
place_examination_6,
place_examination_7,
 
license_number,
license_number_2,
license_number_3,
license_number_4,
license_number_5,
license_number_6,
license_number_7,
 
license_release,
license_release_2,
license_release_3,
license_release_4,
license_release_5,
license_release_6,
license_release_7,
 
work_experience_inclusive_dates_from,
work_experience_inclusive_dates_from_2,
work_experience_inclusive_dates_from_3,
work_experience_inclusive_dates_from_4,
work_experience_inclusive_dates_from_5,
work_experience_inclusive_dates_from_6,
work_experience_inclusive_dates_from_7,
work_experience_inclusive_dates_from_8,
work_experience_inclusive_dates_from_9,
work_experience_inclusive_dates_from_10,
 
work_experience_position_title,
work_experience_position_title_2,
work_experience_position_title_3,
work_experience_position_title_4,
work_experience_position_title_5,
work_experience_position_title_6,
work_experience_position_title_7,
work_experience_position_title_8,
work_experience_position_title_9,
work_experience_position_title_10,
 
work_experience_department,
work_experience_department_2,
work_experience_department_3,
work_experience_department_4,
work_experience_department_5,
work_experience_department_6,
work_experience_department_7,
work_experience_department_8,
work_experience_department_9,
work_experience_department_10,
 
work_experience_monthly_salary,
work_experience_monthly_salary_2,
work_experience_monthly_salary_3,
work_experience_monthly_salary_4,
work_experience_monthly_salary_5,
work_experience_monthly_salary_6,
work_experience_monthly_salary_7,
work_experience_monthly_salary_8,
work_experience_monthly_salary_9,
work_experience_monthly_salary_10,
 
work_experience_salary_grade_step_inc,
work_experience_salary_grade_step_inc_2,
work_experience_salary_grade_step_inc_3,
work_experience_salary_grade_step_inc_4,
work_experience_salary_grade_step_inc_5,
work_experience_salary_grade_step_inc_6,
work_experience_salary_grade_step_inc_7,
work_experience_salary_grade_step_inc_8,
work_experience_salary_grade_step_inc_9,
work_experience_salary_grade_step_inc_10,
 
work_experience_status_appointment,
work_experience_status_appointment_2,
work_experience_status_appointment_3,
work_experience_status_appointment_4,
work_experience_status_appointment_5,
work_experience_status_appointment_6,
work_experience_status_appointment_7,
work_experience_status_appointment_8,
work_experience_status_appointment_9,
work_experience_status_appointment_10,
 
work_experience_gov_service,
work_experience_gov_service_2,
work_experience_gov_service_3,
work_experience_gov_service_4,
work_experience_gov_service_5,
work_experience_gov_service_6,
work_experience_gov_service_7,
work_experience_gov_service_8,
work_experience_gov_service_9,
work_experience_gov_service_10,
 
work_experience_inclusive_dates_to,
work_experience_inclusive_dates_to_2,
work_experience_inclusive_dates_to_3,
work_experience_inclusive_dates_to_4,
work_experience_inclusive_dates_to_5,
work_experience_inclusive_dates_to_6,
work_experience_inclusive_dates_to_7,
work_experience_inclusive_dates_to_8,
work_experience_inclusive_dates_to_9,
work_experience_inclusive_dates_to_10,
 
voluntary_work_name_address_org,
voluntary_work_name_address_org_2,
voluntary_work_name_address_org_3,
voluntary_work_name_address_org_4,
voluntary_work_name_address_org_5,

voluntary_work_dates_from,
voluntary_work_dates_from_2,
voluntary_work_dates_from_3,
voluntary_work_dates_from_4,
voluntary_work_dates_from_5,

voluntary_work_dates_to,
voluntary_work_dates_to_2,
voluntary_work_dates_to_3,
voluntary_work_dates_to_4,
voluntary_work_dates_to_5,
 
voluntary_work_num_hours,
voluntary_work_num_hours_2,
voluntary_work_num_hours_3,
voluntary_work_num_hours_4,
voluntary_work_num_hours_5







'$place_examination',
 '$place_examination_2',
 '$place_examination_3',
 '$place_examination_4',
 '$place_examination_5',
 '$place_examination_6',
 '$place_examination_7',
 
 '$license_number',
 '$license_number_2,
 '$license_number_3,
 '$license_number_4,
 '$license_number_5,
 '$license_number_6,
 '$license_number_7,
 
 '$license_release',
 '$license_release_2',
 '$license_release_3',
 '$license_release_4',
 '$license_release_5',
 '$license_release_6',
 '$license_release_7',
 
 '$work_experience_inclusive_dates_from',
 '$work_experience_inclusive_dates_from_2',
 '$work_experience_inclusive_dates_from_3',
 '$work_experience_inclusive_dates_from_4',
 '$work_experience_inclusive_dates_from_5',
 '$work_experience_inclusive_dates_from_6',
 '$work_experience_inclusive_dates_from_7',
 '$work_experience_inclusive_dates_from_8',
 '$work_experience_inclusive_dates_from_9',
 '$work_experience_inclusive_dates_from_10',
 
 '$work_experience_position_title',
 '$work_experience_position_title_2',
 '$work_experience_position_title_3',
 '$work_experience_position_title_4',
 '$work_experience_position_title_5',
 '$work_experience_position_title_6',
 '$work_experience_position_title_7',
 '$work_experience_position_title_8',
 '$work_experience_position_title_9',
 '$work_experience_position_title_10',
 
 '$work_experience_department',
 '$work_experience_department_2',
 '$work_experience_department_3',
 '$work_experience_department_4',
 '$work_experience_department_5',
 '$work_experience_department_6',
 '$work_experience_department_7',
 '$work_experience_department_8',
 '$work_experience_department_9',
 '$work_experience_department_10',
 
 '$work_experience_monthly_salary',
 '$work_experience_monthly_salary_2',
 '$work_experience_monthly_salary_3',
 '$work_experience_monthly_salary_4',
 '$work_experience_monthly_salary_5',
 '$work_experience_monthly_salary_6',
 '$work_experience_monthly_salary_7',
 '$work_experience_monthly_salary_8',
 '$work_experience_monthly_salary_9',
 '$work_experience_monthly_salary_10',
 
 '$work_experience_salary_grade_step_inc',
 '$work_experience_salary_grade_step_inc_2',
 '$work_experience_salary_grade_step_inc_3',
 '$work_experience_salary_grade_step_inc_4',
 '$work_experience_salary_grade_step_inc_5',
 '$work_experience_salary_grade_step_inc_6',
 '$work_experience_salary_grade_step_inc_7',
 '$work_experience_salary_grade_step_inc_8',
 '$work_experience_salary_grade_step_inc_9',
 '$work_experience_salary_grade_step_inc_10',
 
 '$work_experience_status_appointment',
 '$work_experience_status_appointment_2',
 '$work_experience_status_appointment_3',
 '$work_experience_status_appointment_4',
 '$work_experience_status_appointment_5',
 '$work_experience_status_appointment_6',
 '$work_experience_status_appointment_7',
 '$work_experience_status_appointment_8',
 '$work_experience_status_appointment_9',
 '$work_experience_status_appointment_10',
 
'$work_experience_gov_service',
'$work_experience_gov_service_2',
'$work_experience_gov_service_3',
'$work_experience_gov_service_4',
'$work_experience_gov_service_5',
'$work_experience_gov_service_6',
'$work_experience_gov_service_7',
'$work_experience_gov_service_8',
'$work_experience_gov_service_9',
'$work_experience_gov_service_10',
 
'$work_experience_inclusive_dates_to',
'$work_experience_inclusive_dates_to_2',
'$work_experience_inclusive_dates_to_3',
'$work_experience_inclusive_dates_to_4',
'$work_experience_inclusive_dates_to_5',
'$work_experience_inclusive_dates_to_6',
'$work_experience_inclusive_dates_to_7',
'$work_experience_inclusive_dates_to_8',
'$work_experience_inclusive_dates_to_9',
'$work_experience_inclusive_dates_to_10',
 
'$voluntary_work_name_address_org',
'$voluntary_work_name_address_org_2',
'$voluntary_work_name_address_org_3',
'$voluntary_work_name_address_org_4',
'$voluntary_work_name_address_org_5',

'$voluntary_work_dates_from',
'$voluntary_work_dates_from_2',
'$voluntary_work_dates_from_3',
'$voluntary_work_dates_from_4',
'$voluntary_work_dates_from_5',

'$voluntary_work_dates_to',
'$voluntary_work_dates_to_2',
'$voluntary_work_dates_to_3',
'$voluntary_work_dates_to_4',
'$voluntary_work_dates_to_5',
 
'$voluntary_work_num_hours',
'$voluntary_work_num_hours_2',
'$voluntary_work_num_hours_3',
'$voluntary_work_num_hours_4',
'$voluntary_work_num_hours_5'
	*/

 

$emp=(" insert into employee
	(position,username,password,firstname,surname,middlename,name_extension,date_birth,place_birth,sex,civil_status,citizenship,
		height,weight,blood_type,gsis_id_no,pag_ibig_id_no,philhealth_no,sss_no,residential_address,
		ra_zip_code,ra_telephone_no,permanent_address,pa_zip_code,pa_telephone_no,e_mail_address,cellphone_no,
		spouse_surname,spouse_firstname,spouse_middlename,spouse_occupation,spouse_employer_or_bus_name,
		business_address,bus_telephone_no,father_surname,father_firstname,father_middlename,mother_maiden_surname,
		mother_maiden_firstname,mother_maiden_middlename,name_child_1,name_child_2,name_child_3,name_child_4,name_child_5,
		name_child_6,name_child_7,name_child_8,name_child_9,name_child_10,name_child_11,name_child_12,name_child_13,
		name_child_14,child_birth_1,child_birth_2,child_birth_3,child_birth_4,child_birth_5,child_birth_6,child_birth_7,
		child_birth_8,child_birth_9,child_birth_10,child_birth_11,child_birth_12,child_birth_13,child_birth_14,
		
		elementary_school_name,
		elementary_degree_course,
		elementary_highest_grade,
		elementary_date_attendance,
		elementary_scholarship,

		secondary_school_name,
		secondary_degree_course,
		secondary_highest_grade,
		secondary_date_attendace,
		secondary_scholarship,

		
		vocational_school_name,
		vocational_degree_course,
		vocational_highest_grade,
		vocational_date_attendance,
		vocational_scholarship,
		
		college_school_name,
		college_degree_course,
		college_highest_grade,
		college_date_attendance,
		college_scholarship,

		graduate_studies_school_name,
		graduate_studies_degree_course,
		graduate_studies_highest_grade,
		graduate_studies_date_attendance,
		graduate_studies_scholarship,
		
		career_service,
		career_service_2,
		career_service_3,
		career_service_4,
		career_service_5,
		career_service_6,
		career_service_7,
	
		rating,
		rating_2,
		rating_3,
		rating_4,
		rating_5,
		rating_6,
		rating_7,
		
		date_examination,
		date_examination_2,
		date_examination_3,
		date_examination_4,
		date_examination_5,
		date_examination_6,
		date_examination_7
	)


		
     values('$position','$username','$password','$firstname','$surname','$middlename','$name_extension','$date_birth','$place_birth','$sex','$civil_status',
	 '$citizenship','$height','$weight','$bloodtype','$gsis_id_no','$pag_ibig_id_no','$philhealth_no','$sss_no',
	 '$residential_address','$ra_zip_code','$ra_telephone_no','$permanent_address','$pa_zip_code','$pa_telephone_no',
	 '$e_mail_address','$cellphone_no','$spouse_surname','$spouse_firstname','$spouse_middlename','$spouse_occupation',
	 '$spouse_employer_or_bus_name','$business_address','$bus_telephone_no','$father_surname','$father_firstname',
	 '$father_middlename','$mother_maiden_surname','$mother_maiden_firstname','$mother_maiden_middlename','$name_child_1',
	 '$name_child_2','$name_child_3','$name_child_4','$name_child_5','$name_child_6','$name_child_7','$name_child_8',
	 '$name_child_9','$name_child_10','$name_child_11','$name_child_12','$name_child_13','$name_child_14',
	'$child_birth_1','$child_birth_2','$child_birth_3','$child_birth_4','$child_birth_5','$child_birth_6','$child_birth_7',
	'$child_birth_8','$child_birth_9','$child_birth_10','$child_birth_11','$child_birth_12','$child_birth_13','$child_birth_14',


		'$elementary_school_name',
		'$elementary_degree_course',
		'$elementary_highest_grade',
		'$elementary_date_attendance',
		'$elementary_scholarship',

		'$secondary_school_name',
		'$secondary_degree_course',
		'$secondary_highest_grade',
		'$secondary_date_attendace',
		'$secondary_scholarship',

		'$vocational_school_name',
		'$vocational_degree_course',
		'$vocational_highest_grade',
		'$vocational_date_attendance',
		'$vocational_scholarship',
		

		'$college_school_name',
		'$college_degree_course',
		'$college_highest_grade',
		'$college_date_attendance',
		'$college_scholarship',
		
		
		'$graduate_studies_school_name',
		'$graduate_studies_degree_course',
		'$graduate_studies_highest_grade',
		'$graduate_studies_date_attendance',
		'$graduate_studies_scholarship',
		
		'$career_service',
		'$career_service_2',
		'$career_service_3',
		'$career_service_4',
		'$career_service_5',
		'$career_service_6',
		'$career_service_7',
		
		'$rating',
		'$rating_2',
		'$rating_3',
		'$rating_4',
		'$rating_5',
		'$rating_6',
		'$rating_7',
		
		'$date_examination',
		'$date_examination_2',
		'$date_examination_3',
		'$date_examination_4',
		'$date_examination_5',
		'$date_examination_6',
		'$date_examination_7'
		
		
 
		
		)");
	$mysqli->query($emp);
	header('location:admin.php');
}

else { echo "";}

 
 ?>