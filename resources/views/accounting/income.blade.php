@extends('layouts.app')

@section('content')

<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"  style="height:350px !important"></div>
        <div class="pb-0 pt-4" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6 breadcrumbs-left">
                        <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span style="color:rgba(255,255,255,.85)">Accounting Module</span></h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html" style="color: rgba(255,255,255,.85)">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#" style="color: rgba(255,255,255,.85)">Accounting</a>
                            </li>
                            <li class="breadcrumb-item active">Expenses
                            </li>
                        </ol>
                    </div>
                 </div>
                <div class="col s12">
                    <div class="container">
                        <section class="invoice-list-wrapper section">
                            <!--export pdf -->
                                <div class="invoice-filter-action mr-3">
                                    <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
                                        <i class="material-icons">picture_as_pdf</i>
                                        <span class="hide-on-small-only">Export to PDF</span>
                                    </a>
                                </div>
                                <!-- create invoice button-->
                                <div class="invoice-create-btn">
                                    <a href="#modal1"
                                    class="btn waves-effect waves-light  modal-trigger invoice-create border-round z-depth-4">
                                    <i class="material-icons">add</i>
                                    <span class="hide-on-small-only">Add Consumable</span>
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
                                                    <span>Item Name</span>
                                                </th>
                                                <th>Category</th>
                                                <th>Description</th>
                                                <th>Quantity</th>
                                                <th>Created</th>
                                                <th>Price</th>
                                                <th>Amount</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                    
                    
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            
                                                <td>
                                                    <a href="#">Shampoo</a>
                                                </td>
                                                <td><span class="invoice-amount">Bathroom</span></td>
                                                <td><small>Dove Shampoo</small></td>
                                                <td><span class="invoice-customer">3</span></td>
                                                <td>
                                                    <span class="bullet green"></span>
                                                    <small>043593533</small>
                                                </td>
                                                <td>
                                                    <span>100.00</span>
                                                </td>
                                                <td>
                                                    <span>300.00</span>
                                                </td>
                                                <td>
                                                    <span class="chip lighten-5 red red-text">Inactive</span>
                                                </td>
                                                <td>
                                                    <span class="chip lighten-5 red red-text">Inactive</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div><br>
    </div>
</div>            

@endsection