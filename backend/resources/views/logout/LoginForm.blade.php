@extends('logout.layouts.common')
@section('title', 'Login')
@include('logout.layouts.header')
@section('contents')
<div class="container pb-5">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h2 class="text-center pt-5 pb-5">Login</h2>
      @if(session('login_error'))
      <span class="text-danger" style="padding-left: 35%;">
        {{ session('login_error') }}
      </span>
      @endif
      <form action="{{ route('login_submit') }}" method="POST">
        @csrf
        <div class="form-group" style="padding-left: 35%;">
          <label for="email">UserName</label>
          <input type="text" name="name" class="form-control w-50">
        </div>
        <div class="form-group" style="padding-left: 35%;">
          <label for="email">UserEmail</label>
          <input type="text" name="email" class="form-control w-50">
        </div>
        <div class="form-group" style="padding-left: 35%;">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control w-50">
        </div>
        <button class="btn btn-submit mb-5" style="margin-left: 61%;" type="submit">Login</button>
      </form>
      <div class="register">
        <p>
          <span style="padding-left: 43%;">
            <a class="btn btn-success mb-5" href="{{ route('register') }}">NewUserRegister</a>
          </span>
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
