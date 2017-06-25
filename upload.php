<?php include 'config/config.php'; ?>
<?php
		if(isset($_POST['uploadcv']))
		{ 
			// $intership_details_id = mysql_query("select internd.id from internship_details internd JOIN employer_details empld ON internd.userId = empld.id");
			// $intership_details_id = mysql_query("select id from internship_details");
			// if(mysql_num_rows($intership_details_id) > 0){
			// 	print_r(mysql_num_rows($intership_details_id));
			// 	while($row = mysql_fetch_array($intership_details_id)){
			// 		$id = $row['id'];
			// 		echo '<pre>';
			// 		print_r($id);
			// 	}
			// }
			// exit;
			$hdnaid = $_POST['hdnaid'];
			$hdncmpnyid = $_POST['hdncmpnyid'];
			$hdnsessionval = $_POST['hdnsessionval'];
			$hdnstuname = $_POST['hdnstuname'];
			$file = rand(1000,100000)."-".$_FILES['file']['name'];
			$file_loc = $_FILES['file']['tmp_name'];
			$file_size = $_FILES['file']['size'];
			$file_type = $_FILES['file']['type'];

			

			$folder="uploads/";

			move_uploaded_file($file_loc,$folder.$file);
			$sql = "insert into applied_intern values('','".$hdnsessionval."','".$hdnaid."','".$hdncmpnyid."','".$hdnstuname."','".$file."')";
			$sql_run = mysql_query($sql);
			if($sql_run){
				header('Location:stu_dashboard.php');
			}else{
				echo 'Something Went Wrong';
			}
		}
	?>