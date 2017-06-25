<?php include 'config/config.php';?>
<?php include_once 'functions/functions.php'; ?>
<?php 
	$stu_name = $_POST['stu_name'];
	$stu_email = $_POST['stu_email'];
	$stu_pass = md5(base64_encode($_POST['stu_password']));
	$stu_key = generateRandomString();
	$check = mysql_query("select * from employer_details where empl_mail = '".$stu_email."'");
	if(mysql_num_rows($check) > 0){
		echo 'Opps! Sorry,You Are Registered As A Employer!';
	}else{
		$studata_insert = mysql_query("insert into stu_details values('','".$stu_name."','".$stu_email."','".$stu_pass."','".$stu_key."')");
		if($studata_insert){
			echo 'Thank You! You have successfully registered. Please Login to apply Intership';
		}else{
			echo 'Sorry! Something Went Wrong!';
		}
	}
 ?>