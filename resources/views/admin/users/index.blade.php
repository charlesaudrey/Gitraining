@extends('layouts.app')

@section('content')
<div id="main">
  <div class="row">
    <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6 breadcrumbs-left">
            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down">
              <span>Users List</span>
            </h5>

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
        <a class="btn" href="{{route ('users.create')}}">
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
                    <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="users-list-table">
            <div class="card">
              <div class="card-content">
                <div class="responsive-table">
                  <table id="users-list-datatable" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($users as $user)
                        <tr>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>{{ $user->mobile }}</td>
                          <td>{{ $user->status ? 'Active' : 'Inactive' }}</td>
                          <td>
                            <div class="invoice-action">
                              <a href="{{ route('users.edit', $user->id) }}" class="invoice-action-edit modal-trigger">
                                <i class="material-icons">edit</i>
                              </a>

                              <a class="invoice-action-edit modal-trigger" href="{{ route('users.destroy', $user->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">
                                <i class="material-icons">delete</i>
                              </a>

                              <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                              </form>
                            </div>
                          </td>
                        </tr>
                      @empty
                        No User Found.
                      @endforelse
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
          <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
            <i class="material-icons">add</i>
          </a>

          <ul>
            <li>
              <a href="css-helpers.html" class="btn-floating blue">
                <i class="material-icons">help_outline</i>
              </a>
            </li>

            <li>
              <a href="cards-extended.html" class="btn-floating green">
                <i class="material-icons">widgets</i>
              </a>
            </li>

            <li>
              <a href="app-calendar.html" class="btn-floating amber">
                <i class="material-icons">today</i>
              </a>
            </li>

            <li>
              <a href="app-email.html" class="btn-floating red">
                <i class="material-icons">mail_outline</i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection