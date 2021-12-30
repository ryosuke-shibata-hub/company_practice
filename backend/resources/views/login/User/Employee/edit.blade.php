@extends('login.layouts.common')
@section('title', 'EmployeeEdit')
@include('login.layouts.header')
@section('contents')

<div class="container">
  <div class="row">
    <div class="col-md-12 col-md-offset-2">
      @if($errors->any())
      <div class="alert-danger">
        <ul>
          @foreach($$errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <h2>EmployeeEdit</h2>
      <form action="{{ route('Employees.update',[$employees->id]) }}"
            method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
          <label for="first_name">first_name</label>
          <input type="text" name="first_name" class="form-control"
                  value="{{ $employees->first_name }}">
        </div>
        <div class="form-group">
          <label for="last_name">last_name</label>
          <input type="text" name="last_name" class="form-control"
                  value="{{ $employees->last_name }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
@include('login.layouts.footer')
