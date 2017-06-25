<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">InternTake</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0);">About</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Services</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Sweet alert js -->
    <script src="assets/js/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function(){  
            $("#stu_submit").click(function(){
                var name = $("#name").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var dataString = 'stu_name='+ name + '&stu_email='+ email + '&stu_password='+ password;
                if(name==''||email==''||password=='')
                {
                    swal(
                        'Oops...',
                        'Please Fill All Fields',
                        'error'
                        )
                }
                else
                {
                    $.ajax({
                        type: "POST",
                        url: "stu_registerProcess.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            swal(result);
                        }
                    });
                }
                return false;
            });
        });
    </script>

</body>

</html>