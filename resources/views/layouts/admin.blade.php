<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Party Needs System - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"/>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" href="{{ url('/') }}">PNMS</a>
        </div>
      </div>
    </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 sidebar">
        <h3>Maintenance</h3>
        <ul class="nav nav-sidebar">
          <li><a href="{{ url('/customer') }}">Customer</a></li>
          <li><a href="{{ url('/food') }}">Food</a></li>
        </ul>
      </div>

      <div class="col-lg-10 content" style="padding:25px;">
        @yield('error')
        @yield('content')
      </div>
    </div>
  </div>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.dataTables.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.validate.js') }}" type="text/javascript"></script>
  @yield('js')

  </body>
</html>