<li class="bold {{ Request::is('accounting*') ? 'active' : ''}}">
  <a  class="collapsible-header waves-effect waves-cyan " href="JavaScript:void(0)">
    <i class="material-icons">account_balance</i>
    <span class="menu-title" data-i18n="Templates">Accounting</span>
  </a>

  <div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('accounting/dashboard') ? 'active' : ''}}" href="{{route('accounting-dashboard')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Dashboard</span>
        </a>
      </li>
      
      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('accounting/payment') ? 'active' : ''}}" href="{{route('payment')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Payment</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('accounting/expenses') ? 'active' : ''}}" href="{{route('expenses')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Expenses</span>
        </a>
      </li>

      <li class="bold">
        <a class="waves-effect waves-cyan {{ Request::is('accounting/income') ? 'active' : ''}}" href="{{route('income')}}">
          <i class="material-icons">radio_button_unchecked</i>
          <span class="menu-title" data-i18n="Chat">Income</span>
        </a>
      </li>
    </ul>
  </div>
</li>