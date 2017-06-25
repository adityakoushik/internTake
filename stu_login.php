<?php session_start(); ?>
<?php include 'includes/header.php'; ?>
<?php 
	if(!isset($_SESSION['stu_id']) && empty($_SESSION['stu_id'])){
		?>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center pull-right">
					<h2>Student Login</h2><small class="label label-success"><a href="stu_register.php" title="register">Not Register User! Register Here</a></small>
					<form method="post" action="stu_loginProcess.php">

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Email-id</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="submit" name="stu_login" value="Login" id="stu_login" class="btn btn-primary btn-lg btn-block login-button">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php
	}else{
		header('Location:stu_dashboard.php');
	}
 ?>
<?php 
	if(isset($_GET['error'])){
		echo '<script>alert("Wrong Username or Password");</script>';
	}
 ?>
<?php include 'includes/footer.php'; ?>   