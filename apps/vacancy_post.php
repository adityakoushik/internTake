<?php session_start(); ?>
<?php include '../config/config.php';?>
<?php include '../includes/empdash_header.php'; ?>
<?php 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		$empl_data = mysql_query("select * from employer_details where id = '".$_SESSION['user_id']."'");
		if($empl_data_rows = mysql_num_rows($empl_data) > 0){
			while ($row = mysql_fetch_array($empl_data)) {
				$empl_name = $row['empl_name'];
				$empl_mobile = $row['empl_mobile'];
				$empl_mail = $row['empl_mail'];
				$empl_organisation = $row['empl_organisation'];
			}
		}
	}
 ?>
<div class="wrapper">

 	<header class="main-header">
 		<!-- Logo -->
 		<a href="empl_dashboard.php" class="logo">
 			<!-- mini logo for sidebar mini 50x50 pixels -->
 			<span class="logo-mini"><b>I</b>TK</span>
 			<!-- logo for regular state and mobile devices -->
 			<span class="logo-lg"><b>Admin</b>InternTake</span>
 		</a>
 		<!-- Header Navbar: style can be found in header.less -->
 		<nav class="navbar navbar-static-top">
 			<!-- Sidebar toggle button-->
 			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
 				<span class="sr-only">Toggle navigation</span>
 			</a>

 			<div class="navbar-custom-menu">
 				<ul class="nav navbar-nav">
 					<!-- User Account: style can be found in dropdown.less -->
				 	<li class="dropdown user user-menu">
				 		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				 			<span class="hidden-xs"><?php echo $empl_name; ?></span>
				 		</a>
				 		<ul class="dropdown-menu">
				 			<!-- User image -->
				 			<li class="user-header">
				 				<p>
				 					Organisation - <?php echo $empl_organisation; ?>
				 				</p>

				 				<p>
				 					Administrator - <?php echo $empl_name; ?>
				 				</p>
				 			</li>
				 			<!-- Menu Body -->
				 			<li class="user-body">
				 				<div class="row">
				 					<div class="col-xs-6">
				 						<a href="javascript:void(0);">
				 							<span class="glyphicon glyphicon-phone"></span>
				 							<?php echo $empl_mobile; ?>
				 						</a>
				 					</div>
				 					<div class="col-xs-6">
				 						<a href="javascript:void(0);">
				 							<span class="glyphicon glyphicon-envelope"></span>
				 							<?php echo $empl_mail; ?>
				 						</a>
				 					</div>
				 				</div>
				 				<!-- /.row -->
				 			</li>
				 			<!-- Menu Footer-->
				 			<li class="user-footer">
				 				<div class="pull-right">
				 					<a href="empl_logout.php" class="btn btn-default btn-flat">Sign out</a>
				 				</div>
				 			</li>
				 		</ul>
				 	</li>
 				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info">
					<p><?php echo $empl_name; ?></p>
				</div>
			</div>
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="active treeview">
					<a href="#">
						<i class="fa fa-dashboard"></i> <span>Post Internship</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="active"><a href="vacancy_post.php"><i class="fa fa-circle-o"></i> Post</a></li>
					</ul>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Dashboard
				<small>Vacancy Post</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="empl_dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-8">								
							<form action="vacancy_post_submit.php" method="post" accept-charset="utf-8">
								<fieldset>
									<legend>Internship Details</legend>
									<div class="form-group">
										<label for="compDescription" class="col-lg-4 control-label">Company Description</label>
										<div class="col-lg-10">
											<textarea class="form-control" name="compDescription" rows="3" id="compDescription"></textarea>
											<span class="help-block">Write Your Company Details</span>
										</div>
									</div>
									<div class="form-group">
										<label for="internArea" class="col-lg-4 control-label">Post Name</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="internArea" placeholder="Intership Area" name="internArea">
										</div>
									</div>
									<div class="form-group">
										<label for="jobDetails" class="col-lg-4 control-label">Job Details</label>
										<div class="col-lg-10">
											<textarea class="form-control" rows="3" name="jobDetails" id="jobDetails"></textarea>
											<span class="help-block">Write Your Job Details</span>
										</div>
									</div>
									<div class="form-group">
										<label for="stipend" class="col-lg-4 control-label">Stipend</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="stipend" placeholder="Stipend" name="stipend">
										</div>
									</div>
									<div class="form-group">
										<label for="availablity" class="col-lg-4 control-label">Internships availablity</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="availablity" placeholder="Internships availablity" name="availablity">
										</div>
									</div>
									<div class="form-group">
										<label for="select" class="col-lg-4 control-label">Status</label>
										<div class="col-lg-10">
											<select class="form-control" id="status" name="status">
												<option value="1">Active</option>
												<option value="2">Inactive</option>
											</select>
										</div>
									</div>
									<input type="hidden" name="hdnUserid" value="<?php echo $_SESSION['user_id']?>">
									<div class="form-group">
										<label for="select" class="col-lg-4 control-label"></label>
										<div class="col-lg-10">
											<button type="reset" class="btn btn-default">Cancel</button>
											<input type="submit" id="intenshipSubmit" name="intenshipSubmit" class="btn btn-primary" value="Submit">
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>	
			</div>
		</section>
			<!-- /.row -->
			<!-- Main row -->
			
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->
<?php include '../includes/empdash_footer.php'; ?>
