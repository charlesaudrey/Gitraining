<li class="bold {{ Request::is('administrator*') ? 'active' : ''}}">
  <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">supervised_user_circle</i>
    <span class="menu-title" data-i18n="Templates">Administrator</span>
  </a>

  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li class="bold  {{ Request::is('administrator/dashboard') ? 'active' : ''}}">
        <a class="{{ Request::is('administrator/dashboard') ? 'active' : ''}} waves-effect waves-cyan" href="{{route ('adminstrator-dashboard')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Dashboard</span>
        </a>
      </li>

      <li class="bold {{ Request::is('administrator/user-management*') ? 'active' : ''}}">
        <a class=" collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
          <i class="material-icons">radio_button_unchecked</i>
          <span data-i18n="Vertical">User Management</span>
        </a>

        <div class="collapsible-body">
          <ul class="collapsible pl-5" data-collapsible="accordion">
            <li>
              <a class="{{ Request::is('admin/user-management/users') ? 'active' : ''}}" href="{{route ('users.index')}}">
                <i class="material-icons">radio_button_checked</i>
                <span data-i18n="Modern Menu">Users List</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="bold {{ Request::is('admin/property-management*') ? 'active' : ''}}">
        <a class="collapsible-header waves-effect waves-cyan" href="JavaScript:void(0)">
          <i class="material-icons">radio_button_unchecked</i>
          <span data-i18n="Horizontal">Property Management</span>
        </a>
        <div class="collapsible-body">
          <ul class="collapsible pl-5" data-collapsible="accordion">
            @if (Auth::user()->client->platform->name == 'organization')
              <li>
                <a class="{{ Request::is('admin/property-management/companies') ? 'active' : ''}}" href="{{route('companies.index')}}">
                  <i class="material-icons">radio_button_checked</i><span data-i18n="Horizontal Menu">Company List</span>
                </a>
              </li>
            @endif

            <li>
              <a class="{{ Request::is('admin/property-management/properties') ? 'active' : ''}}" href="{{route('properties.index')}}">
                <i class="material-icons">radio_button_checked</i>
                <span data-i18n="Horizontal Menu">Properties</span>
              </a>
            </li>

            <li>
              <a class="{{ Request::is('admin/property-management/propertyRooms') ? 'active' : ''}}" href="{{route('rooms.index')}}">
                <i class="material-icons">radio_button_checked</i>
                <span data-i18n="Horizontal Menu">Rooms</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>