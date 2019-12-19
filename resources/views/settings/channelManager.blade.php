@extends('layouts.app')

@section('content')

<div id="main">
    <div class="row">
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
                    <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">
                            <span>Channel Manager</span>
                        </h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Settings</a></li>
                            <li class="breadcrumb-item active">Channel Manager</li>
                        </ol>
                    </div>
                    <div class="col s2 m6 l6">
                        <a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!"
                            data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span
                                class="hide-on-small-onl">Settings</span><i
                                class="material-icons right">arrow_drop_down</i></a>
                        <ul class="dropdown-content" id="dropdown1" tabindex="0">
                            <li tabindex="0">
                                <a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span
                                        class="new badge red">2</span></a>
                            </li>
                            <li tabindex="0">
                                <a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a>
                            </li>
                            <li tabindex="0">
                                <a class="grey-text text-darken-2" href="page-faq.html">FAQ</a>
                            </li>
                            <li class="divider" tabindex="-1"></li>
                            <li tabindex="0">
                                <a class="grey-text text-darken-2" href="user-login.html">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!--Basic Card-->
               

             
                <!--Card Reveal-->
                <div id="card-reveal" class="section">
                    <h4 class="header">Channel Manager</h4>
                    <p>
                        Here you can connect in our OTA's.
                    </p>

                    <div class="row">
                        <div class="col s12 m6 l4">
                            <div class="card">
                                <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="{{ asset('app-assets/images/logo/bookingcom.png')}}"
                                        alt="bookingcom" />
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Booking.com
                                        <i class="material-icons right">more_vert</i>
                                    </span>
                                    <p><i>Connect with us</i></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Booking.com
                                        <i class="material-icons right">close</i>
                                    </span>
                                    <input type="text" placeholder="username">
                                    <input type="text" placeholder="password">
                                    <input type="text" placeholder="Hotel name"><br><br>
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                          </button>
                                </div>
                            </div>
                           
                        </div>

                        <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="{{ asset('app-assets/images/logo/agoda.png')}}"
                                            alt="bookingcom" />
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator grey-text text-darken-4">agoda
                                            <i class="material-icons right">more_vert</i>
                                        </span>
                                        <p><i>Connect with us</i></p>
                                    </div>
                                    <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Agoda
                                                <i class="material-icons right">close</i>
                                            </span>
                                            <input type="text" placeholder="username">
                                            <input type="text" placeholder="password">
                                           
                                            <input type="text" placeholder="Hotel name"><br><br>
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                          </button>
                                        </div>
                                </div>
                             
                            </div>
                            <div class="col s12 m6 l4">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="{{ asset('app-assets/images/logo/expedia.png')}}"
                                                alt="bookingcom" />
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">expedia
                                                <i class="material-icons right">more_vert</i>
                                            </span>
                                            <p><i>Connect with us</i></p>
                                        </div>
                                        <div class="card-reveal">
                                                <span class="card-title grey-text text-darken-4">Expedia
                                                    <i class="material-icons right">close</i>
                                                </span>
                                                <input type="text" placeholder="username">
                                                <input type="text" placeholder="password">
                                                <input type="text" placeholder="Hotel name">
                                             <br><br>
                                    <button class="btn waves-effect waves-light " type="submit" name="action">Send
                                            <i class="material-icons right">send</i>
                                          </button>
                                            </div>
                                    </div>
                                   
                                </div>
                    </div>
                </div>

            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<!-- END: Page Main-->
@endsection