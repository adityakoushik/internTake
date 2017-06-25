<?php session_start(); ?>
<?php include 'config/config.php'; ?>
<?php include 'includes/studash_header.php'; ?>
<?php 
	if(isset($_SESSION['stu_id']) && !empty($_SESSION['stu_id'])){
		$stu_data = mysql_query("select * from stu_details where id = '".$_SESSION['stu_id']."'");
		if($stu_data_rows = mysql_num_rows($stu_data) > 0){
			while ($row = mysql_fetch_array($stu_data)) {
				$stu_name = $row['stu_name'];
				$stu_mail = $row['stu_email'];
			}
		}
	}
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="stu_dashboard.php">InternTake | Dashboard</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <?php echo $stu_name; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="javacript:void(0);">Edit Profile</a></li>
						<li><a href="stu_logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<?php 
	if(isset($_GET['cmpnyid']) && isset($_GET['aid'])){
		$cmpnyid = $_GET['cmpnyid'];
		$aid  = $_GET['aid'];
	}
 ?>
<div class="container">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-6 well well-lg">
				<form class="form-horizontal" method="post" action="upload.php" enctype="multipart/form-data">
					<fieldset>
						<legend>Please Just Upload Your Resume</legend>
						<div class="form-group">
							<div class="col-lg-10">
								<input type="file" name="file" />
								<input type="hidden" name="hdnaid" value="<?php echo $aid;?>">
								<input type="hidden" name="hdncmpnyid" value="<?php echo $cmpnyid;?>">
								<input type="hidden" name="hdnsessionval" value="<?php echo $_SESSION['stu_id'];?>">
								<input type="hidden" name="hdnstuname" value="<?php echo $stu_name;?>">
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10">
								<input type="submit" name="uploadcv" value="Upload Resume" class="btn btn-primary">
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/studash_footer.php'; ?>