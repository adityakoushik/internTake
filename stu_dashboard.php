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
	<div class="container-fluid">
		<div class="col-lg-12">
			<table class="table table-striped table-hover">
				<ul class="breadcrumb">
				<li class="active"><span class="label label-primary">Available Internship</span></li>
				</ul>
				<thead>
			 		<tr>
			 			<th>Aid</th>
			 			<th>Id</th>
			 			<th>Date</th>
			 			<th>Profile</th>
			 			<th>Stipend</th>
			 			<th>Company</th>
			 			<th>Application Status</th>
			 			<th>Vacancies</th>
			 		</tr>
			 	</thead>
				<tbody>
					<?php 
						$fetch_appliedintern_id = mysql_query("select internship_details_id,intern_id from applied_intern where intern_id = '".$_SESSION['stu_id']."'");
						if(mysql_num_rows($fetch_appliedintern_id)){
							$row = mysql_fetch_array($fetch_appliedintern_id);
							$in_id = $row['internship_details_id'];
							$intern_id  = $row['intern_id'];
						}

						
					?>

					<?php 
						$fetch_job = mysql_query("select intrnd.*,empld.id,empld.empl_organisation from internship_details intrnd JOIN employer_details empld ON intrnd.userId = empld.id order by postDate desc");
						if(mysql_num_rows($fetch_job) > 0){
							while($row = mysql_fetch_array($fetch_job)){
								?>
								<tr>
									<td><?php echo $row['aid']; ?></td>
									<td><?php echo $row['id']; ?></td>
									<td><?php echo $row['postDate']; ?></td>
									<td><?php echo $row['internArea']; ?></td>
									<td><?php echo $row['stipend']; ?></td>
									<td>
										<?php 
											echo $row['empl_organisation'];
										?>
									</td>
									<td>
										<?php 
											if($row['status'] == 1){
												echo 'Active';
											}elseif ($row['status'] == 2) {
												echo 'Inactive';
											}
										?>
									</td>
									<td><?php echo $row['availablity']; ?></td>
									<td>
										<?php
											if($row['availablity'] > 0){
												// if(isset($in_id) && $in_id == ''){
													if($row['aid'] != $in_id){
													?>
													<a href="stu_apply.php?cmpnyid=<?php echo $row['userId']?>&aid=<?php echo $row['aid']; ?>" title="apply" class="btn btn-primary" data-id="<?php echo $row['userId']?>">Apply</a>
													<?php
													}else{
														?>
														<a href="javascript:void(0);" class="btn btn-primary" disabled>Already Applied</a>	
														<?php
													}
												// }
											}else{
												?>
												<a href="javascript:void(0);" class="btn btn-primary" disabled>No Opening</a>
												<?php
											} 
										?>
									</td>
								</tr>
								<?php
							}
						}else{
							echo 'No Data Found.';
						}
					 ?>
				</tbody>
			</table>
		</div>
	</div>
<?php include 'includes/studash_footer.php'; ?>
