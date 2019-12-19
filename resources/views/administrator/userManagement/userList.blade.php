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
                                List</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User Management</a>
                            </li>
                            <li class="breadcrumb-item active">Users List
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
        </div><br>
        <div class="col s12">
            <div class="container">
                <!-- users list start -->
                <a class="btn" href="{{route ('addUserList')}}">
                    <i class="material-icons  ">add</i>
                    <span class="responsive-text">Add User</span>
                </a><br><br>
                <section class="users-list-wrapper section">

                    <div class="users-list-filter">

                        <div class="card-panel">
                            <div class="row">

                                <form>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-verified">Verified</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-verified">
                                                <option value="">Any</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-role">Role</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-role">
                                                <option value="">Any</option>
                                                <option value="User">User</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-status">Status</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-status">
                                                <option value="">Any</option>
                                                <option value="Active">Active</option>
                                                <option value="Close">Close</option>
                                                <option value="Banned">Banned</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                                        <button type="submit"
                                            class="btn btn-block indigo waves-effect waves-light">Show</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="users-list-table">


                        <div class="card">
                            <div class="card-content">
                                <!-- datatable start -->
                                <div class="responsive-table">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>id</th>
                                                <th>username</th>
                                                <th>first name</th>
                                                <th>last name</th>
                                                <th>verified</th>
                                                <th>role</th>
                                                <th>status</th>
                                                <th>edit</th>
                                                <th>view</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td>300</td>
                                                <td><a href="{{ route('viewUser')}}">sansan</a>
                                                </td>
                                                <td>Sandy</td>
                                                <td>Corpuz</td>
                                                <td>yes</td>
                                                <td>Admin</td>
                                                <td><span class="chip green lighten-5">
                                                        <span class="green-text">Active</span>
                                                    </span>
                                                </td>
                                            <td><a href="{{ route('editUser')}}"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="{{ route('viewUser')}}"><i
                                                            class="material-icons">remove_red_eye</i></a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>301</td>
                                                <td><a href="page-users-view.html">zena0604</a>
                                                </td>
                                                <td>Zena Buckley</td>
                                                <td>06/04/2020</td>
                                                <td>Yes</td>
                                                <td>User </td>
                                                <td><span class="chip green lighten-5">
                                                        <span class="green-text">Active</span>
                                                    </span>
                                                </td>
                                                <td><a href="page-users-edit.html"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="page-users-view.html"><i
                                                            class="material-icons">remove_red_eye</i></a></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>302</td>
                                                <td><a href="page-users-view.html">delilah0301</a>
                                                </td>
                                                <td>Delilah Moon</td>
                                                <td>03/01/2020</td>
                                                <td>Yes</td>
                                                <td>User </td>
                                                <td><span class="chip green lighten-5">
                                                        <span class="green-text">Active</span>
                                                    </span>
                                                </td>
                                                <td><a href="page-users-edit.html"><i
                                                            class="material-icons">edit</i></a></td>
                                                <td><a href="page-users-view.html"><i
                                                            class="material-icons">remove_red_eye</i></a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
                <!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">

                    <!-- Slide Out Chat -->

                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
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