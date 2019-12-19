@extends('layouts.app')

@section('content')
<div id="main">
  <div class="row">
    <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6 breadcrumbs-left">
            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
              <span>Users edit</span>
            </h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item"><a href="index.html">Home</a>
              </li>
              <li class="breadcrumb-item"><a href="#">User Management</a>
              </li>
              <li class="breadcrumb-item"><a href="{{route('userList')}}">User List</a>
              </li>
              <li class="breadcrumb-item active">Add User
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="container">
        <div class="section users-edit">
          <div class="card">
            <div class="card-content">
              <ul class="tabs mb-1 row">
                <li class="tab">
                  <a class="display-flex align-items-center active" id="account-tab" href="#account">
                    <i class="material-icons mr-1">person_outline</i><span>Account</span>
                  </a>
                </li>
              </ul>

              <div class="divider mb-3"></div>

              <div class="row">
                <div class="col s12" id="account">
                  <div class="media display-flex align-items-center mb-2">
                    <a class="mr-2" href="#">
                      <img src="{{asset('app-assets/images/avatar/hinata.jpg')}}" alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                    </a>

                    <div class="media-body">
                      <h5 class="media-heading mt-0">Avatar</h5>

                      <div class="user-edit-btns display-flex">
                        <a href="#" class="btn-small indigo">Change</a>
                        <a href="#" class="btn-small btn-light-pink">Reset</a>
                      </div>
                    </div>
                  </div>

                  <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    
                    <div class="row">
                      <div class="col s12 m6">
                        <div class="row">
                          <div class="col s12 input-field">
                            <input name="name" type="text">
                            <label for="fname">Name</label>
                            <small class="errorTxt1"></small>
                          </div>

                          <div class="col s12 input-field">
                            <input name="mobile" type="text">
                            <label for="username">Mobile Number</label>
                            <small class="errorTxt1"></small>
                          </div>
                        </div>
                      </div>

                      <div class="col s12 m6">
                        <div class="row">
                          <div class="col s12 input-field">
                            <input name="email" type="text">
                            <label for="lname">Email</label>
                            <small class="errorTxt1"></small>
                          </div>
                        </div>
                      </div>

                      <div class="col s12">
                        <label>Roles:</label>
                        @foreach ($roles as $role)
                          <label class="pl-10">
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" />
                            <span>{{ $role->name }}</span>
                          </label>
                        @endforeach
                      </div>

                      <div class="col s12">
                        <label>Properties:</label>
                        @forelse ($properties as $property)
                          <label class="pl-5">
                            <input type="checkbox" name="properties[]" value="{{ $property->id }}" />
                            <span>{{ $property->name }}</span>
                          </label>
                        @empty
                          No property associated.
                        @endforelse
                      </div>

                      <div class="" style="float:left;margin-top:30px;">
                        <button type="button" class="btn red ">Back</button>
                      </div> 

                      <div class="" style="float:right;margin-top:30px;">
                        <button type="reset" class="btn btn-light">Reset</button>
                        <button type="submit" class="btn indigo">Add User</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection