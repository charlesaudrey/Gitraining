
@extends('layouts.homepage')

@section('homepage-content')
   
    <div class="page_loader"></div>

    <div class="banner banner-2">
        <div class="banner-inner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="frontend/img/banner/banner1.jpg" alt="banner-slider-3">
                        <div class="carousel-caption banner-slider-inner banner-top-align">
                            <div class="banner-content text-center">
                                <h1 data-animation="animated fadeInDown delay-05s"><span>Welcome to</span> Drewly
                                </h1>
                                <p data-animation="animated fadeInUp delay-1s">Lorem ipsum dolor sit amet,
                                    conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                                <a href="#" class="btn btn-md btn-theme"
                                    data-animation="animated fadeInUp delay-15s">Get Started Now</a>
                                <a href="#" class="btn btn-md border-btn-theme"
                                    data-animation="animated fadeInUp delay-15s">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="frontend/img/banner/banner2.jpg" alt="banner-slider-2">
                        <div class="carousel-caption banner-slider-inner banner-top-align">
                            <div class="banner-content text-center">
                                <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place To</span> Find Room
                                </h1>
                                <p data-animation="animated fadeInUp delay-05s">Lorem ipsum dolor sit amet,
                                    conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                                <a href="#" class="btn btn-md btn-theme"
                                    data-animation="animated fadeInUp delay-15s">Get Started Now</a>
                                <a href="#" class="btn btn-md border-btn-theme"
                                    data-animation="animated fadeInUp delay-15s">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="frontend/img/banner/banner3.jpg" alt="banner-slider-1">
                        <div class="carousel-caption banner-slider-inner banner-top-align">
                            <div class="banner-content text-center">
                                <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place</span> for relux
                                </h1>
                                <p data-animation="animated fadeInLeft delay-1s">Lorem ipsum dolor sit amet,
                                    conconsectetuer adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                                <a href="#" class="btn btn-md btn-theme"
                                    data-animation="animated fadeInLeft delay-15s">Get Started Now</a>
                                <a href="#" class="btn btn-md border-btn-theme"
                                    data-animation="animated fadeInLeft delay-20s">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="slider-mover-left" aria-hidden="true">
                        <i class="fa fa-angle-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="slider-mover-right" aria-hidden="true">
                        <i class="fa fa-angle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!-- Main header start -->
            <header class="main-header main-header-2 main-header-3">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#app-navigation" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="index.html" class="logo">
                                <img src="frontend/img/logos/white-logo.png" alt="logo">
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="navbar-collapse collapse" role="navigation" aria-expanded="true"
                            id="app-navigation">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Home
                                    </a>

                                </li>
                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Rooms<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">1 Column</a></li>
                                        <li><a href="#">2 Column</a></li>
                                        <li><a href="#">3 Column</a></li>
                                        <li><a href="#">4 Column</a></li>
                                        <li><a href="#">Rooms Details</a></li>
                                        <li><a href="#">Rooms Details 2</a></li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Blog<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Blog Right Sidebar</a></li>
                                        <li><a href="#">Blog Left Sidebar</a></li>
                                        <li><a href="#">Blog Fullwidth</a></li>
                                        <li><a href="#">Blog Creative</a></li>
                                        <li><a href="#">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        About Us<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Contact 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Contact
                                    </a>

                                </li>

                            </ul>
                            <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                                <li>
                                <a class="btn-navbar btn btn-sm btn-white-sm-outline btn-round" href="{{route('register.index')}}">List Your
                                        Properties</a>
                                </li>
                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Login
                                    </a>

                                </li>
                                <li class="dropdown">
                                    <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                                        Register
                                    </a>

                                </li>
                            </ul>
                        </div>

                        <!-- /.navbar-collapse -->
                        <!-- /.container -->
                    </nav>

                    <div class="header-search animated fadeInDown">
                        <form class="form-inline">
                            <input type="text" class="form-control" id="searchKey" placeholder="Search...">
                            <div class="search-btns">
                                <button type="submit" class="btn btn-default">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </header>
            <!-- Main header end -->
        </div>
    </div>
    <!-- Banner end -->

    <!-- Search area box 2 start -->
    <div class="search-area-box-2 search-area-box-6">
        <div class="container">
            <div class="search-contents">
                <form method="GET">
                    <div class="row search-your-details">
                        <div class="col-lg-3 col-md-3">
                            <div class="search-your-rooms mt-20">
                                <h3 class="hidden-xs hidden-sm">Search</h3>
                                <h2 class="hidden-xs hidden-sm">Your <span>Rooms</span></h2>
                                <h2 class="hidden-lg hidden-md">Search Your <span>Rooms</span></h2>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="btn-default datepicker" placeholder="Check In">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields form-control-2" name="room">
                                            <option>Room</option>
                                            <option>Single Room</option>
                                            <option>Double Room</option>
                                            <option>Deluxe Room</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields form-control-2" name="adults">
                                            <option>Adult</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields form-control-2" name="children">
                                            <option>Child</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <button class="search-button btn-theme">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Search area box 2 end -->

    <!-- Hotel alpha start -->
    <div class="hotel-alpha content-area-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text">
                        <h5>Hotel Bayview</h5>
                        <h1>Welcome To Drewly</h1>
                        <p>Duis vel nisl lacinia, facilisis in, consectetur leon vestibulum et ullamcorper tortor leon
                            placerat mauris tincidunt ut non velit faucibus nam a
                            pretium sapien nunc quis congue purus nunc feugiat nec purus a ultricies suspendisse in
                            fringilla est sodales dui, non mattis tortor volutpat vitae.</p>
                        <br>
                        <a href="#" class="btn btn-outline2 btn-md">View Details</a>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6">
                    <img src="frontend/img/b.jpg" alt="a" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel alpha end -->

    <!-- Hotel section start -->
    <div class="content-area hotel-section chevron-icon">
        <div class="overlay">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Hotel Partner</h1>
                    <p>These best rooms chosen by our customers</p>
                </div>
                <div class="row">
                    <div class="carousel our-partners slide" id="ourPartners3">
                        <div class="col-lg-12 mb-30">
                            <a class="right carousel-control" href="#ourPartners3" data-slide="prev"><i
                                    class="fa fa-chevron-left icon-prev"></i></a>
                            <a class="right carousel-control" href="#ourPartners3" data-slide="next"><i
                                    class="fa fa-chevron-right icon-next"></i></a>
                        </div>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="hotel-box">
                                        <!--header -->
                                        <div class="header clearfix">
                                            <img src="frontend/img/room/img-1.jpg" alt="img-1" class="img-responsive">
                                        </div>
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <div class="pr">
                                                $567<sub>.99/Night</sub>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-full"></i>
                                                </div>
                                            </div>
                                            <h3>
                                                <a href="">KL Executive</a>
                                            </h3>
                                            <h5 class="location">
                                                <a href="#">
                                                    <i class="fa fa-map-marker"></i>Makati City, Philippines<br><br><br>
                                                </a>
                                            </h5>
                                            <p>Lorem ipsum dolor sit amet, conser adipisic elit, sed do eiusmod tempor
                                                incididunt ut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="hotel-box">
                                        <!--header -->
                                        <div class="header clearfix">
                                            <img src="frontend/img/room/img-2.jpg" alt="img-2" class="img-responsive">
                                        </div>
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <div class="pr">
                                                ₱6,100<sub>.99/Night</sub>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-full"></i>
                                                </div>
                                            </div>
                                            <h3>
                                                <a href="#">Marco Polo</a>
                                            </h3>
                                            <h5 class="location">
                                                <a href="#">
                                                    <i class="fa fa-map-marker"></i>
                                                    Cebu Veterans Drive, Nivel Hills, 6000, Cebu City,
                                                    Philippines<br><br>
                                                </a>
                                            </h5>
                                            <P>Lorem ipsum dolor sit amet, conser adipisic elit, sed do eiusmod tempor
                                                incididunt ut.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="hotel-box">
                                        <!--header -->
                                        <div class="header clearfix">
                                            <img src="frontend/img/room/img-4.jpg" alt="img-4" class="img-responsive">
                                        </div>
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <div class="pr">
                                                $567<sub>.99/Night</sub>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-full"></i>
                                                </div>
                                            </div>
                                            <h3>
                                                <a href="#">Hotel Le Monet</a>
                                            </h3>
                                            <h5 class="location">
                                                <a href="#">
                                                    <i class="fa fa-map-marker"></i>Ordonio Drive, Camp John Hay, Loakan
                                                    Road, 2600, Baguio, Philippines
                                                </a>
                                            </h5>
                                            <p>Lorem ipsum dolor sit amet, conser adipisic elit, sed do eiusmod tempor
                                                incididunt ut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="hotel-box">
                                        <!--header -->
                                        <div class="header clearfix">
                                            <img src="frontend/img/room/img-3.jpg" alt="img-3" class="img-responsive">
                                        </div>
                                        <!-- Detail -->
                                        <div class="detail clearfix">
                                            <div class="pr">
                                                $567<sub>.99/Night</sub>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-full"></i>
                                                </div>
                                            </div>
                                            <h3>
                                                <a href="#">Red Planet</a>
                                            </h3>
                                            <h5 class="location">
                                                <a href="#">
                                                    <i class="fa fa-map-marker"></i>1740 A Mabini Street, 1004, Manila,
                                                    Philippines<br><br>
                                                </a>
                                            </h5>
                                            <P>Lorem ipsum dolor sit amet, conser adipisic elit, sed do eiusmod tempor
                                                incididunt ut.</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hotel section end -->

    <!-- Our facilties section start -->
    <div class="our-facilties-section content-area-3">
        <div class="overlay">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1>Our Facilties</h1>
                    <p>Check out our hotel facilties </p>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-school-call-phone-reception"></i>
                            </div>
                            <div class="media-body">
                                <h3>24-hour Reception</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-room-service"></i>
                            </div>
                            <div class="media-body">
                                <h3>Room Service</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-graph-line-screen"></i>
                            </div>
                            <div class="media-body">
                                <h3>Flat Screen TV</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-weightlifting"></i>
                            </div>
                            <div class="media-body">
                                <h3>Gym</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-parking"></i>
                            </div>
                            <div class="media-body">
                                <h3>Free Parking</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                        <div class="services-box-2 media">
                            <div class="media-left">
                                <i class="flaticon-wifi-connection-signal-symbol"></i>
                            </div>
                            <div class="media-body">
                                <h3>Free Wi-Fi</h3>
                                <p>Lorem ipsum dolor sit amet, conser adipisicing elit. Numquam deleniti amet quia
                                    voluptate laboriosam</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our facilties section end -->

    <!-- News popular testimonials start -->
    <div class="news-popular-testimonials-section content-area-7">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="recent-news hidden-mb-60">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1>Recent Events</h1>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="frontend/img/room/small-img.jpg" alt="small-img">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Wedding David & karen</a>
                                </h3>
                                <p>From 80 $ per night</p>
                                <h5><i class="fa fa-calendar"></i>18/10/2017</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="frontend/img/room/small-img-2.jpg" alt="small-img-2">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Pool Party in summer</a>
                                </h3>
                                <p>From 80 $ per night</p>
                                <h5><i class="fa fa-calendar"></i>18/10/2017</h5>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="frontend/img/room/small-img-3.jpg" alt="small-img-3">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">
                                    <a href="#">Festival Music Electronic</a>
                                </h3>
                                <p>From 80 $ per night</p>
                                <h5><i class="fa fa-calendar"></i>18/10/2017</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-6">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1>Testimonials</h1>
                    </div>
                    <!-- Testimonial 3 start -->
                    <div class="testimonials-3 hidden-mb-60">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <div id="carousel-custom3" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item content active clearfix">
                                                <div class="item-inner">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                        pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                                    <div class="testimonials-avatar">
                                                        <img src="frontend/img/testimonial/avatar-2.jpg" alt="avatar-2">
                                                    </div>
                                                    <div class="author-name">
                                                        Karen Paran
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item content clearfix">
                                                <div class="item-inner">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                        pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                                    <div class="testimonials-avatar">
                                                        <img src="frontend/img/testimonial/avatar-3.jpg" alt="avatar-3">
                                                    </div>
                                                    <div class="author-name">
                                                        David Jackson
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item content clearfix">
                                                <div class="item-inner">
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in
                                                        pulvinar neque. Nulla finibus lobortis pulvinar. Donec</p>
                                                    <div class="author-name">
                                                        John Doe
                                                    </div>
                                                    <div class="testimonials-avatar">
                                                        <img src="frontend/img/testimonial/avatar-4.jpg" alt="avatar-4">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-custom3" role="button"
                                            data-slide="prev">
                                            <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-custom3" role="button"
                                            data-slide="next">
                                            <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial 3 end -->
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 hidden-sm">
                    <div class="gallery-section">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1>Popular Places</h1>
                        </div>
                        <!--  Photo gallery start -->
                        <div class="photo-gallery simple-slider">
                            <div id="carousel-custom2" class="carousel slide" data-ride="carousel">
                                <div class="carousel-outer">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <img src="frontend/img/popular-places/img-1.jpg" class="thumb-preview"
                                                alt="Chevrolet Impala">
                                        </div>
                                        <div class="item active">
                                            <img src="frontend/img/popular-places/img-2.jpg" class="thumb-preview"
                                                alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="frontend/img/popular-places/img-3.jpg" class="thumb-preview"
                                                alt="Chevrolet Impala">
                                        </div>
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-custom2" role="button"
                                        data-slide="prev">
                                        <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                            <i class="fa fa-angle-left"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-custom2" role="button"
                                        data-slide="next">
                                        <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Photo gallery end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- News popular testimonials end -->

    <!-- Gallery secion start -->
    <div class="gallery clearfix content-area-11">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Gallery</h1>
                <p>Check out our hotel photo gallery</p>
            </div>

            <ul class="list-inline-listing filters filters-listing-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Classic</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">Deluxe</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">Royal</li>
                <li data-filter="4" class="btn btn-inline filtr-button filtr">Luxury</li>
            </ul>

            <div class="row">
                <div class="filtr-container">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="3, 1, 4">
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-21.jpg" alt="img-21" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Luxury Room</h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="3, 4, 2">
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-2.jpg" alt="img-2" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Double Room</h3>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-1.jpg" alt="img-1" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Single Room</h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="1, 4, 3">
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-22.jpg" alt="img-14" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Family Room</h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 filtr-item" data-category="2, 3, 1">
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-6.jpg" alt="img-6" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Standard</h3>
                                </div>
                            </figcaption>
                        </figure>
                        <figure class="portofolio-thumb">
                            <a href="#"><img src="frontend/img/room/img-4.jpg" alt="img-4" class="img-responsive"></a>
                            <figcaption>
                                <div class="figure-content">
                                    <h3 class="title">Couple Room</h3>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery secion end -->

    <!-- Blog section start -->
    <div class="blog-section content-area-11">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1>Our Blog</h1>
                <p>Check out some recent news posts.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="frontend/img/room/img-2.jpg" alt="img-2" class="img-responsive">
                            <div class="profile-user">
                                <img src="frontend/img/avatar/avatar-1.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Antony</a></strong>
                                    </li>
                                    <li class="mr-0"><span>Feb 31, 2018</span></li>
                                    <li class="fr mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>15</li>
                                    <li class="fr"><a href="#"><i class="fa fa-calendar"></i></a>5k</li>
                                </ul>
                            </div>
                            <h3>
                                <a href="#">Standard Post Format Title</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                            <a href="#" class="read-more-btn">Read more...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 hidden-sm">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="frontend/img/room/img-6.jpg" alt="img-6" class="img-responsive">
                            <div class="profile-user">
                                <img src="frontend/img/avatar/avatar-2.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">Teseira</a></strong>
                                    </li>
                                    <li class="mr-0"><span>Feb 31, 2018</span></li>
                                    <li class="fr mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>15</li>
                                    <li class="fr"><a href="#"><i class="fa fa-calendar"></i></a>5k</li>
                                </ul>
                            </div>
                            <h3>
                                <a href="#">Alpha Hotel pars studiorum</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                            <a href="#" class="read-more-btn">Read more...</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog-1">
                        <div class="blog-photo">
                            <img src="frontend/img/room/img-3.jpg" alt="img-3" class="img-responsive">
                            <div class="profile-user">
                                <img src="frontend/img/avatar/avatar-3.jpg" alt="user">
                            </div>
                        </div>
                        <div class="detail">
                            <div class="post-meta clearfix">
                                <ul>
                                    <li>
                                        <strong><a href="#">John Doe</a></strong>
                                    </li>
                                    <li class="mr-0"><span>Feb 31, 2018</span></li>
                                    <li class="fr mr-0"><a href="#"><i class="fa fa-commenting-o"></i></a>15</li>
                                    <li class="fr"><a href="#"><i class="fa fa-calendar"></i></a>5k</li>
                                </ul>
                            </div>
                            <h3>
                                <a href="#">Best night photo at Alpha hotel in</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p>
                            <a href="#" class="read-more-btn">Read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog section end -->

    <!-- Partners block start -->
    <div class="partners-block">
        <div class="container">
            <h1>Our Partners</h1>
            <div class="row">
                <div class="col-md-12"><br>
                    <div class="carousel our-partners slide" id="ourPartners">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#">
                                        <img src="frontend/img/brand/booking.png" alt="audiojungle">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#">
                                        <img src="frontend/img/brand/airbnb.png" alt="themeforest">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#">
                                        <img src="frontend/img/brand/agoda.png" alt="tuts">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#">
                                        <img src="frontend/img/brand/expedia.png" alt="graphicriver">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <a href="#">
                                        <img src="frontend/img/brand/tripadvisor.png" alt="codecanyon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i
                                class="fa fa-chevron-left icon-prev"></i></a>
                        <a class="right carousel-control" href="#ourPartners" data-slide="next"><i
                                class="fa fa-chevron-right icon-next"></i></a>
                    </div><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners block end -->


    @endsection 
