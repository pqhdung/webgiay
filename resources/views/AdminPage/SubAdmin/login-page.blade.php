<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../../backend/assets/images/favicon.ico">

        <!-- App css -->
        <link href="../../backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../../backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../../backend/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../../backend/assets/js/modernizr.min.js"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="account-pages">
                                <div class="account-box">
                                    <div class="account-logo-box">
                                        <h2 class="text-uppercase text-center">
                                            <a href="index.html" class="text-success">
                                                <span><img src="../../backend/assets/images/logo_dark.png" alt="" height="18"></span>
                                            </a>
                                        </h2>
                                        <h6 class="text-uppercase text-center font-bold mt-4">Sign In</h6>
                                    </div>
                                    <div class="account-content">
                                        @if (count($errors) >0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li class="text-danger"> {{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        @if (session('status'))
                                            <ul>
                                                <li class="text-danger"> {{ session('status') }}</li>
                                            </ul>
                                        @endif
                                        <form class="form-horizontal" action="{{ route('postLogin') }}" method="post">
                                            {{ csrf_field() }}

                                            <div class="form-group m-b-20 row">
                                                <div class="col-12">
                                                    <label for="emailaddress">Email address</label>
                                                    <input class="form-control" type="email" id="emailaddress" required="" 
                                                    placeholder="Enter your email" name="txtEmail">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">
                                                    <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                                    <label for="password">Password</label>
                                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="txtPassword">
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-20">
                                                <div class="col-12">

                                                    <div class="checkbox checkbox-success">
                                                        <input id="remember" type="checkbox" checked="">
                                                        <label for="remember">
                                                            Remember me
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-group row text-center m-t-10">
                                                <div class="col-12">
                                                    <button class="btn btn-block btn-gradient waves-effect waves-light" type="submit">Sign In</button>
                                                </div>
                                            </div>

                                        </form>

                                        <div class="row m-t-50">
                                            <div class="col-sm-12 text-center">
                                                <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
        </section>
        <!-- END HOME -->


        <!-- jQuery  -->
        <script src="../../backend/assets/js/jquery.min.js"></script>
        <script src="../../backend/assets/js/popper.min.js"></script>
        <script src="../../backend/assets/js/bootstrap.min.js"></script>
        <script src="../../backend/assets/js/waves.js"></script>
        <script src="../../backend/assets/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="../../backend/assets/js/jquery.core.js"></script>
        <script src="../../backend/assets/js/jquery.app.js"></script>

    </body>
</html>