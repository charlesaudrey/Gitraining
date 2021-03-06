<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Drewly - Channel Manager</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-submenu.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-select.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/fonts/linearicons/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/jquery.mCustomScrollbar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
  <link rel="stylesheet" type="text/css" id="style_sheet" href="{{asset('frontend/css/skins/purple.css')}}">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/ie10-viewport-bug-workaround.css')}}">
  <script src="{{asset('frontend/js/ie-emulation-modes-warning.js')}}"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    .zoom {
      transition: transform .2s;
      margin: 0 auto;
    }

    .zoom:hover {
      -ms-transform: scale(1.1);
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <main class="py-4">
    @yield('verification-content')
  </main>
  <script src="{{asset('frontend/js/jquery-2.2.0.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-submenu.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.mb.YTPlayer.js')}}"></script>
  <script src="{{asset('frontend/js/wow.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.scrollUp.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <script src="{{asset('frontend/js/jquery.filterizr.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('frontend/js/app.js')}}"></script>
  <script src="{{asset('frontend/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>

</html>