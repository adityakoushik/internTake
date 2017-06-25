<?php session_start(); ?>
<?php include '../includes/emp_header.php'; ?>
<?php 
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		header('Location:empl_dashboard.php');
	}else{
		?>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center pull-right">
					<h3>Start Hiring Interns</h3>
					<form>
						<div class="form-group">
							<label for="orgname" class="cols-sm-2 control-label">Organisation Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="orgname" id="orgname"  placeholder="Enter your Organisation Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
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

						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Full Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Full Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="mobno" class="cols-sm-2 control-label">Your Mobile No</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="mobno" id="mobno"  placeholder="Enter your 10 Digit Mobile No"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<input type="button" name="empl_submit" value="POST INTERNSHIP FOR FREE" id="empl_submit" class="btn btn-primary btn-lg btn-block login-button">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Login Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Employer Login</h4>
					</div>
					<div class="modal-body">
						<form name="emplLogin" class="form-horizontal" method="post" action="emp_loginProess.php">
							<div class="form-group">
								<label for="empl_mail" class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="empl_mail" id="empl_mail" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="empl_pass" class="col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="empl_pass" id="empl_pass" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<input type="submit" name="empl_login" id="empl_login" value="Sign in" class="btn btn-default">
								</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
 ?>
 <?php 
 	if(isset($_GET['msg'])){
 		echo '<script>alert("Username or Password did not match");</script>';
 	}
  ?>
<?php include '../includes/emp_footer.php'; ?>