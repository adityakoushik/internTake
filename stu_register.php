<?php include 'includes/header.php'; ?>
<div class="container">
	<div class="row main">
		<div class="main-login main-center pull-right">
			<h2>Student Registration</h2>
			<small class="label label-success"><a href="stu_login.php" title="Login">Login</a></small>
			<form>
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

				<div class="form-group ">
					<input type="button" name="stu_submit" value="Register" id="stu_submit" class="btn btn-primary btn-lg btn-block login-button">
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>   