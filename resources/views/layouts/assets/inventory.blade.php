<li class="bold {{ Request::is('inventory*') ? 'active' : ''}}">
  <a class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">view_list</i><span class="menu-title" data-i18n="Templates">Inventory</span>
  </a>

  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('inventory/dashboard') ? 'active' : ''}}" href="{{route('inventory-dashboard')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Dashboard</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('inventory/consumable') ? 'active' : ''}}" href="{{route('consumable')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Consumable</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('inventory/nonconsumable') ? 'active' : ''}}" href="{{route('nonconsumable')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Non-Consumable</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('inventory/damageItems') ? 'active' : ''}}" href="{{route('damageItems')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Damaged Items</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('inventory/laundryItems') ? 'active' : ''}}" href="{{route('laundryItems')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Laundry Item</span>
        </a>
      </li>
    </ul>
  </div>
</li>