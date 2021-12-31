
@section('header')
<header class="header">
  <h2 class="text-center font-f pt-3" style="background-color:black;color:#ffffff; height:70px;">
    Adminpanel to manage companies
  </h2>
  <p>
    <a href="{{ route('Login.index') }}" class="logout btn btn-primary" type="button"><i class="fas fa-sign-out-alt"></i>Sign-out</a>
  </p>
</header>
@endsection
