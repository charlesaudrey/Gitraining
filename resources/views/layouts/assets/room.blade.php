<li class="bold {{ Request::is('rooms*') ? 'active' : ''}}">
  <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">meeting_room</i>
    <span class="menu-title" data-i18n="Invoice">Rooms</span>
  </a>
  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('rooms/dashboard') ? 'active' : ''}}" href="{{route ('room-dashboard')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Dashboard</span>
        </a>
      </li>

      <li class="bold {{ Request::is('rooms/housekeeping*') ? 'active' : ''}}">
        <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Templates">Housekeeping</span>
        </a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/housekeeping/roomMakeup') ? 'active' : ''}} " href="{{route('roomMakeup')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">Room makeup</span>
              </a>
            </li>

            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/housekeeping/roomService') ? 'active' : ''}}" href="{{route('roomService')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">Room Service</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="bold {{ Request::is('rooms/maintenance*') ? 'active' : ''}}">
        <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Templates">Repairs & maintenance</span>
        </a>

        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/maintenance/forRepair') ? 'active' : ''}}" href="{{route('forRepair')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">For Repair</span>
              </a>
            </li>

            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/maintenance/repairItem') ? 'active' : ''}}" href="{{route('repairItem')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">Repaired Item</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="bold {{ Request::is('rooms/laundry*') ? 'active' : ''}}">
        <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Templates">Laundy</span>
        </a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/laundry/laudryIn') ? 'active' : ''}}" href="{{route('laudryIn')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">laundry-In</span>
              </a>
            </li>
            <li class="bold">
              <a class="waves-effect waves-cyan {{ Request::is('rooms/laundry/laundryout') ? 'active' : ''}}" href="{{route('laundryout')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">Laundry-out</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>