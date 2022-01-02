@extends('login.layouts.common')
@section('title', 'Company')
@include('login.layouts.header')
@section('contents')

<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      </div>
      @endif
      <h2 class="text-center">New User Create</h2>
      <form action="{{ route('User.store') }}" method="POST">
      @csrf
      <div class="form-group" style="padding-left: 35%;">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control w-50">
      </div>
      <div class="form-group" style="padding-left: 35%;">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control w-50">
      </div>
      <div class="form-group" style="padding-left: 35%;">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control w-50">
      </div>
      <div class="form-group" style="padding-left: 35%;">
        <label for="password_confirmed">PasswordConfirm</label>
        <input type="password" name="password_confirmed" class="form-control w-50">
      </div>
      <div class="form-group" style="padding-left: 53%;">
        <label for="role">admin</label>
        <input type="radio" name="role" value="10">
        <label for="role">employee</label>
        <input type="radio" name="role" value="1">
      </div>
      <button type="submit" class="btn btn-primary mt-5 mb-5"
        style="margin-left: 60%;">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
