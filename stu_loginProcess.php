<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php 
	if(isset($_POST['stu_login'])){
		$unm = $_POST['email'];
		$pass = md5(base64_encode($_POST['password']));
		if(!empty($unm) && !empty($pass)){
			$data_check = mysql_query("select * from stu_details where stu_email = '".$unm."' and stu_pass = '".$pass."'");
			if(mysql_num_rows($data_check) > 0){
				$stu_id = mysql_result($data_check, 0,'id');
				$_SESSION['stu_id'] = $stu_id;
				header('Location:stu_dashboard.php');
			}else{
				$msg =  'No Data Found';
				header('Location:stu_login.php?error='.$msg);
			}
		}else{
			echo 'Please Fill All Fields';
		}
	}
 ?>