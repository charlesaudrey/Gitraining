<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Drewly - Channel Manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/linearicons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('frontend/css/skins/purple.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{asset('frontend/js/ie-emulation-modes-warning.js')}}"></script>

</head>

<body>

    <main class="py-4">
        @yield('homepage-content')
    </main>

        <!-- Footer start -->
        <footer class="main-footer clearfix">
            <div class="container">
                <!-- Footer info-->
                <div class="footer-info">
                    <div class="row">
                        <!-- About us -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="{{asset('frontend/img/logos/white-logo.png')}}" alt="white-logo">
                                    </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla
                                    finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus
                                    suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis
                                    fringilla diam.</p>
                            </div>
                        </div>
                        <!-- Contact Us -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item">
                                <div class="main-title-2">
                                    <h1>Contact Us</h1>
                                </div>
                                <ul class="personal-info">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        Address: 44 New Design Street,
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        Email:<a href="mailto:sales@hotelempire.com">info@themevessel.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        Phone: <a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-fax"></i>
                                        Fax: +0477 85X6 552
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                                <ul class="social-list">
                                    <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Gallery -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item gallery">
                                <div class="main-title-2">
                                    <h1>Gallery</h1>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img-2.jpg')}}" alt="small-img-2">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img-4.jpg')}}" alt="small-img-4">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img-5.jpg')}}" alt="small-img-5">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img-3.jpg')}}" alt="small-img-3">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img-6.jpg')}}" alt="small-img-6">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/room/small-img.jpg')}}" alt="small-img">
                                        </a>
                                    </li>
    
                                </ul>
                            </div>
                        </div>
                        <!-- Newsletter -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-item newsletter">
                                <div class="main-title-2">
                                    <h1>Newsletter</h1>
                                </div>
                                <div class="newsletter-inner">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum.</p>
                                    <form action="#" method="GET">
                                        <p><input type="text" class="form-contact" name="email"
                                                placeholder="Enter your email"></p>
                                        <p><button type="submit" name="submitNewsletter" class="btn btn-small">
                                                Signup
                                            </button></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="copy-right">
            <div class="container">
                &copy; 2019 <a href="#" target="_blank">All Right Reserve</a>. Develop by Iristech.
            </div>
        </div>
        <!-- Copy end right-->
    
        <script src="{{asset('frontend/js/jquery-2.2.0.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-submenu.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.mb.YTPlayer.js')}}"></script>
        <script src="{{asset('frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.scrollUp.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('frontend/js/jquery.filterizr.js')}}"></script>
        <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('frontend/js/app.js')}}"></script>
      
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="{{asset('frontend/js/ie10-viewport-bug-workaround.js')}}"></script>
        <!-- Custom javascript -->
    
    </body>
    
    </html>