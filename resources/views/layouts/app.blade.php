<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  @include('layouts.assets.meta')
  <title>Dashboard | PMS-Revamp</title>
  @include('layouts.assets.link')
</head>
<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
  @include('layouts.assets.header')
  @include('layouts.assets.aside')

  <main class="py-4">
      @yield('content')
  </main>

  @include('layouts.assets.footer')
  @include('layouts.assets.script')
</body>
</html>