@extends('logout.layouts.common')
@section('title', 'Register')
@include('logout.layouts.header')
@section('contents')
<div class="container pb-5">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h3 class="text-center pt-5 pb-5">Wellcome To</h3>
      <h3 class="text-center pb-5">{{ session('name') }}!</h3>
      <div class="login_link">
        <p>
          <span style="padding-left: 45%;">
            <a class="btn btn-success mb-5" href="{{ route('login') }}">Login Link</a>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
