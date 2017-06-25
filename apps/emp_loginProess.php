<?php session_start(); ?>
<?php include '../config/config.php';?>
<?php 
	if(isset($_POST['empl_login'])){
		$mail = $_POST['empl_mail'];
		$pass = md5(base64_encode($_POST['empl_pass']));
		if(!empty($mail) || !empty($pass)){
			$check = mysql_query("select * from employer_details where empl_mail = '".$mail."' and empl_pass = '".$pass."'");
			$check_rows = mysql_num_rows($check);
			if($check_rows > 0){
				$user_id = mysql_result($check, 0,'id');
				$_SESSION['user_id'] = $user_id;
				header('Location:empl_dashboard.php');
			}else{
				$msg = 'No Data Found';
				header('Location:index.php?msg='.$msg);
				// echo 'No Data Found';
			}
		}else{
			echo 'Please Fill All Fields';
		}	
	}
 ?>