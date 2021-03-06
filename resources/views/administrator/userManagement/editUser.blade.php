@extends('layouts.app')

@section('content')
<div id="main">
    <div class="row">
        <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Users
                                edit</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User Management</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{route('userList')}}">User List</a>
                            </li>
                            <li class="breadcrumb-item active">Edit User
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- users edit start -->
                <div class="section users-edit">
                    <div class="card">
                        <div class="card-content">
                            <!-- <div class="card-body"> -->
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
                                    <!-- users edit media object start -->
                                    <div class="media display-flex align-items-center mb-2">
                                        <a class="mr-2" href="#">
                                            <img src="{{asset('app-assets/images/avatar/hinata.jpg')}}"
                                                alt="users avatar" class="z-depth-4 circle" height="64" width="64">
                                        </a>
                                        <div class="media-body">
                                            <h5 class="media-heading mt-0">Avatar</h5>
                                            <div class="user-edit-btns display-flex">

                                                <a href="#" class="btn-small indigo">Change</a>
                                                <a href="#" class="btn-small btn-light-pink">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form id="accountForm">
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <input id="fname" name="fname" type="text" class="validate" value="Sandy"
                                                            data-error=".errorTxt1">
                                                        <label for="fname">First Name</label>
                                                        <small class="errorTxt1"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="username" name="username" type="text" value="sansan"
                                                            class="validate" data-error=".errorTxt1">
                                                        <label for="username">Username</label>
                                                        <small class="errorTxt1"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="email" name="email" type="email" class="validate" value="sansan@yahoo.com"
                                                            data-error=".errorTxt3">
                                                        <label for="email">E-mail</label>
                                                        <small class="errorTxt3"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="company" name="company" type="text" class="validate" value="Iristech">
                                                        <label for="company">Company</label>
                                                    </div>
                                                 
                                                </div>
                                            </div>
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <input id="lname" name="lname" type="text" class="validate" value="corpuz"
                                                            data-error=".errorTxt1">
                                                        <label for="lname">Last Name</label>
                                                        <small class="errorTxt1"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <select>
                                                            <option>User</option>
                                                            <option>Staff</option>
                                                        </select>
                                                        <label>Role</label>
                                                    </div>

                                                    <div class="col s12 input-field">
                                                        <input id="company" name="company" type="text" class="validate" value="KL"> 
                                                        <label for="company">Properties</label>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input id="cNumber" name="cNumber" type="text" class="validate" value="0943590345934"
                                                            data-error=".errorTxt3">
                                                        <label for="email">Contact Number</label>
                                                        <small class="errorTxt3"></small>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                            <div class="col s12">
                                                <table class="mt-1">
                                                    <thead>
                                                        <tr>
                                                            <th>Company Name</th>
                                                            <th>Property 1</th>
                                                            <th>Property 2</th>
                                                            <th>Property 3</th>
                                                            <th>Property 4</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Room 1</td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Room 2</td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Room 3</td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" checked />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                            <td>
                                                                <label>
                                                                    <input type="checkbox" />
                                                                    <span></span>
                                                                </label>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <!-- </div> -->
                                            </div>

                                            <div class="col s12 display-flex justify-content-end " style="float:right">

                                                <button type="button" class="btn red justify-content-start">
                                                    Back</button>
                                                <button type="submit" class="btn indigo justify-content-end">
                                                    Add User</button>
                                                <button type="reset" class="btn btn-light">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>


                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a
                        class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i
                            class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i
                                    class="material-icons">help_outline</i></a></li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i
                                    class="material-icons">widgets</i></a></li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i
                                    class="material-icons">today</i></a></li>
                        <li><a href="app-email.html" class="btn-floating red"><i
                                    class="material-icons">mail_outline</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
@endsection