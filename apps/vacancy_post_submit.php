<?php include '../config/config.php';?>
<?php 
	if (isset($_POST['intenshipSubmit'])) {
		$cmpdes = $_POST['compDescription'];
		$cmppost =$_POST['internArea'];
		$cmpljobdetails = $_POST['jobDetails'];
		$stipend = $_POST['stipend'];
		$availablity = $_POST['availablity'];
		$status = $_POST['status'];
		$hdnUserid = $_POST['hdnUserid'];

		if(!empty($cmpdes) && !empty($cmppost) && !empty($cmpljobdetails) && !empty($stipend) && !empty($availablity) && !empty($status)){
			$insert = mysql_query("insert into internship_details values('','".$hdnUserid."','".$cmpdes."','".$cmppost."','".$cmpljobdetails."','".$stipend."','".$availablity."','".$status."',CURDATE())");
			if ($insert) {
				header('Location:index.php');
			}
		}else{
			// echo 'Please Fill All Fields';
			header('Location:vacancy_post.php');
		}
	}
 ?>