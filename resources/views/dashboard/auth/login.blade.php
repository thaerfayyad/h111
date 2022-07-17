<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard_files/assets/images/favicon.png') }}">
    <title>Onlile Store | Admin Login</title>
    <!-- Custom CSS -->
    <link href="{{ asset('dashboard_files/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/toastr/toastr.min.css') }}">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        {{--  <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>  --}}
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
 
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url({{ asset('dashboard_files/assets/images/big/auth-bg.jpg') }}) no-repeat center center;">
            <div class="auth-box">
                <div id="loginform">
                    <div class="logo">
                        <span class="db"><img src="{{ asset('dashboard_files/assets/images/logo-icon.png') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Sign In to Admin</h5>
                    </div>
                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20"  >
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" id="email" placeholder="email" aria-label="Username" aria-describedby="basic-addon1" value="admin@app.com">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" id="password" aria-label="Password" aria-describedby="basic-addon1" value="123456">
                                </div>

                                <div class="form-group text-center">
                                    <div class="col-xs-12 p-b-20">
                                        <button class="btn btn-block btn-lg btn-info"   type="button" onclick="login()">Log In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{--  <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="{{ asset('dashboard_files/assets/images/logo-icon.png') }}" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recover Password</h5>
                        <span>Enter your Email and instructions will be sent to you!</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Username">
                                </div>
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  --}}
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script  src="{{ asset('dashboard_files/plugins/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('dashboard_files/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dashboard_files/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard_files/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->

    <script>
		function login(){
	      axios.post('/dashboard/login', {
	        email: document.getElementById('email').value,
	        password: document.getElementById('password').value,


	      }).then(function (response) {
	          window.location.href = '/dashboard';
	      })
	        .catch(function (error) {
	          toastr.error(error.response.data.message)
	      });
	    }
	</script>


</body>

</html>
