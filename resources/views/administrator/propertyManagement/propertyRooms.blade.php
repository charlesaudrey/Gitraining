@extends('layouts.app')

@section('content')



<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                <!-- invoice list -->
                <section class="invoice-list-wrapper section">
                    <!-- create invoice button-->
                    <!-- Options and filter dropdown button-->
                    <div class="invoice-filter-action mr-3">
                        <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
                            <i class="material-icons">picture_as_pdf</i>
                            <span class="hide-on-small-only">Export to PDF</span>
                        </a>
                    </div>
                    <!-- create invoice button-->
                    <div class="invoice-create-btn">
                        <a href="#" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                            <i class="material-icons">add</i>
                            <span class="hide-on-small-only">Add Rooms</span>
                        </a>
                    </div>
                    <div class="filter-btn">
                        <!-- Dropdown Trigger -->
                        <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
                            data-target='btn-filter'>
                            <span class="hide-on-small-only">Filter Status</span>
                            <i class="material-icons">keyboard_arrow_down</i>
                        </a>
                        <!-- Dropdown Structure -->
                        <ul id='btn-filter' class='dropdown-content'>
                            <li><a href="#!">Active</a></li>
                            <li><a href="#!">Inactive</a></li>

                        </ul>
                    </div>
                    <div class="responsive-table">
                        <table class="table invoice-data-table white border-radius-4 pt-1">
                            <thead>
                                <tr>
                                    <!-- data table responsive icons -->
                                    <th></th>
                                    <th></th>
                                    <th>
                                        <span>Room Number</span>
                                    </th>
                                    <th>Room Name</th>
                                    <th>Property Name</th>
                                    <th>Details</th>
                                    <th>Max Guest No.</th>
                                    <th>Rate</th>
                                    <th>User Maintenance</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">10D</a>
                                    </td>
                                    <td><span class="invoice-amount">10D</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">10D</a>
                                    </td>
                                    <td><span class="invoice-amount">10D</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">14A</a>
                                    </td>
                                    <td><span class="invoice-amount">14A</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">15F</a>
                                    </td>
                                    <td><span class="invoice-amount">15F</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">16E</a>
                                    </td>
                                    <td><span class="invoice-amount">16E</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">16F</a>
                                    </td>
                                    <td><span class="invoice-amount">16F</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">18i2</a>
                                    </td>
                                    <td><span class="invoice-amount">18i2</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">30C</a>
                                    </td>
                                    <td><span class="invoice-amount">30C</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> </td>
                                    <td></td>

                                    <td>
                                        <a href="#">30H</a>
                                    </td>
                                    <td><span class="invoice-amount">30H</span></td>
                                    <td><small>IRISTech Towers </small></td>
                                    <td><small>IRISTech Towers Details </small></td>
                                    <td><span class="invoice-customer">4</span></td>
                                    <td>
                                        6500.00
                                    </td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td>
                                        <span class="chip lighten-5 red red-text">Inactive</span>
                                    </td>
                                    <td>
                                        <div class="invoice-action">
                                            <a href="#" class="invoice-action-view mr-4">
                                                <i class="material-icons">remove_red_eye</i>
                                            </a>
                                            <a href="#" class="invoice-action-edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </section><!-- START RIGHT SIDEBAR NAV -->



                @endsection