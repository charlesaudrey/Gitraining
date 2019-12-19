<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
  <div class="brand-sidebar">
    <h1 class="logo-wrapper">
      <a class="brand-logo darken-1" href="{{ route('home') }}">
        <img class="hide-on-med-and-down" src="{{ asset('app-assets/images/logo/logo_circle.png') }}" alt="materialize logo" />
        <img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('app-assets/images/logo/logo_circle.png') }}" alt="materialize logo" />
        <span class="logo-text hide-on-med-and-down" style="font-family: 'Sacramento', cursive;font-size:45px;text-shadow: 2px 4px 3px rgba(0,0,0,0.3);">Drewly.io</span>
      </a>
      
      <a class="navbar-toggler" href="#">
        <i class="material-icons">radio_button_checked</i>
      </a>
    </h1>
  </div>

  <hr>

  <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
    <li class="bold {{ Request::path() === 'home' ? 'active' : ''}} ">
      <a class="{{ Request::path() === 'home' ? 'active' : ''}} waves-effect waves-cyan" href="{{route ('home')}}">
        <i class="material-icons">dashboard</i>
        <span data-i18n="Chat">Dashboard</span>
      </a>
    </li>

    <li class="navigation-header">
      <a class="navigation-header-text">Modules</a>
      <i class="navigation-header-icon material-icons">more_horiz</i>
    </li>
    
    @can('check', 'admin')
      @include('layouts.assets.admin')
    @endcan

    @can('check', 'frontdesk')
      @include('layouts.assets.frontdesk')
    @endcan

    @can('check', 'room')
      @include('layouts.assets.room')
    @endcan

    @can('check', 'invetory')
      @include('layouts.assets.inventory')
    @endcan

    @can('check', 'accounting')
      @include('layouts.assets.accounting')
    @endcan

    @can('check', 'settings')
      <li class="bold {{ Request::is('settings/channelManager') ? 'active' : ''}}">
        <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
          <i class="material-icons">settings_applications</i>
          <span class="menu-title" data-i18n="Templates">Settings</span>
        </a>
        <div class="collapsible-body">
          <ul class="collapsible collapsible-sub" data-collapsible="accordion">
            <li class="bold {{ Request::is('settings/channelManager') ? 'active' : ''}}">
              <a class="waves-effect waves-cyan {{ Request::is('settings/channelManager') ? 'active' : ''}}" href="{{route('channelManager')}}">
                <i class="material-icons">radio_button_unchecked</i>
                <span class="menu-title" data-i18n="Chat">Channel Manager</span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    @endcan
  </ul>

  <div class="navigation-background"></div>
  
  <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
    <i class="material-icons">menu</i>
  </a>
</aside>