<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Sweet alert js -->
    <script src="assets/js/sweetalert2.min.js"></script>
    <script>
			$('.apply').click(function(){
				var ID=$(this).attr('data-id');alert(ID);
				$.ajax({
					url:"stu_dashboard.php?id="+ID,
					cache:false,
					success:function(data){
						$('.modal-content').html(data);
					}
				}
				);
			});
	</script>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Apply</h4>
				</div>
				<div class="modal-body">
					<?php 
						// if(isset($_GET['id'])){
						// 	echo $_GET['cmpnyid'];
						// }
						$id = $_GET['id'];
						echo $id;
					 ?>
					<form action="" method="post" enctype="multipart/form-data">
						<input type="file" name="file" />
						<button type="submit" class="btn btn-primary" name="uploadcv">upload</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>