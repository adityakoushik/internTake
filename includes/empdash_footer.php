<script src="../assets/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../assets/js/bootstrap.min.js"></script>

<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="plugins/fastclick/fastclick.js"></script>

<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
<script src="../assets/js/sweetalert2.min.js"></script>
<script>
	$(document).ready(function() {
		$('#intenshipSubmit').click(function() {
			var compDescription = $('#compDescription').val();
			var internArea = $('#internArea').val();
			var jobDetails = $('#jobDetails').val();
			var stipend    = $('#stipend').val();
			var availablity = $('#availablity').val();
			var status     = $('#status').val();
			if(compDescription == '' || internArea == '' || jobDetails == '' || stipend == '' || availablity == '' || status == ''){
				alert('Please Fill All Fields');

			}
		});
	});
</script>
</body>
</html>