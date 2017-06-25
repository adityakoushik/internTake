<?php include '../config/config.php'; ?>
<?php include_once '../functions/functions.php'; ?>
<?php 
	$empl_orgname = $_POST['empl_orgname'];
	$empl_email = $_POST['empl_email'];
	$empl_password = md5(base64_encode($_POST['empl_password']));
	$empl_name = $_POST['empl_name'];
	$empl_mobileno = $_POST['empl_mobileno'];
	$empl_key = generateRandomString();

	$empldata_insert = mysql_query("insert into employer_details values('','".$empl_name."','".$empl_mobileno."','".$empl_email."','".$empl_password."','".$empl_key."','".$empl_orgname."')");
	if($empldata_insert){
		echo 'Thank You! You have successfully registered. Please Login to Your Dashboard';
	}else{
		echo 'Sorry! Something Went Wrong!';
	}
 ?>