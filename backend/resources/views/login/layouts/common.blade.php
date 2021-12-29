<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
<body>
@yield('header')
@yield('contents')
<div class="collapes navbar-collapes" id="app-navbar-collapse">
  <ul class="nav navbar-nav navbar-left">
    @guest
      @else
      <li><a href="{{ route('companies.index') }}">Company</a></li>
      <li><a href="{{ route('Employees.index') }}">Employee</a></li>
    @endguest
  </ul>

  <ul class="nav navbar-nav navbar-right">
    @guest
      <li><a href="{{ route('Login.index') }}">Login</a></li>
      <li><a href="{{ route('Register.index') }}">Register</a></li>
      <li><a href="{{ route('companies.index') }}">Company</a></li>
      <li><a href="{{ route('Employees.index') }}">Employee</a></li>
      <li><a href="{{ route('companies.create') }}">Register a new company</a></li>
    @else
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
            aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->name() }}<span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}"
                    method="post"
                    style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </li>
    @endguest
  </ul>
</div>
@yield('footer')
</body>
</html>
