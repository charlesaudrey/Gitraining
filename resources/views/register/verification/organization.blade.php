@extends('layouts.verification-app')

@section('verification-content')
<div class="contact-bg overview-bgi">
  <div class="container">
    <div class="row">
      <center>
          <h1 style="margin-top: 50px;">Choose Property type</h1>
      </center>
      <div class="col-lg-9 ">
        <div class="form-content-box" style="max-width: 1200px !important;">
          <div class="details">
            <div class="row">
              <form action="{{ route('verification.update', $token->id) }}" method="POST">
                @csrf
                @method('PATCH')
          
                <div class="col-lg-12">
                  <h3>Organization</h3>
                  <input type="hidden" value="5df99e773d110000950036e2" name="platform_id">
                </div>

                <div class="col-lg-12">
                  <h4 class="text-left">Company</h4>
                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="company_name" class="input-text" placeholder="Company Name">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="company_address" class="input-text" placeholder="Company Address">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="company_phone" class="input-text" placeholder="Company Phone Number">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="company_postal_code" class="input-text" placeholder="Company Postal Code">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="company_tin" class="input-text" placeholder="Company TIN">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 float-left">
                  <h4 class="text-left">Property</h4>
                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="property_name" class="input-text" placeholder="Property Name">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="property_number" class="input-text" placeholder="Property Phone Number">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="property_details" class="input-text" placeholder="Property Details">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 float-left">
                  <h4 class="text-left">Room</h4>
                  
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="room_name" class="input-text" placeholder="Room Name">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="room_number" class="input-text" placeholder="Room Number">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="text" name="room_details" class="input-text" placeholder="Room Details">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="room_rate" class="input-text" placeholder="Room Rate">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type="number" name="room_guest" class="input-text" placeholder="Room Max Guest">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="mb-0">
                    <button type="submit" class="btn-md btn-theme btn-block">Get Started</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <a href="{{route('verification.individual', $token->token)}} ">
        <div class="col-lg-3 zoom">
          <div class="form-content-box">
            <div class="details">
              <h3>Individual</h3>
              <img src="{{asset('frontend/img/individual.png')}}" alt="white-logo" style="width:150px;">
            </div>

            <div class="footer">
              <span>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem, nam.
              </span>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
@endsection