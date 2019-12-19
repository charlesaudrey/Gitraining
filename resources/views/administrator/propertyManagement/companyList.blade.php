@extends('layouts.app')

@section('content')
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
                <section class="invoice-list-wrapper section">
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
                            <span class="hide-on-small-only">Add Company</span>
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
                                        <span>Company Name</span>
                                    </th>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>Phone Number</th>
                                    <th>Remarks</th>

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

                                            <a href="#editCompany" class="invoice-action-edit modal-trigger">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a href="#" class="invoice-action-view mr-4 btn-warning-cancel">
                                                <i class="material-icons">delete</i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="modal1" class="modal modal-fixed-footer ">
                        <div class="modal-content">
                            <div class="col s12 m12 l12">
                                <div id="Form-advance" class=" scrollspy">
                                    <div class="card-content">
                                        <h5 class="card-title">Add New Company</h5>
                                        <form>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="first_name01" type="text">
                                                    <label for="first_name01">Company Name</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input id="last_name" type="text">
                                                    <label for="last_name">Company Address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="email5" type="email">
                                                    <label for="email">Postal Code</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input id="password6" type="number">
                                                    <label for="number">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="password6" type="number">
                                                    <label for="number">Tin Number</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <select>
                                                        <option value="" disabled selected>Choose Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>
                                                    <label for="number">Status</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="message5" class="materialize-textarea"></textarea>
                                                    <label for="message">Remarks</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <a class=" modal-close waves-effect waves-light mb-2 btn white-text"><i
                                    class="material-icons left">clear</i>Cancel</a>
                            <a class="waves-effect waves-light mb-2 btn white-text"><i
                                    class="material-icons right">send</i>Save</a>
                        </div>
                    </div>

                    <div id="editCompany" class="modal modal-fixed-footer ">
                        <div class="modal-content">
                            <div class="col s12 m12 l12">
                                <div id="Form-advance" class=" scrollspy">
                                    <div class="card-content">
                                        <h5 class="card-title">Update Company</h5>
                                        <form>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="first_name01" type="text" value="Iristech">
                                                    <label for="first_name01">Company Name</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input id="last_name" type="text" value="Binondo Manila">
                                                    <label for="last_name">Company Address</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="email5" type="email" value="1006">
                                                    <label for="email">Postal Code</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <input id="password6" type="text" value="8243 0261 to 70	">
                                                    <label for="number">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col m6 s12">
                                                    <input id="password6" type="text" value="11-11-11-11-11">
                                                    <label for="number">Tin Number</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <select>
                                                        <option value="" disabled selected>Choose Status</option>
                                                        <option value="1">Active</option>
                                                        <option value="2">Inactive</option>
                                                    </select>
                                                    <label for="number">Status</label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="message5"
                                                        class="materialize-textarea">This is Remarks</textarea>
                                                    <label for="message">Remarks</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <a class=" modal-close waves-effect waves-light mb-2 btn white-text"><i
                                    class="material-icons left">clear</i>Cancel</a>
                            <a class="waves-effect waves-light mb-2 btn white-text"><i
                                    class="material-icons right">send</i>Save</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection