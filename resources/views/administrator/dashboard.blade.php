@extends('layouts.app')

@section('content')

<style>
.fixedfooter{
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>

<div id="main">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div class="section">
                    <!-- card stats start -->
                    <div id="card-stats" class="pt-0">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card animate fadeLeft">
                                    <div class="card-content cyan white-text">
                                        <p class="card-stats-title"><i class="material-icons">person_outline</i> User</p>

                                        <h4 class="card-stats-number white-text">1</h4>
                                        {{-- <p class="card-stats-compare">
                                            <i class="material-icons">keyboard_arrow_up</i> 15%
                                            <span class="cyan text text-lighten-5">from yesterday</span>
                                        </p> --}}
                                    </div>
                                    <div class="card-action cyan darken-1">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card animate fadeLeft">
                                    <div class="card-content red accent-2 white-text">
                                        <p class="card-stats-title"><i class="material-icons">attach_money</i>Organization</p>
                                        <h4 class="card-stats-number white-text">3</h4>
                                        
                                    </div>
                                    <div class="card-action red">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card animate fadeRight">
                                    <div class="card-content orange lighten-1 white-text">
                                        <p class="card-stats-title"><i class="material-icons">trending_up</i> Property</p>
                                        <h4 class="card-stats-number white-text">2</h4>
                                       
                                    </div>
                                    <div class="card-action orange">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card animate fadeRight">
                                    <div class="card-content green lighten-1 white-text">
                                        <p class="card-stats-title"><i class="material-icons">content_copy</i> Rooms</p>
                                        <h4 class="card-stats-number white-text">7</h4>
                                        
                                    </div>
                                    <div class="card-action green">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div><!-- START RIGHT SIDEBAR NAV -->
           
                <!-- END RIGHT SIDEBAR NAV -->
            </div>
            <div class="content-overlay"></div>
        </div>

     
        

    </div>
</div>


@endsection 
