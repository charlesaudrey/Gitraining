@extends('layouts.verification-app')

@section('verification-content')

    <!-- Content area start -->
    <div class="contact-bg overview-bgi">

        <div class="container">
            <div class="row">

                <center>
                    <h1 style="margin-top: 50px;">Choose Property type</h1>
                </center>
                <div class="col-lg-3"></div>
                <a href="{{route('verification.organization', $token->token)}} ">
                    <div class="col-lg-3 zoom">
                        <!-- Form content box start -->
                        <div class="form-content-box">
                            <!-- logo -->

                            <!-- details -->
                            <div class="details">



                                <h3>Organization</h3>

                                <img src="{{asset('frontend/img/organization.png')}}" alt="white-logo" style="width:150px;">
                            </div>
                            <!-- Footer -->
                            <div class="footer">
                                <span>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, nam.
                                </span>
                            </div>
                        </div>
                        <!-- Form content box end -->
                    </div>
                </a>
                <a href="{{route('verification.organization', $token->token)}} ">
                    <div class="col-lg-3 zoom">
                        <!-- Form content box start -->
                        <div class="form-content-box">
                            <!-- logo -->

                            <!-- details -->
                            <div class="details">
                                <h3>Individual</h3>
                                <img src="{{asset('frontend/img/individual.png')}}" alt="white-logo" style="width:150px;">

                            </div>
                            <!-- Footer -->
                            <div class="footer">
                                <span>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, nam.
                                </span>
                            </div>
                        </div>
                        <!-- Form content box end -->
                    </div>
                </a>
                <div class="col-lg-3"></div>
            </div>
            <span style="position:absolute;top:85%;left:50%;transform: translate(-50%, -50%);">
                <center>
                    <a href="{{route('index')}}"> Back to Home</a>
                </center>
            </span>
        </div>
    </div>


    
    @endsection 
    <!-- Content area end -->


