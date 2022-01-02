@extends('logout.layouts.common')
@section('title', 'Register')
@include('logout.layouts.header')
@section('contents')
<div class="container pb-5">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      <h2 class="text-center pt-5 pb-5">Register</h2>
      <form action="{{ route('register_submit') }}" method="POST">
        @csrf
        <div class="form-group" style="padding-left: 35%;">
          <label for="name">Name</label>
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
        <button class="btn btn-success mb-5" style="margin-left: 60.5%;" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
