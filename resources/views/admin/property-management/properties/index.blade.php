@extends('layouts.app')

@section('content')
@include('admin.property-management.properties.assets.create-modal')

@foreach ($properties as $property)
  @include('admin.property-management.properties.assets.edit-modal')
@endforeach

<div id="main">
  <div class="row">
    <div class="content-wrapper-before gradient-45deg-indigo-purple"  style="height:350px !important"></div>
    <div class="pb-0 pt-4" id="breadcrumbs-wrapper">
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
              <section class="invoice-list-wrapper section">
                <div class="invoice-filter-action mr-3">
                  <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
                    <i class="material-icons">picture_as_pdf</i>
                    <span class="hide-on-small-only">Export to PDF</span>
                  </a>
                </div>

                <div class="invoice-create-btn">
                  <a href="#create-property"
                  class="btn waves-effect waves-light  modal-trigger invoice-create border-round z-depth-4">
                  <i class="material-icons">add</i>
                  <span class="hide-on-small-only">Add Properties</span>
                  </a>
                </div>

                <div class="filter-btn">
                  <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
                    data-target='btn-filter'>
                    <span class="hide-on-small-only">Filter Status</span>
                    <i class="material-icons">keyboard_arrow_down</i>
                  </a>
                  <ul id='btn-filter' class='dropdown-content'>
                    <li><a href="#!">Active</a></li>
                    <li><a href="#!">Inactive</a></li>
                  </ul>
                </div>
                <div class="responsive-table">
                  <table class="table invoice-data-table white border-radius-4 pt-1">
                    <thead>
                      <tr>
                        <th>Property Name</th>
                        <th>Details</th>
                        <th>Contact Number</th>
                        @if (Auth::user()->client->platform->name == 'organization')
                          <th>Company Name</th>
                        @endif
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($properties as $property)
                        <tr>
                          <td>
                            <a href="{{ route('properties.show', $property->id) }}">{{ $property->name }}</a>
                          </td>
                          <td>{{ $property->details }}</td>
                          <td>{{ $property->number }}</td>
                          @if (Auth::user()->client->platform->name == 'organization')
                            <td>{{ $property->company->name }}</td>
                          @endif
                          <td>{{ $property->status ? 'Active' : 'Inactive' }}</td>
                          <td>
                            <a href="#edit-property-{{ $property->id }}" class="invoice-action-edit modal-trigger">
                              <i class="material-icons">edit</i>
                            </a>
                            <a href="#" class="invoice-action-view mr-4 btn-warning-cancel">
                              <i class="material-icons">delete</i>
                            </a>
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
    </div>
  </div>
</div>
@endsection