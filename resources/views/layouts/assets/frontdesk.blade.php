<li class="bold {{ Request::is('frontdesk*') ? 'active' : ''}} ">
  <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">desktop_windows</i>
    <span class="menu-title" data-i18n="Templates">Frontdesk</span>
  </a>

  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li class="bold">
        <a lass="waves-effect waves-cyan {{ Request::is('frontdesk/dashboard*') ? 'active' : ''}}" href="{{route ('frontdesk-dashboard')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Dashboard</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('frontdesk/booking*') ? 'active' : ''}}" href="{{route ('booking')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Booking</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('frontdesk/reservation*') ? 'active' : ''}}" href="{{route ('reservation')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Reservation</span>
        </a>
      </li>
    </ul>
  </div>
</li>