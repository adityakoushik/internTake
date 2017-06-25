<?php session_start(); ?>
<?php include 'includes/header.php'; ?>
<?php include 'config/config.php'; ?>
<?php 
		if(!isset($_SESSION['stu_id']) && empty($_SESSION['stu_id'])){
			?>
			<div class="container">
				<div class="col-lg-12" style="margin-top: 10%;">
					<div class="row">
						<div class="col-lg-12">
							<div class="well well-lg">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Available Internship</h3>
									</div>
									<div class="panel-body">
										<div class="container-fluid">
											<div class="col-lg-12">
												<table class="table table-striped table-hover">
													<thead>
														<tr>
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
														$fetch_job = mysql_query("select intrnd.*,empld.id,empld.empl_organisation from internship_details intrnd JOIN employer_details empld ON intrnd.userId = empld.id order by postDate desc");
														if(mysql_num_rows($fetch_job) > 0){
															while($row = mysql_fetch_array($fetch_job)){
																?>
																<tr>
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
																	<td><?php echo $row['compDescription']; ?></td>
																	<td>
																		<?php 
																		if($row['availablity'] > 0){
																			?>
																			<a href="stu_login.php" class="btn btn-primary">Apply</a>
																			<?php
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
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php	
		}else{
			header('Location:stu_dashboard.php');
		}
include 'includes/footer.php'; ?>
