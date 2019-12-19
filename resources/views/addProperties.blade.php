<!DOCTYPE html>
<html lang="zxx">

<head>
   
    <title>Drewly - Channel Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-datepicker.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="frontend/css/skins/purple.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="frontend/js/ie-emulation-modes-warning.js"></script>

</head>

<body>


    <!-- Content area start -->
    <div class="contact-bg overview-bgi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form content box start -->
                    <div class="form-content-box">
                        <!-- logo -->
                        <a href="" class="clearfix alpha-logo">
                            <img src="{{asset('frontend/img/logos/white-logo.png')}}" alt="white-logo">
                        </a>
                        <!-- details -->
                        <div class="details">
                            <h3>Add your properties here.</h3>
                            <!-- Form start -->
                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="input-text" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="number" name="mobile" class="input-text" placeholder="Mobile Number">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="input-text" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="input-text" placeholder="Confirm Password">
                                </div>
                                <div class="checkbox">
                                    <div class="ez-checkbox pull-left">
                                        <label>
                                            <input type="checkbox" class="ez-hide">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forgot-password.html" class="link-not-important pull-right">Forgot
                                        Password</a>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="mb-0">
                                    <button type="submit" class="btn-md btn-theme btn-block">Add Properties </button>
                                </div>
                            </form>
                            <!-- Form end -->
                        </div>
                        <!-- Footer -->
                        <div class="footer">
                            <span>
                                Already a member ? <a href="">login here</a>
                            </span>
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content area end -->

    <script src="frontend/js/jquery-2.2.0.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
    <script src="frontend/js/bootstrap-submenu.js"></script>
    <script src="frontend/js/jquery.mb.YTPlayer.js"></script>
    <script src="frontend/js/wow.min.js"></script>
    <script src="frontend/js/bootstrap-select.min.js"></script>
    <script src="frontend/js/jquery.easing.1.3.js"></script>
    <script src="frontend/js/jquery.scrollUp.js"></script>
    <script src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="frontend/js/jquery.filterizr.js"></script>
    <script src="frontend/js/bootstrap-datepicker.min.js"></script>
    <script src="frontend/js/app.js"></script>
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <!-- Custom javascript -->

</body>

</html>