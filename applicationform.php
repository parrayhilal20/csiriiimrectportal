
<?php 
$mysqli = new mysqli('localhost','root','','csiriiimrectportal');


//Applicaiton Number

$application_number = rand();

//Advertisement Details

$advertisement_number   =  $_POST['advertisement_number'];
$postapplied   =  $_POST['postapplied'];
$postname   =  $_POST['postname'];
$trancsation_number_date   =  $_POST['trancsation_number_date'];
$bank_and_branch   =  $_POST['bank_and_branch'];

//Personal Details

$fullname   =  $_POST['fullname'];
$father_husband_name   = $_POST['father_husband_name'];
$occupation   =  $_POST['occupation'];
$dob   =  $_POST['dob'];
$years   =  $_POST['years'];
$months   =  $_POST['months'];
$days  =  $_POST['days'];
$gender   =  $_POST['gender'];
$place_of_birth   =  $_POST['place_of_birth'];
$address_for_correspondence   =  $_POST['address_for_correspondence'];
$city_and_pin   =  $_POST['city_and_pin'];
$telephone_number   =  $_POST['telephone_number'];
$fax_email   =  $_POST['fax_email'];
$state   =  $_POST['state'];
$permanent_address  =  $_POST['permanent_address'];
$domicile   =  $_POST['domicile'];
$state_belong   =  $_POST['state_belong'];
$category   =  $_POST['category'];
$minority_communities   =  $_POST['minority_communities'];
$realted_employee   =  $_POST['realted_employee'];
$minimum_pay_scale   =  $_POST['minimum_pay_scale'];


//Educational Qualifications
$exam   =  $_POST['exam'];


//Employer Details
$name_address_employer   =  $_POST['name_address_employer'];
$post_held   =  $_POST['post_held'];
$pay_scale   =  $_POST['pay_scale'];
$date_from   =  $_POST['date_from'];
$date_to   = $_POST['date_to'];
$nature_of_duties   =  $_POST['nature_of_duties'];

//Photograph
$file = rand(1000,100000)."-".$_FILES['photograph']['name']; 
$file_loc = $_FILES['photograph']['tmp_name'];
 $file_size = $_FILES['photograph']['size'];
 $file_type = $_FILES['photograph']['type'];
 $folder="upload/";
 
 /* new file size in KB */
 $new_size = $file_size/1024;  
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name); 
 
  move_uploaded_file($file_loc,$folder.$final_file);


//Advertisement details
$sql1 = "INSERT INTO `advertisement_details` (`application_number`, `advertisement_number`,`postapplied`,
               `postname`, `trancsation_number_date`, `bank_and_branch`) 
              VALUES ($application_number, '$advertisement_number', '$postapplied',
                     '$postname', '$trancsation_number_date', '$bank_and_branch')"; 
$mysqli->query($sql1);

//Personal Details
$sql2 = "INSERT INTO `personal_details` 
              (`application_number`, `fullname`,  `father_husband_name`,
               `occupation`, `dob`, `years`, `months`, `days`, `gender`,
                `place_of_birth`, `address_for_correspondence`, `city_and_pin`, 
                `telephone_number`, `fax_email`, `state`, `permanent_address`,
                 `domicile`, `state_belong`, `category`, `minority_communities`, `minimum_pay_scale`) 
              VALUES ($application_number, '$fullname', '$father_husband_name',
                     '$occupation', '$dob', '$years', '$months', '$days', '$gender', '$place_of_birth', 
                     '$address_for_correspondence', '$city_and_pin', '$telephone_number','$fax_email', '$state',
                      '$permanent_address', '$domicile', '$state_belong', '$category', '$minority_communities','$minimum_pay_scale')";
$mysqli->query($sql2);                      

//Educational Qualifications

              
foreach ($exam as $key => $value) {
$sql3 = "INSERT INTO `education_qualifications`  
              (`application_number`, `exam`,  `duration`, `division`, `percentage`, `year_of_passing`, `board`, `subjects`)
              VALUES ('$application_number','".$exam[$key]."','".$exam[$key]."','".$exam[$key]."','".$exam[$key]."', 
              '".$exam[$key]."','".$exam[$key]."','".$exam[$key]."')";
       
       $mysqli->query($sql3);  
       
}
                     
//Employer Details
$sql4 = "INSERT INTO `employer_details` 
              (`application_number`, `name_address_employer`, `post_held`,
               `pay_scale`, `date_from`, `date_to`, `nature_of_duties`) 
              VALUES ($application_number, '$name_address_employer', '$post_held',
                     '$pay_scale', '$date_from', '$date_to', '$nature_of_duties')";

       $mysqli->query($sql4);  

//Photograph
$sql5 = "INSERT INTO `attachment_details` 
              (`application_number`, `photograph`) 
              VALUES ($application_number, '$final_file')";
       
       $mysqli->query($sql5);


header("Location: .php");


?>





    



