<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>


    <meta charset="utf-8" />
    <title>Grahokshop - Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.png">



    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body id="body" class="auth-page" style="background-image: url('{{asset('/')}}admin/assets/images/p-1.png'); background-size: cover; background-position: center center;">
<!-- Log In page -->
<div class="container-md">
    <div class="row vh-100 d-flex justify-content-center">
        <div class="col-12 align-self-center">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="{{asset('/')}}admin/assets/images/logo....png" height="100" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold font-18">Let's Get Started Grahokshop</h4>
                                    <p class="text-muted  mb-0">Sign in to continue to Grahokshop.</p>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <form class="my-4" action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="form-group mb-2">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="email" placeholder="Enter username">
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                    </div><!--end form-group-->

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-6">
                                            <div class="form-check form-switch form-switch-success">
                                                <input class="form-check-input" type="checkbox" id="customSwitchSuccess">
                                                <label class="form-check-label" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-6 text-end">
                                            <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>
                                        </div><!--end col-->
                                    </div><!--end form-group-->

                                    <div class="form-group mb-0 row">
                                        <div class="col-12">
                                            <div class="d-grid mt-3">
                                                <button class="btn btn-warning" type="submit">Log In <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end form-group-->
                                </form><!--end form-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end col-->
    </div><!--end row-->
</div><!--end container-->
<!-- vendor js -->

<script src="{{asset('/')}}admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}admin/assets/libs/feather-icons/feather.min.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>

</body>


</html>
