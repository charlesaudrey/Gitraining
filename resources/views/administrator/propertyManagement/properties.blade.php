@extends('layouts.app')

@section('content')



<!-- BEGIN: Page Main-->
<div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"  style="height:350px !important"></div>
        <div class="pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span style="color: rgba(255,255,255,.85)">Properties</span></h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html" style="color: rgba(255,255,255,.85)">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#" style="color: rgba(255,255,255,.85)">Administrator</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#" style="color: rgba(255,255,255,.85)">Property Management</a>
                  </li>
                  <li class="breadcrumb-item active">Properties
                  </li>
                </ol>
              </div>
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
                            <span class="hide-on-small-only">Add Properties</span>
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
                                        <span>Property Name</span>
                                    </th>
                                    <th>Details</th>
                                    <th>Company Name</th>
                                    <th>Created</th>
                                    <th>Contact Number</th>
                                
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                   <td> </td>
                                    <td></td>
                                 
                                    <td>
                                        <a href="#">Reliance</a>
                                    </td>
                                    <td><span class="invoice-amount">Binondo Manila</span></td>
                                    <td><small>1006</small></td>
                                    <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                    <td>
                                        <span class="bullet green"></span>
                                        <small>043593533</small>
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
                                    <td> </td>
                                    <td>
                                        <a href="#">Iristech</a>
                                    </td>
                                    <td><span class="invoice-amount">Binondo Manila</span></td>
                                    <td><small>1006</small></td>
                                    <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td><span class="chip lighten-5 green green-text">Active</span></td>
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
                                             <a href="#">Reliance</a>
                                         </td>
                                         <td><span class="invoice-amount">Binondo Manila</span></td>
                                         <td><small>1006</small></td>
                                         <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                         <td>
                                             <span class="bullet green"></span>
                                             <small>043593533</small>
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
                                         <td> </td>
                                         <td>
                                             <a href="#">Iristech</a>
                                         </td>
                                         <td><span class="invoice-amount">Binondo Manila</span></td>
                                         <td><small>1006</small></td>
                                         <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                         <td>
                                             <span class="bullet blue"></span>
                                             <small>Car</small>
                                         </td>
                                         <td><span class="chip lighten-5 green green-text">Active</span></td>
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
                                                 <a href="#">Reliance</a>
                                             </td>
                                             <td><span class="invoice-amount">Binondo Manila</span></td>
                                             <td><small>1006</small></td>
                                             <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                             <td>
                                                 <span class="bullet green"></span>
                                                 <small>043593533</small>
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
                                             <td> </td>
                                             <td>
                                                 <a href="#">Iristech</a>
                                             </td>
                                             <td><span class="invoice-amount">Binondo Manila</span></td>
                                             <td><small>1006</small></td>
                                             <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                             <td>
                                                 <span class="bullet blue"></span>
                                                 <small>Car</small>
                                             </td>
                                             <td><span class="chip lighten-5 green green-text">Active</span></td>
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
                                                     <a href="#">Reliance</a>
                                                 </td>
                                                 <td><span class="invoice-amount">Binondo Manila</span></td>
                                                 <td><small>1006</small></td>
                                                 <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                                 <td>
                                                     <span class="bullet green"></span>
                                                     <small>043593533</small>
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
                                                 <td> </td>
                                                 <td>
                                                     <a href="#">Iristech</a>
                                                 </td>
                                                 <td><span class="invoice-amount">Binondo Manila</span></td>
                                                 <td><small>1006</small></td>
                                                 <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                                 <td>
                                                     <span class="bullet blue"></span>
                                                     <small>Car</small>
                                                 </td>
                                                 <td><span class="chip lighten-5 green green-text">Active</span></td>
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
                                        <a href="#">Reliance</a>
                                    </td>
                                    <td><span class="invoice-amount">Binondo Manila</span></td>
                                    <td><small>1006</small></td>
                                    <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                    <td>
                                        <span class="bullet green"></span>
                                        <small>043593533</small>
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
                                    <td> </td>
                                    <td>
                                        <a href="#">Iristech</a>
                                    </td>
                                    <td><span class="invoice-amount">Binondo Manila</span></td>
                                    <td><small>1006</small></td>
                                    <td><span class="invoice-customer">8243 0261 to 70</span></td>
                                    <td>
                                        <span class="bullet blue"></span>
                                        <small>Car</small>
                                    </td>
                                    <td><span class="chip lighten-5 green green-text">Active</span></td>
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