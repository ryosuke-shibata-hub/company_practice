<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/default.css') }}">
  <title>@yield('title')</title>
</head>
<body>
@yield('header')
@yield('contents')
<div class="collapes navbar-collapes" id="app-navbar-collapse">
  <div class="openbtn"><span></span><span></span><span></span></div>
    <nav id="g-nav">
    <div id="nav-bar-right">
  <ul class="nav navbar-nav navbar-left">
    <li class="ft2"style="color:#ffffff; padding-bottom:50px;">LoginUser::{{ Auth::user()->name }}</li>
    @guest
      <li><a href="{{ route('login') }}" class="li-nav-item">Login</a></li>
      @else

      <li><a href="{{ route('companies.index') }}" class="li-nav-item">Company</a></li>
      <li><a href="{{ route('Employees.index') }}" class="li-nav-item">Employee</a></li>
      @can('admin')
      <li><a href="{{ route('companies.create') }}" class="li-nav-item">Register a new company</a>
      </li>
      <li><a href="{{ route('Employees.create') }}" class="li-nav-item">Register a new Employee</a>
      </li>
      <li><a href="{{ route('User.index') }}" class="nav-item">
      Register New User</a></li>
      @endcan
    @endguest
  </ul>
  </div>
  </nav>
</div>
@yield('footer')
</body>
</html>
