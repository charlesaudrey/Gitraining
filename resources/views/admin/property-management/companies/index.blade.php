@extends('layouts.app')

@section('content')
@include('admin.property-management.companies.assets.create-modal')

@foreach ($companies as $company)
  @include('admin.property-management.companies.assets.edit-modal')   
@endforeach

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
            <a href="#create-company"
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
                  <th></th>
                  <th></th>
                  <th>Company Name</th>
                  <th>Address</th>
                  <th>Postal Code</th>
                  <th>Phone Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($companies as $company)
                  <tr>
                    <td></td>
                    <td></td>
                    <td>
                      <a href="{{ route('companies.show') }}">{{ $company->name }}</a>
                    </td>
                    <td>{{ $company->address }}</td>
                    <td><small>{{ $company->postal_code }}</small></td>
                    <td>{{ $company->phone }}</td>
                    <td>{{ $company->status ? 'Active' : 'Inactive' }}</td>
                    <td>
                      <div class="invoice-action">
                        <a href="#edit-company-{{ $company->id }}" class="invoice-action-edit modal-trigger">
                          <i class="material-icons">edit</i>
                        </a>
                        <a href="#" class="invoice-action-view mr-4 btn-warning-cancel">
                          <i class="material-icons">delete</i>
                        </a>
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection